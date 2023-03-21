<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/e74f6895d1.js" crossorigin="anonymous"></script>
  <title>Ahito | Zakat Fitrah Masuk</title>
  @include('Template.head')

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('Template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Template.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->

      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Jumlah Beras</h3>
                  <h1>{{ $a }} <span>Kg</span></h1>

                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>Jumlah Uang<sup style="font-size: 20px"></sup></h3>

                  <h1>@rupiah($b)</h1>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
          </div>

        </div>




        <div class="content">

          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title center">
                Fitrah Masuk
              </h3>
            </div>

            <div class="card-body">
              @foreach($beras as $a)
              <form method="POST" action="/hargaberas/{{$a->id}}">
                @csrf
                <div class="form-group row">
                  @if($a->id=='1')
                  <label class="col-sm-2 col-form-label">Harga Beras Terkini</label>
                  <div class="col-sm-2">
                    <input type="text" value="{{$a->beras}}" class="form-control" id="beras" name="beras" placeholder="Uraian Pemasukan" required>
                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-danger">
                  </div>
                  @endif
                </div>
              </form>
              @endforeach
              <form method="get">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Cari Data</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Data Berdasarkan Tahun">
                  </div>
                </div>
              </form>
              <a href="/addinfitrah" class="btn btn-danger">Tambah Data</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Muzakki</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Jiwa</th>
                    <th scope="col">Jumlah Beras</th>
                    <th scope="col">Jumlah Uang</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach($fitrah as $index=> $i)
                <tbody>
                  <tr>
                    <td>{{$index+$fitrah->firstitem()}}</td>
                    <td>{{$i->nama}}</td>
                    <td>{{$i->tanggal}}</td>
                    <td>{{$i->jumlahjiwa}}</td>
                    <td>{{$i->jumlahberas}}<span>kg</span></td>
                    <td>@rupiah( $i->jumlahuang)</td>
                    <td>
                      <a href='/editinfitrah/{{$i->id}}' class="btn btn-info"><i class="fa fa-pencil"></i></a>
                      <a href='/deleteinfitrah/{{$i->id}}' class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $fitrah->links() }}
            </div>
          </div>

        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('Template.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset ('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset ('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset ('AdminLte/dist/js/adminlte.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

</body>

</html>