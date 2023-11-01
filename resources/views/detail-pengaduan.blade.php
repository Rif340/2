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
        <center><h1>Detail Pengaduan</h1></center>
    <table  style="margin-top: 2rem;" class="table">
        <thead>
          <tr>
            <th scope="col" class="table-warning">Id_pengaduan</th>
            <th scope="col" class="table-warning">Tanggal Laporan</th>
            <th scope="col" class="table-warning">Nik</th>
            <th scope="col" class="table-warning">Isi Laporan</th>
            <th scope="col" class="table-warning">Gambar Bukti</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-secondary">{{$pengaduan->id_pengaduan}}</th>
            <td class="table-secondary">{{$pengaduan->tgl_pengaduan}}</td>
            <td class="table-secondary">{{$pengaduan->nik}}</td>
            <td class="table-secondary">{{$pengaduan->isi_laporan}}</td>
            <td class="table-secondary"><img src='{{asset("storage/image/" .$pengaduan->foto)}}'width="150px"height="150px"></td>
          </tr>
        </tbody>
      </table>
      <a href="/home" type="button" class="btn btn-success">Why Back To Home</a>
    </div>
</body>
</html>