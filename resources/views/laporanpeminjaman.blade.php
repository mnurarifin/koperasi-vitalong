<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
</head>
<style>

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
        <img align="left" src="https://armadilloaccounting.com/static/images/lambang-koperasi-small.JPG" width="100" height="100" class="d-inline-block align-top" alt="" loading="lazy">
        <center><h3>KOPERASI VITALONG</h3></center>
        <center><h5>Email : koperasivitalong@gmail.com No Tlpn : 022 123 456 78</h5></center>
        <b><h5 align="center">===================================================================</h5></b>
    <!-- Image and text -->

        <div class="form-group">
        <table class="table table-striped table-bordered table-sm">
        <thead class="thead-dark">
        <br>
        <center><h3>DATA PEMINJAMAN</h3></center>
        <tr>
                <th>No Bukti</th>
                <th>Tgl Peminjaman</th>
                <th>Id Bagian Kredit</th>
                <th>Id Anggota</th>
                <th>Jumlah Realisasi</th>
                <th>Lama Angsuran</th>
                <th>Jumlah Angsuran</th>
                <th>Bunga(%)</th>

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
        </tr>

        <tr>
            <th colspan="4">
            Rata-Rata
            </th>
            <th>{{number_format ($request -> rata_realisasi(),0) }}</th>
            <th>{{number_format($request -> rata_angsuran(),0) }}</th>
            <th>{{number_format ($request -> rata_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> rata_bunga(),0) }}</th>
        </tr>

        <tr>
            <th colspan="4">
            Maksimum
            </th>
            <th>{{number_format ($request -> max_realisasi(),0) }}</th>
            <th>{{number_format($request -> max_angsuran()) }}</th>
            <th>{{number_format ($request -> max_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> max_bunga(),0) }}</th>
        </tr>

        <tr>
            <th colspan="4">
            Minimum
            </th>
            <th>{{number_format ($request -> min_realisasi(),0) }}</th>
            <th>{{number_format($request -> min_angsuran()) }}</th>
            <th>{{number_format ($request -> min_peminjaman(),0) }}</th>
            <th>{{number_format ($request -> min_bunga(),0) }}</th>
        </tr>

        </table>
        </div>

</body>


    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script type="text/javascript">
        $(document).ready(function() {
        $('#table_peminjaman').DataTable();
        } );
    </script> -->


</html>

