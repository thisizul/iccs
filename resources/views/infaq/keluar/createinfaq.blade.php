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
            <!-- /.col -->
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
                  <i class="fa fa-edit"></i> Tambah Pengeluaran
                </h3>
              </div>
              <form action="/storeoutkasmasjid" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Uraian</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="uraian_km" name="uraian" placeholder="Uraian Pemasukan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengeluaran</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="keluar" name="keluar" placeholder="Jumlah Pengeluaran" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-4">
                      <select type="text" class="form-control" id="tipe" name="tipe" placeholder="tipe" required>
                        @error('tipe')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                        <option selected value="">Sumber Dana</option>
                        <option value="Infaq Jumat">Infaq Jum'at</option>
                        <option value="Infaq Harian">Infaq Harian</option>
                        <option value="Donatur">Donatur</option>
                      </select>
                    </div>
                  </div>




                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="tgl_km" name="tanggal" required>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <input type="submit" name="Simpan" value="Simpan" class="btn btn-danger">
                  <a href='/infaqkeluar' title="Kembali" class="btn btn-secondary">Batal</a>
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
  <script>
    var rupiah1 = document.getElementById("keluar");
    rupiah1.addEventListener("keyup", function(e) {
      rupiah1.value = convertRupiah(this.value);
    });
    rupiah1.addEventListener('keydown', function(event) {
      return isNumberKey(event);
    });

    var rupiah2 = document.getElementById("rupiah2");
    rupiah2.addEventListener("keyup", function(e) {
      rupiah2.value = convertRupiah(this.value, "Rp. ");
    });
    rupiah2.addEventListener('keydown', function(event) {
      return isNumberKey(event);
    });

    function convertRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split("."),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "." + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
    }

    function isNumberKey(evt) {
      key = evt.which || evt.keyCode;
      if (key != 188 // Comma
        &&
        key != 8 // Backspace
        &&
        key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
        &&
        (key < 48 || key > 57) // Non digit
      ) {
        evt.preventDefault();
        return;
      }
    }
  </script>
</body>

</html>