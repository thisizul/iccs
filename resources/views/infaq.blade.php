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

  <title>Ahito | Info Infaq</title>
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
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/#services">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/index">Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--hero-->

  <!--services-->
  <section id="services" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12 section-intro text-center" data-aos="fade-up">
          <h1>Informasi infaq</h1>
        </div>
      </div>
      <div class="small-box bg-success mt-2">
        <div class="inner">
          <h3><sup style="font-size: 20px">Saldo</sup></h3>
          <h1>@rupiah($jumlah)</h1>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Uraian</th>
            <th scope="col">Pemasukan</th>
            <th scope="col">Pengeluaran</th>
            <!-- <th scope="col">Keterangan</th> -->

          </tr>
        </thead>
        <tbody>
          @foreach($kas as $i)
          <tr>
            <td>{{$i->tanggal}}</td>
            <td>{{ $i-> uraian }}</td>
            <td>@rupiah( $i->masuk)</td>
            <td>@rupiah( $i->keluar)</td>
            <!-- <td>{{ $i-> tipe }}</td> -->
            @endforeach
        </tbody>
      </table>
      {{ $kas->links() }}
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
    </div>
  </footer>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/app.js"></script>
</body>

</html>