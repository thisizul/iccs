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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
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
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-edit"></i> Edit Zakat Fitrah
                </h3>
              </div>
              <form method="POST" action="/simpaninfitrah/{{$fitrah->id}}">
                @csrf
                <div class="card-body">

                  @foreach($beras as $i)
                  @if($i->id==1)
                  <div class="form-group row">
                    <!-- <label class="col-sm-2 col-form-label">harga beras</label> -->
                    <div class="col-sm-8">
                      <input type="hidden" class="form-control" value="{{$i->beras}}" id="beras" name="beras" placeholder="nama" required>
                    </div>
                  </div>
                  @endif
                  @endforeach

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Muzakki</label>
                    <div class="col-sm-4">
                      <input type="text" value="{{$fitrah->nama}}" class="form-control" id="nama" name="nama" placeholder="Uraian Pemasukan" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah Jiwa</label>
                    <div class="col-sm-4">
                      <input type="text" value="{{$fitrah->jumlahjiwa}}" class="form-control" id="jumlahjiwa" name="jumlahjiwa" placeholder="Jumlah Pemasukan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                    <div class="col-sm-4">
                      <select type="text" value="{{$fitrah->jenis}}" class="form-control" id="jenis" name="jenis" placeholder="jenis" required>
                        @error('tipe')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                        <option selected value="">Pilih Pembayaran</option>
                        <option value="1">Beras</option>
                        <option value="2">Uang Tunai</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-4">
                      <input type="date" value="{{$fitrah->tanggal}}" class="form-control" id="tgl_km" name="tanggal" required>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <input type="submit" name="Simpan" value="Simpan" class="btn btn-danger">
                  <a href="/zakatfitrahmasuk" title="Kembali" class="btn btn-secondary">Batal</a>
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