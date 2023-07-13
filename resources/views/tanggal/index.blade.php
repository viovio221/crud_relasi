
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="margin:20px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Tanggal</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('tanggal/create')  }}" class="btn btn-success btn-sm" title="+ Tambah Tanggal">
                    + Tambah Tanggal
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggal as $item)
                            <tr>
                                <td>{{ $item->tanggal}}</td>
                                <td>
                                    <a href="{{url('/tanggal/' .$item->id)}}" title="View"><button class="btn btn-info btn-sm "><i aria-hidden="true"></i><i>View</i></button></a>
                                    <a href="{{url('/tanggal/' .$item->id . '/edit/')}}" title="Edit"><button class="btn btn-primary btn-sm"><i aria-hidden="true"></i><i>Edit</i></button></a>
                                    <form method="post" action="{{ url('/tanggal/'  . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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

