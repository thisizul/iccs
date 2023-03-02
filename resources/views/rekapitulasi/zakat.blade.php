<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/e74f6895d1.js" crossorigin="anonymous"></script>
  <title>Ahito | Rekap Zakat Fitrah</title>
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
            Rekapitulasi Zakat Fitrah
          </h3>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Zakat Fitrah</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Zakat Maal</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Grafik Zakat Fitrah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Cetak Zakat Fitrah</a>
            </li>
          </ul>
          <div class="tab-content" id="custom-content-below-tabContent">
            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
              <div class="container">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Muzakki</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jumlah Jiwa</th>
                      <th scope="col">Jumlah Beras</th>
                      <th scope="col">Jumlah Uang</th>
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
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $fitrah->links() }}
              </div>
            </div>
            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
              <div class="container">
              </div>
            </div>
            <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
              <div class="container">
                <div id="grafik"></div>
                <div id="grafik1"></div>
              </div>
            </div>
            <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
              <div class="container">
              </div>
              <div class="col-md-6 mt-2">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Cetak Zakat Fitrah</h3>
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
                      <a href="" onclick="this.href='/cetak/'+ document.getElementById('awal').value+'/'+document.getElementById('akhir').value" target="blank" class="btn btn-danger">Cetak Berdasarkan Tanggal</a>
                      <a href="" onclick="this.href='/cetaksemuazakat'" target=" blank" class="btn btn-danger">Cetak Semua</a>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
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
    var infaqmasuk = <?php echo json_encode($fitrahmasukuang) ?>;
    var infaqkeluar = <?php echo json_encode($x) ?>;
    var bulan = <?php echo json_encode($bulan) ?>;

    Highcharts.chart('grafik', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Grafik Zakat Fitrah beras'
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
        name: 'Zakat Fitrah Uang',
        data: infaqmasuk

      }, ]
    });

    Highcharts.chart('grafik1', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Grafik Zakat Fitrah Beras'
      },
      subtitle: {
        text: 'Masjid Al-Hikmah Toyan'
      },
      xAxis: {
        categories: bulan,
        crosshair: true,

      },
      yAxis: {
        min: 0,
        title: {
          text: 'Jumlah Beras Kg'
        },
        labels: {
          format: '{value} Kg'
        },
      },
      tooltip: {
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.f}</b>Kg</td></tr>',
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [{
        name: 'Zakat Fitrah Beras',
        data: infaqkeluar

      }, ]
    });
  </script>


</body>

</html>