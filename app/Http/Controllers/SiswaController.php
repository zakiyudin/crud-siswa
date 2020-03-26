<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function create(Request $request)
    {
        $tambah = Siswa::create($request->all());
        return redirect('/siswa');
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

        return redirect('/siswa')->with('Sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $deletesiswa = Siswa::find($id);
        $deletesiswa->delete();

        return redirect('/siswa')->with('Sukses', "Data berhasil di hapus");
    }
}
