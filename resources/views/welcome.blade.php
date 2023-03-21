<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Ahito</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="/">Ahito.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--hero-->
    <section id="home" class="bg-cover hero-section" style="background-image: url(img/cover_1.jpg);">
        <div class="overlay"></div>
        <div class="container text-white text-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4" data-aos="zoom-in">Selamat Datang Di <br>
                        Masjid Al-Hikmah Toyan</h1>
                    <br>
                    <a href="#services" data-aos="fade-up" class="btn btn-main">Mulai</a>
                </div>
            </div>
        </div>
    </section>

    <!--services-->
    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Informasi</h1>
                    <div class="divider"></div>

                </div>
            </div>
            <div class="row g-4">
                <!-- <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="img/image_1.jpg" alt="">
                            <div class="icon"><i class="icon-browser"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Service Name2</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form</p>
                    </div>
                </div> -->
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="service">
                        <div class="">
                            <!-- <img src="img/blog-1.jpg" alt=""> -->
                            <div class="icon"><i class="icon-bargraph"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Infaq</h5>
                        <p>Menampilkan informasi pemasukan dan pengeluaran infaq masjid Al-Hikmah Toyan</p>
                        <a href="/infoinfaq" data-aos="fade-up" class="btn btn-main">Lihat Informasi</a>
                    </div>

                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="service">
                        <div class="">
                            <div class="icon"><i class="icon-bargraph"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Zakat</h5>
                        <p>Menampilkan tata cara pembayaran zakat</p>
                        <a href="infozakat" data-aos="fade-up" class="btn btn-main">Lihat Informasi</a>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">Copyright © 2022. TA By Hafizul</p>
                </div>
            </div>
    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/app.js"></script>
</body>

</html>