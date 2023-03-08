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
                                    <i class="fa fa-edit"></i> Tambah Data Ngaji
                                </h3>
                            </div>
                            <form action="/ngaji/{id}/store" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Santri ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="santri_id" placeholder="santri_id" value="{{$santris->id}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Santri</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="nama_santri" placeholder="nama santri" value="{{$santris->name}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Ustad</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="nama_ustad" placeholder="nama wali" value="{{Auth::user()->name}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tipe</label>
                                        <div class="col-sm-4">
                                            <select type="text" class="form-control" id="jenis_ngaji" name="jenis_ngaji" placeholder="tipe" required>
                                                @error('tipe')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                                <option selected value="">Pilih Iqro</option>
                                                <option value="Iqro 1">Iqro 1</option>
                                                <option value="Iqro 2">Iqro 2</option>
                                                <option value="Iqro 3">Iqro 3</option>
                                                <option value="Iqro 4">Iqro 4</option>
                                                <option value="Iqro 5">Iqro 5</option>
                                                <option value="Iqro 6">Iqro 6</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Halaman</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="halaman" placeholder="halaman" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="tgl_km" name="tanggal" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select type="text" class="form-control" id="status" name="status" placeholder="tipe" required>
                                                @error('tipe')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                                <option selected value="">Status</option>
                                                <option value="lanjut">Lanjut</option>
                                                <option value="ulangi">Ulanggi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                                    <a href='/indexngaji' title="Kembali" class="btn btn-secondary">Batal</a>
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
        @include(' Template.footer')
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