
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="margin:20px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Absensi Siswa</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('absen/create')  }}" class="btn btn-success btn-sm" title="Add New absen">
                    Tambah Siswa
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($absen as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->masuk}}</td>
                                <td>{{ $item->keluar}}</td>
                                <td>
                                    <a href="{{url('/absen/' .$item->id)}}" title="View"><button class="btn btn-info btn-sm "><i aria-hidden="true"></i><i>View</i></button></a>
                                    <a href="{{url('/absen/' .$item->id . '/edit/')}}" title="Edit"><button class="btn btn-primary btn-sm"><i aria-hidden="true"></i><i>Edit</i></button></a>
                                    <form method="post" action="{{ url('/absen/'  . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-danger btn-sm" onclick="return confirm("Confirm Delete?")"><i aria-hidden="true"></i>Hapus</button></a>
                                    </form>
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
</body>
</html>

