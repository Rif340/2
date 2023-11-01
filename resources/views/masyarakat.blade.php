<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Masyarakat</title>
</head>

<body>
  @include('layouts.navbar')

  <div style="display:flex;justify-content:center;">
    <h1>{{$TextJudul}}</h1>
  </div>

  <div class="container">
    <a href="{{'isi-masyarakat'}}" type="button" class="btn btn-success">Tambah Masyarakat</a>
    <table style="margin-top: 2rem;" class="table">
      <thead>
        <tr>
          <th scope="col" class="table-warning">nik</th>
          <th scope="col" class="table-warning">Nama</th>
          <th scope="col" class="table-warning">username</th>
          <th scope="col" class="table-warning">password</th>
          <th scope="col" class="table-warning">telepon</th>
          <th scope="col" class="table-warning">Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($masyarakat as $masyarakat)
        <tr>
          <th scope="row" class="table-secondary">{{$masyarakat->nik}}</th>
          <td class="table-secondary">{{$masyarakat->nama}}</td>
          <td class="table-secondary">{{$masyarakat->username}}</td>
          <td class="table-secondary">{{$masyarakat->password}}</td>
          <td class="table-secondary">{{$masyarakat->telepon}}</td>
          <td class="table-secondary">
          <a href="/hapus-masyarakat/{{$masyarakat->nik}}" class="btn btn-danger">hapus</a>
            <a href="/detail-masyarakat/{{$masyarakat->nik}}" class="btn btn-primary">detail</a>
            <a href="/update-masyarakat/{{$masyarakat->nik}}" class="btn btn-secondary">update</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>