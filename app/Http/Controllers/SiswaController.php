<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function GuzzleHttp\Promise\all;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $siswa = Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {

            $siswa = Siswa::all();
        }
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function create(Request $request)
    {
        //insert ke table User
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('kamil');
        $user->remember_token = Str::random(60);
        $user->save();

        //insert ke table Siswa
        $request->request->add(['user_id' => $user->id]);
        $tambah = Siswa::create($request->all());
        return redirect('/siswa')->with(['success' => 'Data berhasil ditambah']);
    }

    public function edit($id)
    {
        $siswaedit = Siswa::find($id);
        return view('siswa.edit', ['siswaedit' => $siswaedit]);
    }

    public function update(Request $request, $id)
    {
        $updatesiswa = Siswa::find($id);
        $updatesiswa->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            //untuk memindahkan file ke folder publi/images dengan nama original
            $updatesiswa->avatar = $request->file('avatar')->getClientOriginalName();
            $updatesiswa->save();
        }

        return redirect('/siswa')->with(['success' => 'Data berhasil di update']);
    }

    public function delete($id)
    {
        $deletesiswa = Siswa::find($id);
        $deletesiswa->delete();

        return redirect('/siswa')->with(['success' => 'Data berhasil di hapus']);
    }

    public function profile($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.profile', ['siswa' => $siswa]);
    }
}
