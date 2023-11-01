<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PengaduanMasyarakat.com</title>
</head>

<body>
    <div class="container">
        <center><h1>Detail Petugas</h1></center>
    <table  style="margin-top: 2rem;" class="table">
        <thead>
          <tr>
            <th scope="col" class="table-warning">ID Petugas </th>
            <th scope="col" class="table-warning">Nama Petugas</th>
            <th scope="col" class="table-warning">Username</th>
            <th scope="col" class="table-warning">Password</th>
            <th scope="col" class="table-warning">Telepon</th>
            <th scope="col" class="table-warning">Level</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-secondary">{{$petugas->id_petugas}}</th>
            <td class="table-secondary">{{$petugas->nama_petugas}}</td>
            <td class="table-secondary">{{$petugas->username}}</td>
            <td class="table-secondary">{{$petugas->password}}</td>
            <td class="table-secondary">{{$petugas->telp}}</td>
            <td class="table-secondary">{{$petugas->level}}</td>
          </tr>
        </tbody>
      </table>
      <a href="/petugas" type="button" class="btn btn-success">Why Back To Home</a>
    </div>
</body>
</html>