<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h2 align="center">Koperasi Vitalong</h2>
        <h3 align="center">Tambah Data</h3>
        <br/>
        <br/>
        <form method="post" action="/peminjaman">
        {{ csrf_field() }}
        <div class="form-group">
            </div>
            <div class="form-group">
                <label for="tglbp">Tanggal BP</label>
                <input type="date" class="form-control" name="tglbp" required="required">
                @if($errors->has('tglBP'))
                                <div class="text-danger">
                                    {{ $errors>first('tglbp')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="id_bagiankredit">Nomor Pegawai</label>
                <input type="text" class="form-control" name="id_bagiankredit" required="required">
                @if($errors->has('nomorPegawai'))
                                <div class="text-danger">
                                    {{ $errors>first('id_bagiankredit')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="id_anggota">Nomor Anggota</label>
                <input type="text" class="form-control" name="id_anggota" required="required">
                @if($errors->has('nomorPegawai'))
                                <div class="text-danger">
                                    {{ $errors>first('id_anggota')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="jumlah_realisasi">Jumlah Realisasi</label>
                <input type="text" class="form-control" name="jumlah_realisasi" required="required">
                @if($errors->has('jumlah_realisasi'))
                                <div class="text-danger">
                                    {{ $errors>first('jumlah_realisasi')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="lama_angsuran">Lama Angsuran</label>
                <input type="text" class="form-control" name="lama_angsuran" required="required">
                @if($errors->has('lama_angsuran'))
                                <div class="text-danger">
                                    {{ $errors>first('lama_angsuran')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="jumlah_angsuran">Jumlah Angsuran</label>
                <input type="text" class="form-control" name="jumlah_angsuran" required="required">
                @if($errors->has('jumlah_angsuran'))
                                <div class="text-danger">
                                    {{ $errors>first('jumlah_angsuran')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="bunga">Bunga</label>
                <input type="text" class="form-control" name="bunga" required="required">
                @if($errors->has('bunga'))
                                <div class="text-danger">
                                    {{ $errors>first('bunga')}}
                                </div>
                            @endif
            </div>
            <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
        </form>
    </div>
    </body>
</html>
