<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guruku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .ijo{
            background-color: greenyellow;
        }
        .ijotua{
            background-color: green;
        }
        .tbodyDiv{
            max-height: clamp(38em,400vh,250px);
            overflow: auto;
        }
    </style>
</head>
<body class="container-fluid">
    @include('sweetalert::alert')
    <div class="row" style="height: 875px">
        <div class="col-2 ijo border border-dark h-100 d-inline-block">
            fs
        </div>
        <div class="col-10">
            <div class="col-12 ijotua border border-dark h-auto d-inline-block p-3">
                <form action="{{ route('guru.store') }}" method="post">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIP</span>
                        <input name="nip" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <input name="nama_guru" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Lahir</span>
                        <input name="tanggal_lahir" class="form-control" type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Kontak</span>
                        <select class="form-select" name="kontak_id">
                            @foreach($kontak as $k)
                            <option value="{{ $k->id }}">{{ $k->no_telpon }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <button type="submit" class="btn btn-info">Insert</button>
                    </div>
                </form>
            </div>
            <div class="tbodyDiv">
                <table class="table" style="height: 450px">
                    <thead class="sticky-top bg-white">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $g)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $g->nama_guru }}</td>
                            <td>{{ $g->kontak->no_telpon }}</td>
                            <td>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
