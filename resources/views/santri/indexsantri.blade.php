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
      <div>
        <div class="col-lg-5 col-8">
          <!-- small box -->
          <div class="small-box bg-success">
            <!-- <div class="inner">
                        <h3><sup style="font-size: 20px">jumlah pemasukan</sup></h3>
                        <h1></h1>
                    </div> -->
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <div class="content">

          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title center">
                Data User
              </h3>
            </div>
            <div class="card-body">

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">nama</th>
                    <th scope="col">Ustad</th>
                    <th scope="col">Jenis Ngaji</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ngaji as $i)
                  @if($i->santri_id == 'auth->id')
                  <tr>
                    <td>{{$i->nama_santri}}</td>
                    <td>{{$i->nama_ustad}}</td>
                    <td>{{$i->jenis_ngaji}}</td>
                    <td>{{$i->halaman}}</td>
                    <td>{{$i->status}}</td>
                    <td>

                      <a href='detail/{{$i->id}}' class="btn btn-info"><i class="fa fa-pencil"></i></a>
                      <a href='hapus/{{$i->id}}' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>
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