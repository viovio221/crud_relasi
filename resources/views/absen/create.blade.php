<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px;">
<div class="card-header">Create New Absensi</div>
<div class="card-body">
    <form action="{{ url('absen') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label><br>
        <input type="text" name="nama" id="nama" class="form-control"><br>

        <label>Kelas</label>
        <input type="text" name="kelas" id="kelas" class="form-control"><br>

        <label>Masuk</label>
        <input type="time" name="masuk" id="masuk" class="form-control"><br>

        <label>Keluar</label>
        <input type="time" name="keluar" id="keluar" class="form-control"><br>


        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
</div>
</div>
</body>
</html> 