<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>TambahMasyarakat</title>
</head>

<body>
    @include('layouts.navbar')

    <div style="display:flex;justify-content:center;">
        <h1>{{$TextJudul}}</h1>
    </div>

    <main>
        <div class="container pt-4">
          <form style="opacity:2px;" action="isi-masyarakat" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="mb-3">
    
              <label for="nik" class="form-label">Masukan nik anda:</label>
              <input type="number" class="form-control border-primary" id="nik" rows="3" name="nik" required></input>
              @error('nik')
              <div>kalimat harus lebih dari 5 huruf</div>  
              @enderror('nik')<br>

              <label for="username" class="form-label">masukan nama anda:</label>
              <input type="text" class="form-control border-primary" id="username" rows="3" name="nama" required></input>@error('nama')
              <div>kalimat harus lebih dari 5 huruf</div>  
              @enderror('nama')<br>

              <label for="username" class="form-label">Buatlah username nya:</label>
              <input type="text" class="form-control border-primary" id="username" rows="3" name="username" required></input>@error('username')
              <div>kalimat harus lebih dari 5 huruf</div>  
              @enderror('username')<br>

              <label for="password" class="form-label">Buatlah passwordnya:</label>
              <input type="password" class="form-control border-primary" id="password" rows="3" name="password" required></input>@error('password')
              <div>kalimat harus lebih dari 5 huruf</div>  
              @enderror('password')<br>


              <label for="telepon" class="form-label">masukan telepon anda:</label>
              <input type="number" class="form-control border-primary" id="telepon" rows="3" name="telepon" required></input>@error('telepon')
              <div>kalimat harus lebih dari 5 huruf</div>  
              @enderror('telepon')<br>
            </div>
            

            <center><button type="submit" class="btn btn-success">kirim Disini</button></center>
          </form>
        </div>
      </main>
</body>

</html>