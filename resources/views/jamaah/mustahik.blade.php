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
                            Data Mustahik
                        </h3>
                    </div>
                    <div class="container mt-3 ">
                        <form method="get">
                            <div class="input-group col-sm-3 mb-3  ml-auto ">
                                <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Data Berdasarkan Nama">
                                <span class="input-group-append">
                                    <button type="submit" value="Submit" class="btn btn-info btn-flat"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Kepala Keluarga</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jumlah Jiwa</th>
                                    <th scope="col">Golongan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jamaah as $i)
                                @if($i->golongan != 'mampu')
                                <tr>
                                    <td>{{$i->nama_kk}}</td>
                                    <td>{{$i->alamat}}</td>
                                    <td>{{$i->jumlahjiwa}}</td>
                                    <td>{{$i->golongan}}</td>
                                    <td>
                                        <a href='/editmustahik/{{$i->id}}' class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        {{ $jamaah->links() }}

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