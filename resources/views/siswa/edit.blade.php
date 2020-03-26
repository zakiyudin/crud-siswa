<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Siswa</title>
</head>

<body>
    <div class="container">
        <form action="/siswa/{{$siswaedit->id}}/update" method="POST">
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

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>