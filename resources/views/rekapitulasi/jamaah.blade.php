<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/e74f6895d1.js" crossorigin="anonymous"></script>
  <title>Ahito | Rekap Jamaah</title>
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
                Rekapitulasi Jamaah
              </h3>
            </div>
            <div class="card-body">
              <div class="col-lg-5 col-8">
              </div>
              <!-- <h4>Custom Content Below</h4> -->
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Data Jamaah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Grafik</a>
                </li>

              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                  <!-- small box -->

                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                    <div class="col-lg-3 col-6 mt-2">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h4>Jumlah Keluarga</h4>
                          <h4>{{$a}}<span> Keluarga</span></h4>
                          <h4>{{$b}}<span> Jiwa</span></h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->

                    <!-- ./col -->
                    <div class="col-lg-3 col-6 mt-2">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h4> Mampu</h4>

                          <h4>{{$c}} <span> Keluarga</span></h4>
                          <h4>{{$xc}}<span> Jiwa</span></h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 mt-2">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h4>Kurang Mampu</h4>

                          <h4>{{$d}}<span> Keluarga</span></h4>
                          <h4>{{$xd}} <span> Jiwa</span></h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nama Kepala Keluarga</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jumlah Jiwa</th>
                        <th scope="col">Golongan</th>
                        <!-- <th scope="col">Keterangan</th> -->

                      </tr>
                    </thead>
                    <tbody>
                      @foreach($jamaah as $i)
                      <tr>
                        <td>{{$i->nama_kk}}</td>
                        <td>{{ $i-> alamat }}</td>
                        <td>{{ $i-> jumlahjiwa }}</td>
                        <td>{{ $i-> golongan }}</td>

                        <!-- <td>{{ $i-> tipe }}</td> -->
                        @endforeach
                    </tbody>
                  </table>
                  {{ $jamaah->links() }}
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                  <div class="card card-success">

                    <div id="grafik"></div>

                  </div>
                  <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                </div>

              </div>
              <!-- /.card -->
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
    var mampu = <?php echo json_encode($c) ?>;
    var kurangmampu = <?php echo json_encode($d) ?>;


    Highcharts.chart('grafik', {
      chart: {
        type: 'pie'
      },
      title: {
        text: 'persentase Jamaah Masjid Al-Hikmah Toyan'
      },
      subtitle: {
        text: ''
      },

      accessibility: {
        announceNewData: {
          enabled: true
        },
        point: {
          valueSuffix: 'Keluarga'
        }
      },

      plotOptions: {
        series: {
          dataLabels: {
            enabled: true,
            format: '{point.name}: {point.y:.f} Keluarga'
          }
        }
      },

      tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}Keluarga</b> of total<br/>'
      },

      series: [{
        name: "Golongan",
        colorByPoint: true,
        data: [{
            name: "Kurang Mampu",
            y: kurangmampu,
            drilldown: "Kurang Mampu"
          },
          {
            name: "Lainnya",
            y: '',
            drilldown: "Lainnya"
          },
          {
            name: "Mampu",
            y: mampu,
            drilldown: "Mampu"
          }
        ]
      }],
    });
  </script>


</body>

</html>