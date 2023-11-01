<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cc72c425a9.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #563d7c;
        }

        .tombol {
            border-radius: 4px;
            background-color: #563d7c;
            font-weight: 500;
            color: #ffe484;
            border: solid 2px #ffe484;
            outline-color: none;
            width: 100px;
            height: 50px;
            text-decoration: none;
            text-align: center;
            padding: 10%;
        }

        p,
        h2 {
            margin-top: 2rem;
            color: #563d7c;
        }

        p {
            position: relative;
            right: -2rem;
        }

        #tombol {
            position: relative;
            right: -6rem;
            border-radius: 4px;
            background-color: #563d7c;
            font-weight: 500;
            color: #ffe484;
            border-color: #ffe484;
            outline-color: none;
            width: 100px;
            height: 50px;
        }

        #input {
            border-color: #ffe484;
        }


        #bungkusPertama {
            border-radius: 12px;
            overflow: hidden;
            width: 900px;
            margin-right: 15%;
            margin-left: 15%;
            height: 544px;
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(10px);
            display: flex;

        }


        #bungkusform {
            padding-left: 4rem;
            display: flex;
            flex-direction: column;
        }


        #bungkusGambar img {
            width: 450px;
            height: auto;

        }

        input {
            border-radius: 6px;
            border-color: #ffe484;
            width: 300px;
            height: 40px;
            padding: 1rem;
            outline: #24E836;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <section class="text-center text-lg-start">

        <nav class="navbar " style="background-color: #563d7c; backdrop-filter: blur(10px);">
            <div class="container-fluid">
                <a class="navbar-brand text-light fs-4" href="#">
                    <img src="https://1000logos.net/wp-content/uploads/2017/08/Chrome-Logo.png" width="100px" heigth="100px">PengaduanMasyarakat.com
                </a>
                <form class="d-flex" role="search">
                    <a href="{{'register'}}" class="tombol" type="submit">Sign up</a>
                </form>
            </div>
        </nav>
        <hr>

        <div id="bungkusPertama">

            <div id="bungkusGambar">
                <img src="https://raw.githubusercontent.com/MuhammadArif175/Gambar-Gambar/main/background5.jpg">
            </div>


            <form id="bungkusform" action="{{'login'}}" method="post">
                @method('post')
                @csrf
                <h2>Pengaduan Masyarakat</h3>
                    <label id="username" style="margin-top:3rem;">Masukan Username :</label>
                    <input for="username" type="name" placeholder="" name="username">

                    <br>
                    <label id="password">Masukan Password :</label>
                    <input for="password" type="password" placeholder="" name="password">
                    <hr>

                    <button id="tombol" style="margin-top:1rem;" type="submit">Login Disini</button>
                    <p>Belum Punya Akun ? <a href="{{'register'}}">Daftar Disini</a></p>
            </form>
        </div>
        </div>
    </section>
</body>

</html>