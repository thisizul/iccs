<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/e74f6895d1.js" crossorigin="anonymous"></script>
  <title>AdminLTE 3 | Starter</title>
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
          <h1>Informasi Kas Masjid</h1>
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Saldo</h3>
                  <p>@rupiah($count2)</p>
                  <h4>Rincian Saldo</h4>
                  <li>Infaq Jumat</li>
                  <p>@rupiah($countx)</p>
                  <li>Infaq Harian</li>
                  <p>@rupiah($county)</p>
                  <li>Donatur</li>
                  <p>@rupiah($countz)</p>
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
                  <h3>Pemasukan<sup style="font-size: 20px"></sup></h3>
                  <p>@rupiah($count)</p>
                  <h4>Rincian Pemasukan</h4>
                  <li>Infaq Jumat</li>
                  <p>@rupiah($a1)</p>
                  <li>Infaq Harian</li>
                  <p>@rupiah($a2)</p>
                  <li>Donatur</li>
                  <p>@rupiah($a3)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>Pengeluaran</h3>
                  <p>@rupiah($count1)</p>
                  <h4>Rincian Sumber Dana</h4>
                  <li>Infaq Jumat</li>
                  <p>@rupiah($z1)</p>
                  <li>Infaq Harian</li>
                  <p>@rupiah($z3)</p>
                  <li>Donatur</li>
                  <p>@rupiah($z2)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
              <!-- small box -->
            </div>
            <!-- akhir col -->
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <!-- <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div> -->
              <!-- small box -->
            </div>
            <!-- akhir col -->
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

</body>

</html>