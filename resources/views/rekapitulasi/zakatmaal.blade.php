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
      </div>
      <div class="content">
      </div>
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            Rekapitulasi Zakat Maal
          </h3>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Zakat Maal</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Zakat Maal</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Grafik Zakat Maal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Cetak Zakat Mall</a>
            </li>
          </ul>
          <div class="tab-content" id="custom-content-below-tabContent">
            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
              <div class="container mt-2">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Muzakki</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jumlah Masuk</th>
                      <th scope="col">jumlah Keluar</th>
                      <th scope="col">Jenis</th>
                    </tr>
                  </thead>
                  @foreach($mall as $index=> $i)
                  <tbody>
                    <tr>
                      <td>{{$index+$mall->firstitem()}}</td>
                      <td>{{$i->uraian}}</td>
                      <td>{{$i->tanggal}}</td>
                      <td>@rupiah( $i->masuk)</td>
                      <td>@rupiah( $i->keluar)</td>
                      <td>{{$i->jenis}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $mall->onEachSide(2)->links() }}

              </div>
            </div>
            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
              <div class="container">
              </div>
            </div>
            <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
              <div class="container">
              </div>
              <div class="col-md-6 mt-2">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Cetak Zakat Maal</h3>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputEstimatedBudget">Tanggal Awal</label>
                      <input type="date" id="awal" name="awal" class="form-control">
                      <!-- <input type="number" id="awal" name="awal" min="1900" max="2099" step="1" value="2016" class="form-control" /> -->
                    </div>
                    <div class="form-group">
                      <label for="inputSpentBudget">Tanggal Akhir</label>
                      <input type="date" id="akhir" name="akhir" class="form-control">
                      <!-- <input type="number" id="akhir" name="akhir" min="1900" max="2099" step="1" value="2016" class="form-control" /> -->

                    </div>
                    <div>
                      <a href="" onclick="this.href='/cetakmaal/'+ document.getElementById('awal').value+'/'+document.getElementById('akhir').value" target="blank" class="btn btn-danger">Cetak Berdasarkan Tanggal</a>
                      <a href="" onclick="this.href='/cetaksemuamaal'" target=" blank" class="btn btn-danger">Cetak Semua</a>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
              <div class="container">
                <div id="zakatmal"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.card -->

    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    var mallmasuk = <?php echo json_encode($mallmasuk) ?>;
    var bulan = <?php echo json_encode($bulan) ?>;



    Highcharts.chart('zakatmal', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Grafik Zakat Maal'
      },
      subtitle: {
        text: 'Masjid Al-Hikmah Toyan'
      },
      xAxis: {
        categories: bulan,
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Jumlah Uang'
        }
      },
      tooltip: {
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0">Rp.<b>{point.y:.f}</b></td></tr>',
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [{
        name: 'Zakat Maal',
        data: mallmasuk

      }, ]
    });
  </script>


</body>

</html>