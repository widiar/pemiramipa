<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Mail\VerifikasiPemilihPresma;
use App\User;
use App\Voting;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function verifpemilih(Request $request)
    {
        $mahasiswa = User::with('mahasiswa')->where('role', 0)->paginate(10);
        // dd($tmp);
        // $mahasiswa = Mahasiswa::where('role', 0)->paginate(2);

        // orderby
        // $cur = LengthAwarePaginator::resolveCurrentPage();
        // $perpage = 2;
        // $alldata = Mahasiswa::where('role', 0)->orderBy('prodi', 'asc')->get()->toArray();
        // $data = array_slice($alldata, (($cur * $perpage) - $perpage), $perpage, true);
        // $mahasiswa = new LengthAwarePaginator($data, count($alldata), $perpage, $cur, ['path' => $request->url()]);

        return view('admin.verifikasipemilih', compact('mahasiswa'));
    }
    public function ktmpemilih($id)
    {
        $data = Mahasiswa::find($id);
        // return $data->nama;
        $string = [];
        if ($data) {
            $string[0] = '
            <div class="row">
                <div class="col">
                    <h3>Bukti KTM </h3>
                    <img src="/img/ktm/' . $data->ktm . '" alt="" width="100%">
                </div>
                <div class="col">
                    <h3>Bukti Foto Bareng </h3>
                    <img src="/img/fotbar/' . $data->fotbar . '" alt="" width="100%">
                </div>
            </div>
            ';
            if ($data->user->verif == '0') {
                $string[1] = '
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="/verifikasipemilih/' . $id . '" method="post" class="konfirm">
                    <input type="hidden" name="_method" value="patch">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <button onclick="bukti()" type="submit" class="btn btn-primary">Konfirmasi</button>
                </form>';
            } else {
                $string[1] = '
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="/verifktm/' . $id . '" method="post" class="konfirm">
                    <input type="hidden" name="_method" value="patch">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <button onclick="bukti()" type="submit" class="btn btn-danger">Batal Konfirmasi</button>
                </form>';
            }
            return json_encode($string);
        }
    }
    public function ktmverif(Mahasiswa $mahasiswa)
    {
        User::where('nim', $mahasiswa->nim)->update(['verif' => 1]);
        $user = User::where('nim', $mahasiswa->nim)->first();
        Mail::to($user->email)->send(new VerifikasiPemilihPresma($mahasiswa->nim));
        return "Sukses";
    }
    public function ktmgajadiverif($nim)
    {
        User::where('nim', $nim)->update(['verif' => 0]);
        return "Sukses";
    }
    public function hapuspemilih($nim)
    {
        $ktm = Mahasiswa::where('nim', $nim)->first();
        Storage::disk('upi')->delete('ktm/' . $ktm->ktm);
        Mahasiswa::destroy($nim);
        User::destroy($nim);
        return "Sukses";
    }

    public function ubahwaktu(Request $r, $nim)
    {
        // dd($nim);
        Mahasiswa::where('nim', $nim)->update(['waktuVoting' => $r->waktu]);
        return $r->waktu;
        // if ($r->waktu == 1)
        //     return "1";
        // elseif ($r->waktu == 2)
        //     return 2;
        // elseif ($r->waktu == 3)
        //     return 3;
    }
    public function superadmin()
    {
        return view('admin.superadmin');
    }
    public function mulai()
    {
        $vote = Voting::first();
        return view('admin.mulaiajadah', compact('vote'));
    }
    public function mulaiupdate(Request $request)
    {
        // dd($request->all());
        if (isset($request->mulai)) {
            Voting::where('id', 1)->update(['waktuVote' => 1]);
            return redirect('/mulai');
        } else {
            Voting::where('id', 1)->update(['waktuVote' => 0]);
            return redirect('/mulai');
        }
    }
}
