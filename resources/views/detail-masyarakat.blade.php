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
        <center><h1>Detail Masyarakat</h1></center>
    <table  style="margin-top: 2rem;" class="table">
        <thead>
          <tr>
            <th scope="col" class="table-warning">nik</th>
            <th scope="col" class="table-warning">nama</th>
            <th scope="col" class="table-warning">username</th>
            <th scope="col" class="table-warning">password</th>
            <th scope="col" class="table-warning">telepon</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-secondary">{{$masyarakat->nik}}</th>
            <td class="table-secondary">{{$masyarakat->nama}}</td>
            <td class="table-secondary">{{$masyarakat->username}}</td>
            <td class="table-secondary">{{$masyarakat->password}}</td>
            <td class="table-secondary">{{$masyarakat->telepon}}</td>
          </tr>
        </tbody>
      </table>
      <a href="/masyarakat" type="button" class="btn btn-success">Why Back To Home</a>
    </div>
</body>
</html>