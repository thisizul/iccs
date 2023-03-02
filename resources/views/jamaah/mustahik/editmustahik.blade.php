<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
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
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-edit"></i> Edit Data mustahik
                                </h3>
                            </div>
                            <form method="POST" action="/simpanmustahik/{{$jamaah->id}}">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">kepala Keluarga</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="{{$jamaah->nama_kk}}" class="form-control" id="nama_kk" name="nama_kk" placeholder="Uraian Pemasukan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="{{$jamaah->alamat}}" class="form-control" id="alamat" name="alamat" placeholder="Jumlah Pemasukan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jumlah Jiwa</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="{{$jamaah->jumlahjiwa}}" class="form-control" id="jumlahjiwa" name="jumlahjiwa" placeholder="Jumlah Pemasukan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Golongan</label>
                                        <div class="col-sm-4">
                                            <select type="text" class="form-control" id="golongan" name="golongan" placeholder="golongan" required>
                                                <option selected>{{$jamaah->golongan}}</option>
                                                <option value="Mampu">Mampu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <input type="date" value="{{$jamaah->tanggal}}" class="form-control" id="tgl_km" name="tanggal" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                                    <a href="/mustahik" title="Kembali" class="btn btn-secondary">Batal</a>
                                </div>
                            </form>
                        </div>
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