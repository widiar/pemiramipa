<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use App\Voting;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function voting()
    {
        $user = Auth::user();
        $mahasiswa = Mahasiswa::with('user')->find($user->nim);
        // dd($mahasiswa->user->email);
        return view('dashboard.voting', compact('mahasiswa'));
    }
    public function suara(Request $request)
    {
        $voting = Voting::first();
        return view('dashboard.datasuara', compact('voting'));
    }
    public function masuksuara(Request $request)
    {
        $suara = Voting::find(1);
        $user = Auth::user();
        $mahasiswa = Mahasiswa::with('user')->find($user->nim);
        if ($request->calonbem == 1) {
            Voting::where('id', 1)->update(['bem1' => $suara->bem1 + 1]);
        } else {
            Voting::where('id', 1)->update(['bem2' => $suara->bem2 + 1]);
        }
        if (strcmp($mahasiswa->prodi, 'Matematika') == 0) {
            if ($request->calonhima == 1)
                Voting::where('id', 1)->update(['matik1' => $suara->matik1 + 1]);
            else
                Voting::where('id', 1)->update(['matik2' => $suara->matik2 + 1]);
        } elseif (strcmp($mahasiswa->prodi, 'Fisika') == 0) {
            if ($request->calonhima == 1)
                Voting::where('id', 1)->update(['fisika1' => $suara->fisika1 + 1]);
            else
                Voting::where('id', 1)->update(['fisika2' => $suara->fisika2 + 1]);
        } elseif (strcmp($mahasiswa->prodi, 'Biologi') == 0) {
            if ($request->calonhima == 1)
                Voting::where('id', 1)->update(['bio1' => $suara->bio1 + 1]);
            else
                Voting::where('id', 1)->update(['bio2' => $suara->bio2 + 1]);
        } elseif (strcmp($mahasiswa->prodi, 'Informatika') == 0) {
            if ($request->calonhima == 1)
                Voting::where('id', 1)->update(['ilkom1' => $suara->ilkom1 + 1]);
            else
                Voting::where('id', 1)->update(['ilkom2' => $suara->ilkom2 + 1]);
        } elseif (strcmp($mahasiswa->prodi, 'Farmasi') == 0) {
            if ($request->calonhima == 1)
                Voting::where('id', 1)->update(['farmasi1' => $suara->farmasi1 + 1]);
            else
                Voting::where('id', 1)->update(['farmasi2' => $suara->farmasi2 + 1]);
        }
        Mahasiswa::where('nim', $mahasiswa->nim)->update(['udahVoting' => 1]);
        return 'Sukses';
    }
    public function gantipassword(Request $request)
    {
        $rules = [
            'passwordlama' => 'required',
            'passwordbaru' => 'required|same:passwordbaru2|min:8|different:passwordlama',
            'passwordbaru2' => 'required'
        ];
        $msg = [
            'required' => 'Tolong :attribute di isi ya :)',
            'passwordbaru.min' => 'Password baru haruslah :min karakter',
            'passwordbaru.same' => 'Password harus sama dengan ketik ulang password',
            'passwordbaru.different' => 'Password baru harus beda dengan password lama dong ya :)',
            'passwordbaru2.required' => 'Ketik Ulang Password tolong di isi'
        ];
        $valid = Validator::make($request->all(), $rules, $msg);
        if ($valid->fails())
            return redirect('/dashboard/ubahpassword')->withErrors($valid)->withInput();
        $user = Auth::user();
        $datauser = User::where('email', $user->email)->first();
        if (Hash::check($request->passwordlama, $datauser->password)) {
            $password = Hash::make($request->passwordbaru);
            User::where('email', $user->email)->update(['password' => $password]);
            return redirect('/dashboard/ubahpassword')->with('sukses', 'Password anda berhasil di ubah.');
        } else
            return redirect('/dashboard/ubahpassword')->with('status', 'Password lama anda masukkan salah.');
    }
    public function updatechart()
    {
        $data = Voting::first();
        return response()->json(compact('data'));
    }
}
