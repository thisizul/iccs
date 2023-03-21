<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="form-group">
    <p align="center"><b>laporan Infaq Masjid Al-Hikmah Toyan</b></p>
    <table class="static" align="center" rules="all" border="2px" style="width: 95%;">
      <tr>
        <th scope="col">Uraian</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Jumlah Masuk</th>
        <th scope="col">Jumlah Keluar</th>
        <th scope="col">Tipe Infaq/ Sumber Dana</th>
      </tr>
      @foreach($cetak as $i)

      <tr>
        <td>{{$i->uraian}}</td>
        <td>{{ $i-> tanggal }}</td>
        <td>{{ $i-> masuk }}</td>
        <td>{{ $i-> keluar }}</td>
        <td>{{ $i-> tipe }}</td>

        @endforeach
      </tr>
    </table>
  </div>
  <script>
    window.print();
  </script>
</body>

</html>