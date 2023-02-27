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
      <div class="col-lg-4 col-8">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><sup style="font-size: 20px">Jumlah Zakat Mal</sup></h3>
            <h1>@rupiah($a)</h1>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
      <div class="content">

        <div class="card card-info card-outline">
          <div class="card-header">
            <h3 class="card-title center">
              Zakat Mal
            </h3>
          </div>
          <div class="card-body">
            <a href="/addzakatmal" class="btn btn-success">Tambah Data</a>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Muzakki </th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Jumlah Masuk</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($zakatmal as $i)
                <tr>
                  <td>{{ $i-> uraian }}</td>
                  <td>{{ $i-> tanggal }}</td>
                  <td>@rupiah( $i->masuk)</td>

                  <td>
                    <a href='/editzakatmal/{{$i->id}}' class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    <a href='/hapusmaal/{{$i->id}}' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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

</body>

</html>