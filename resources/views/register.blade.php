<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cc72c425a9.js" crossorigin="anonymous"></script>

    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }


        }

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

        #gambar1 {
            width: 400px;
        }

        #input {
            border-color: #ffe484;
        }
    </style>
    <title>Register</title>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">

        <nav class="navbar " style="background-color: #563d7c; backdrop-filter: blur(10px);">
            <div class="container-fluid">
                <a class="navbar-brand text-light fs-4" href="#">
                    <img src="https://1000logos.net/wp-content/uploads/2017/08/Chrome-Logo.png" width="100px" heigth="100px">PengaduanMasyarakat.com
                </a>
                <form class="d-flex" role="search">
                    <a href="{{'login'}}" class=" tombol" type="submit">Login</a>
                </form>
            </div>
        </nav>
        <hr>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div id="box1" class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(10px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Daftar Disini</h2>
                            <form action="{{'register'}}" method="post">
                                @method('post')
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input id="input" type="text" id="form3Example1" class="form-control" name="nik">
                                            <label class="form-label" for="form3Example1">Masukan Nik :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input id="input" type="text" id="form3Example2" class="form-control" name="nama">
                                            <label class="form-label" for="form3Example2">Masukan Nama Lengkap Anda :</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input id="input" type="text" id="form3Example1" class="form-control" name="username">
                                            <label class="form-label" for="form3Example1">Membuat Username :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input id="input" type="text" id="form3Example2" class="form-control" name="telepon">
                                            <label class="form-label" for="form3Example2">Masukan No Telepon :</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input id="input" type="password" id="form3Example4" class="form-control" name="password">
                                    <label class="form-label" for="form3Example4">Buatlah Password Sesimple Mungkin :</label>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">
                                        Setujui Persyaratan
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Atau Daftar dengan:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa-brands fa-facebook"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img id="gambar1" src="https://wallpaperboat.com/wp-content/uploads/2020/05/08/41340/vector-03.jpg" class=" rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>

</html>