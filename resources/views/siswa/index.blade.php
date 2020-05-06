@extends('layouts.master')

@section('judul') Daftar Siswa @endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">DATA SISWA</h3>
                            <div class="right">
                                <button type="button" class="btn-remove" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>

                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA DEPAN</th>
                                        <th>NAMA BELAKANG</th>
                                        <th>AGAMA</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>ALAMA</th>
                                        <th colspan="2">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswa as $sis)
                                    <tr>
                                        <td> <a href="/siswa/{{$sis->id}}/profile">{{$sis->nama_depan}}</a></td>
                                        <td><a href="/siswa/{{$sis->id}}/profile">{{$sis->nama_belakang}}</a></td>
                                        <td>{{$sis->agama}}</td>
                                        <td>{{$sis->jenis_kelamin}}</td>
                                        <td>{{$sis->alamat}}</td>
                                        <td><a href="/siswa/{{$sis->id}}/edit" class="btn btn-warning">EDIT</a></td>
                                        <td><a href="/siswa/{{$sis->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Dihapus')">DELETE</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tambah') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" id="nama_depan" name="nama_depan">

                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang">

                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">

                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama">

                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>

                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
    @endsection