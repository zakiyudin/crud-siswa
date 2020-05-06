@extends('layouts.master')
@section('judul') Edit Siswa @endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">EDIT DATA SISWA</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/siswa/{{$siswaedit->id}}/update" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{$siswaedit->nama_depan}}">

                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{$siswaedit->nama_belakang}}">

                                    <label for="exampleInputEmail1">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" value="{{$siswaedit->agama}}">

                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="laki-laki" @if($siswaedit->jenis_kelamin == 'l') selected @endif>Laki-Laki</option>
                                        <option value="perempuan" @if($siswaedit->jenis_kelamin == 'p') selected @endif>Perempuan</option>
                                    </select>

                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" name="alamat">{{$siswaedit->alamat}}</textarea>

                                    <label for="avatar">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control">



                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection