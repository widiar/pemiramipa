<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Mail\ResetPassword;
use App\TokenUser;
use App\User;
use App\Voting;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    private function compressImage($src, $dst, $q)
    {
        $info = getimagesize($src);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($src);
        elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($src);
        imagejpeg($image, $dst, $q);
    }
    public function daftar(Request $request)
    {
        // return redirect('/register')->with('err', 'Anda berhasil Mendaftar');
        $rules = [
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa|digits:10',
            'password' => 'required|same:password2|min:8',
            'ktm' => 'required|image|mimes:png,jpeg|max:1024',
            'fotbar' => 'required|image|mimes:png,jpeg|max:5120',
            'prodi' => 'required',
            'email' => 'email|required|unique:users',
        ];
        $messages = [
            'fotbar.required' => 'Tolong foto bareng di isi',
            'required' => 'Tolong :attribute di isi',
            'nim.size' => 'NIM haruslah 10 digit',
            'password.same' => 'Password haruslah sama',
            'min' => ':Attribute haruslah minimal :min karakter',
            'max' => ['file' => ':Attribute haruslah maksimal :max kilobytes']
        ];
        $valid = Validator::make($request->all(), $rules, $messages);
        if ($valid->fails()) {
            return redirect('/register')->withErrors($valid)->withInput();
        }
        $get = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . env('SECRET_KEY') . "&response=" . $request->response);
        $rechapta = json_decode($get);
        if ($rechapta->success == false) {
            return redirect('/register')->with('err', 'Anda Robot. Jangan gunakan bot untuk daftar');
        }
        $namaktm = uniqid() . '.' . $request->ktm->extension();
        $namafotbar = uniqid() . '.' . $request->fotbar->extension();
        // dd($_FILES['ktm']);
        $tmpktm = $_FILES['ktm']['tmp_name'];
        $tmpfotber = $_FILES['fotbar']['tmp_name'];
        $password = Hash::make($request->password);
        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'ktm' => $namaktm,
            'fotbar' => $namafotbar,
        ];
        $user = [
            'nim' => $request->nim,
            'password' => $password,
            'email' => $request->email,
        ];
        $u = User::create($user);
        $m = Mahasiswa::create($data);
        $this->compressImage($tmpktm, 'img/ktm/' . $namaktm, 50);
        $this->compressImage($tmpfotber, 'img/fotbar/' . $namafotbar, 50);
        // $request->ktm->storeAs('ktm', $namaktm, 'upi');
        // $request->fotbar->storeAs('fotbar', $namafotbar, 'upi');
        if ($u && $m) {
            return redirect('/register')->with('status', 'Anda berhasil Mendaftar');
        } else {
            return redirect('/register')->with('err', 'Terjadi kesalahan. Silahkan Hubungi Panitia');
        }
    }
    public function masuk(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);
        $get = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . env('SECRET_KEY') . "&response=" . $request->response);
        $rechapta = json_decode($get);
        if ($rechapta->success == false) {
            return redirect('/login')->with('status', 'Anda Robot :)');
        }
        // $data = User::where('nim', $request->nim)->first();        
        $data = User::with('mahasiswa')->find($request->nim);
        //cara manual
        // dd($data->mahasiswa->waktuVoting);
        // if ($data) {
        //     if (Hash::check($request->password, $data->password)) {
        //         session(['key' => 'value']);
        //         dd($request->session()->get('key'));
        //     } else {
        //         return "Salah";
        //     }
        // } else {
        //     return "Gagal";
        // }
        // $waktu1 = new DateTime("2020-10-29 13:00:00");
        // $waktu2 = new DateTime("2020-10-29 14:00:00");
        //ini untuk nentuin waktu login
        // if ($data->mahasiswa->waktuVoting == 1) {
        //     if (new DateTime() < $waktu1) {
        //         return redirect('/login')->with('status', 'Anda belum waktunya LOGIN')->withInput();
        //     } elseif (new DateTime() > $waktu2)
        //         return redirect('/login')->with('status', 'Waktu anda sudah lewat')->withInput();
        // } elseif ($data->mahasiswa->waktuVoting == 2)
        //     if (new DateTime() < $waktu2)
        //         return redirect('/login')->with('status', 'Anda belum waktunya LOGIN')->withInput();

        //untuk waktu login tombol admin
        $vote = Voting::first();
        $waktu = $vote->waktuVote;

        //cara laravel
        $cr = [
            'nim' => $request->nim,
            'password' => $request->password,
            // 'verif' => 1
        ];
        if (Auth::attempt($cr)) {
            if ($data && $data->verif == 0) {
                Auth::logout();
                return redirect('/login')->with('status', 'NIM Anda belum di verifikasi. Silahkan hubungi panitia')->withInput();
            }
            if ($data && $waktu == 0 && $data->role == 0) {
                Auth::logout();
                return redirect('/countdown');
            }
            if ($data && $waktu == 5 && $data->role == 0) {
                Auth::logout();
                return redirect('/selesai');
            }
            if ($data && $data->mahasiswa->waktuVoting != $waktu && $data->role == 0) {
                Auth::logout();
                return redirect('/login')->with('status', 'Anda belum waktunya untuk memilih')->withInput();
            }
            if ($data && $data->mahasiswa->udahvotinghima == 1) {
                Auth::logout();
                return redirect('/login')->with('warning', 'Anda sudah memilih');
            }
            if ($data->role == 0) {
                return redirect('/voting');
            } else if ($data->role == 2) {
                return redirect('/datasuara');
            } else {
                return redirect('/mulai');
            }
        } else {
            return redirect('/login')->with('status', 'NIM atau Password Anda Salah')->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function kelupaan(Request $request)
    {
        $request->validate([
            'nim' => 'required',
        ]);
        $data = User::where('nim', $request->nim)->orWhere('email', $request->nim)->first();
        if (!$data || $data->role == 1) {
            return redirect('/login')->with('status', 'Email atau NIM yang Anda Masukkan Belum Terdaftar');
        } elseif ($data->verif == 0) {
            return redirect('/login')->with('status', 'Akun anda belum terverifikasi silahkan hubungi panitia')->withInput();
        } elseif ($data->role == 0 || $data->role == 2) {
            $cek = TokenUser::where('email', $data->email)->first();
            $token = base64_encode(random_bytes(17));
            if ($cek) {
                TokenUser::where('email', $data->email)->update(['token' => $token]);
            } else {
                $masuk = [
                    'email' => $data->email,
                    'token' => $token,
                ];
                TokenUser::create($masuk);
            }
            Mail::to($data->email)->send(new ResetPassword($data->email, urlencode($token)));
            return redirect('/lupapassword')->with('status', 'Sudah dikirim. Silahkan cek email Anda');
        }
    }
    public function resetpassemail(Request $request)
    {
        $data = TokenUser::where('email', $request->email)->first();
        // dd(urldecode($request->token));
        // dd($request->token);
        if ($data) {
            if (strcmp($data->token, urldecode($request->token)) == 0) {
                $expire = new DateTime($data->updated_at);
                $expire->modify('+1 hour');
                if (new DateTime() < $expire) {
                    $request->session()->put('emailyanglupa', $data->email);
                    return redirect('/forgotpassword');
                }
            }
        }
        return redirect('/login')->with('status', 'Link sudah expired.');
    }
    public function ubahpasslewatemail(Request $request)
    {
        if (!$request->session()->has('emailyanglupa'))
            return redirect('/login')->with('status', 'Silahkan klik tombol lupa password dulu');
        return view('ubahpassword');
    }
    public function storepasslewatemail(Request $request)
    {
        //validation
        $rules = [
            'password' => 'required|same:ulangipassword|min:8',
            'ulangipassword' => 'required'
        ];
        $msg = [
            'required' => 'Tolong :attribute di isi',
            'password.same' => 'Password haruslah sama',
            'min' => ':Attribute haruslah minimal :min karakter'
        ];
        $valid = Validator::make($request->all(), $rules, $msg);
        if ($valid->fails()) {
            return redirect('/forgotpassword')->withErrors($valid)->withInput();
        }
        //buat ubah password
        $email = $request->session()->get('emailyanglupa');
        $mahasiswa = User::where('email', $email)->first();
        if ($mahasiswa) {
            if (Hash::check($request->password, $mahasiswa->password)) {
                return redirect('/forgotpassword')->with('status', 'Password anda sama dengan sebelumnya, silahkan gunakan password yang lain');
            }
            $password = Hash::make($request->password);
            User::where('email', $email)->update(['password' => $password]);
            TokenUser::where('email', $email)->delete();
            $request->session()->forget('emailyanglupa');
            return redirect('/login')->with('statussukses', 'Password berhasil diubah silahkan login');
        }
    }
}
