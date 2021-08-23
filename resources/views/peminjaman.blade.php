<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
</head>
<style>

footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

</style>
    <!-- Awal CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- AKHIR STYLE CSS -->

<body>

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">

        <img src="https://armadilloaccounting.com/static/images/lambang-koperasi-small.JPG" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        <h5 class="my-0 mr-md-auto font-weight-normal" >   KOPERASI VITALONG </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="anggota">Anggota</a>
            <a class="p-2 text-dark" href="Peminjaman">Peminjaman</a>
            <a class="p-2 text-dark" href="contact">Contact</a>
            <a class="p-2 text-dark" href="about">About</a>
        </nav>
</div>

        <H4 align="center">DATA PINJAMAN KOPERASI VITALONG</H4>
        <H5 align="center">DESA BOJONEGARA</H5>

    <br>

    <!-- CONTAINER -->

    <div class="container-fluid"  >
        <table class="table table-striped table-bordered table-sm" id="table_peminjaman">
        <thead class="thead-dark">
            <tr>
                <th>No Bukti</th>
                <th>Tgl Peminjaman</th>
                <th>Id Bagian Kredit</th>
                <th>Id Anggota</th>
                <th>Jumlah Realisasi</th>
                <th>Lama Angsuran</th>
                <th>Jumlah Angsuran</th>
                <th>Bunga (%)</th>
                <th>Edit/Delete</th>
            </tr>
        </thead>

        @foreach($list_peminjaman ?? '' as $request)
        <tr>
            <td>{{ $request -> no_bp }}</td>
            <td>{{ $request -> tglbp }}</td>
            <td>{{ $request -> id_bagiankredit }}</td>
            <td>{{ $request -> id_anggota }}</td>
            <td>{{ $request -> jumlah_realisasi }}</td>
            <td>{{ $request -> lama_angsuran }}</td>
            <td>{{ $request -> jumlah_angsuran }}</td>
            <td>{{ $request -> bunga }}</td>
            <td>
            <a class="btn btn-warning btn-sm" href="/ubah/{{$request->no_bp}}">Edit</a> |
            <a class="btn btn-danger btn-sm" href="/delete/{{$request->no_bp}}">Delete</a>
            </td>
        </tr>
        @endforeach

        <tr>
            <th colspan="4">
            Total
            </th>
            <th>{{number_format ($request -> total_realisasi(),0) }}</th>
            <th>{{number_format($request -> total_angsuran()) }}</th>
            <th>{{number_format ($request -> total_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> total_bunga(),0) }}</th>
            <th></th>
        </tr>

        <tr>
            <th colspan="4">
            Rata-Rata
            </th>
            <th>{{number_format ($request -> rata_realisasi(),0) }}</th>
            <th>{{number_format($request -> rata_angsuran()) }}</th>
            <th>{{number_format ($request -> rata_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> rata_bunga(),2) }}</th>
            <th></th>
        </tr>

        <tr>
            <th colspan="4">
            Maksimum
            </th>
            <th>{{number_format ($request -> max_realisasi(),0) }}</th>
            <th>{{number_format($request -> max_angsuran()) }}</th>
            <th>{{number_format ($request -> max_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> max_bunga(),0) }}</th>
            <th></th>
        </tr>

        <tr>
            <th colspan="4">
            Minimum
            </th>
            <th>{{number_format ($request -> min_realisasi(),0) }}</th>
            <th>{{number_format($request -> min_angsuran()) }}</th>
            <th>{{number_format ($request -> min_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> min_bunga(),0) }}</th>
            <th></th>
        </tr>



    </table>

    <a href="tambah" class="btn btn-info" id="btntambah">Tambah Data</a>
    <a href="report" class="btn btn-info" id="btnreport">Export PDF</a>



</body>

    <div class="panel">
    <div id="chartpeminjaman"></div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>



</html>



<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

Highcharts.chart('chartpeminjaman', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekap Realisasi Bulan Oktober 2020'
    },
    subtitle: {
        text: 'Koperasi Vitalong'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Realisasi '
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Anggota 1',
        data: [80]

    }, {
        name: 'Anggota 2',
        data: [83]

    }, {
        name: 'Anggota 3',
        data: [85]

    }, {
        name: 'Anggota 4',
        data: [95]

    },{
        name: 'Anggota 5',
        data: [75]



    }]
});
</script>

