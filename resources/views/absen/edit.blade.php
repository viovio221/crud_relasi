<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
Absen
    <form action="{{ url('absen/' .$absen->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{ $absen->id }}" id="id">
    <label>Nama</label><br>
    <input type="text" name="nama" id="nama" value="{{ $absen->nama}}" class="form-control"><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" id="kelas" value="{{ $absen->kelas }}" class="form-control"><br>

    <div class="form-group">
        <label>Tanggal Masuk</label><br>
                                <select class="form-control" name="tanggal" id="tanggal">
                                    @foreach ($tanggal as $item)
                                    @if($item->id== $absen->tanggal || $item->id == old('tanggal'))
                                  <option selected value="{{ $item->id}}" >{{ $item->tanggal}}
                                 </option>
                                 @else 
                                 <option value="{{ $item->id }}" >{{ $item->tanggal }}
                                </option>
                                           @endif
                                     @endforeach
          </select>
                              
    </div>

    <label>Jam Masuk</label><br>
    <input type="time" name="masuk" id="masuk" value="{{ $absen->masuk }}" class="form-control"><br>

    <label>Jam Keluar</label><br>
    <input type="time" name="keluar" id="keluar" value="{{ $absen->keluar }}" class="form-control"><br>
    <input type="submit" value="Update" class="btn btn-success">   
</form> 
</div>
</div>
</body>
</html>