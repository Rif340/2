
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <main>
        <center style="margin-top:2rem;"><h1>Selamat Datang Di Update-Pengaduan</h1></center>
        <div class="container pt-4">
            <form  method="post" enctype="multipart/form-data">
                @method('post')
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Disini :</label>

                    <textarea class="form-control border-primary" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required>{{$pengaduan->isi_laporan}}</textarea>                 
                </div>
                <button type="submit" class="btn btn-success">Success</button>
            </form>
        </div>
    </main>
</body>
</html>