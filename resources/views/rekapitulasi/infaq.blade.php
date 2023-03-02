<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/e74f6895d1.js" crossorigin="anonymous"></script>
  <title>Ahito | Rekap Infaq</title>
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
        <div>
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <!-- <i class="fas fa-edit"></i> -->
                Rekapitulasi Infaq
              </h3>
            </div>

            <div class="card-body">
              <div class="col-lg-5 col-8">

              </div>
              <!-- <h4>Custom Content Below</h4> -->
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Infaq</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Cetak Infaq</a>
                </li>
                <!-- <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Cetak</a>
                                </li> -->
                <!--<li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Settings</a>
                                </li> -->
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                  <!-- small box -->
                  <div class="small-box bg-success mt-2">
                    <div class="inner">
                      <h3><sup style="font-size: 20px">Saldo</sup></h3>
                      <h1>@rupiah($jumlah)</h1>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Uraian</th>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Pengeluaran</th>
                        <!-- <th scope="col">Keterangan</th> -->

                      </tr>
                    </thead>
                    <tbody>
                      @foreach($kas as $i)
                      <tr>
                        <td>{{$i->tanggal}}</td>
                        <td>{{ $i-> uraian }}</td>
                        <td>@rupiah( $i->masuk)</td>
                        <td>@rupiah( $i->keluar)</td>
                        <!-- <td>{{ $i-> tipe }}</td> -->
                        @endforeach
                    </tbody>
                  </table>
                  {{ $kas->links() }}
                </div>

                <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                  <div class="card card-success">
                    <div id="grafik"></div>
                  </div>

                  <!-- <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                    </div> -->
                </div>
                <div class="tab-pane fade" id="custom-content-below-messages-tab" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                  <div class="card card-success">
                    <h1>tess</h1>
                  </div>

                  <!-- <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                    </div> -->
                </div>

                <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                  <div class="container">
                  </div>
                  <div class="col-md-6 mt-2">
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Cetak Infaq</h3>
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
                          <a href="" onclick="this.href='/cetakinfaq/'+ document.getElementById('awal').value+'/'+document.getElementById('akhir').value" target="blank" class="btn btn-danger">Cetak Berdasarkan Tanggal</a>
                          <a href="" onclick="this.href='/cetaksemuainfaq'" target=" blank" class="btn btn-danger">Cetak Semua</a>
                        </div>
                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
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
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    var infaqmasuk = <?php echo json_encode($total_masuk) ?>;
    var infaqkeluar = <?php echo json_encode($total_keluar) ?>;
    var bulan = <?php echo json_encode($bulan) ?>;

    Highcharts.chart('grafik', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Rekapitulasi Infaq'
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
          text: 'jumlah'
        }
      },
      tooltip: {

      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [{
        name: 'infaq masuk',
        data: infaqmasuk

      }, {
        name: 'infaq keluar',
        data: infaqkeluar

      }, ]
    });
  </script>


</body>

</html>