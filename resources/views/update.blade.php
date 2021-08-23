<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">

        <h2 align="center">Koperasi Vitalong</h2>
        <h3 align="center">Update Data</h3>

        <br/>
        <br/>
        @foreach($list_peminjaman as $request)
        <form method="post" action="/update">
        {{ csrf_field() }}
        <div class="form-group">
                <label for="no_bp">No BP</label>
                <input type="text" class="form-control" name="no_bp" value="{{ $request->no_bp }}" required="required" class="hidden">
                @if($errors->has('noBP'))
                                <div class="text-danger">
                                    {{ $errors>first('noBP')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="tglbp">Tanggal BP</label>
                <input type="text" class="form-control" name="tglbp" value="{{ $request->tglbp }}" required="required">
                @if($errors->has('tglBP'))
                                <div class="text-danger">
                                    {{ $errors>first('tglBP')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="id_bagiankredit">Nomor Pegawai</label>
                <input type="text" class="form-control" name="id_bagiankredit" value="{{ $request->id_bagiankredit }}" required="required">
                @if($errors->has('nomorPegawai'))
                                <div class="text-danger">
                                    {{ $errors>first('nomorPegawai')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="id_anggota">Nomor Anggota</label>
                <input type="text" class="form-control" name="id_anggota" value="{{ $request->id_anggota }}" required="required">
                @if($errors->has('nomorAnggota'))
                                <div class="text-danger">
                                    {{ $errors>first('nomorAnggota')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="jumlah_realisasi">Jumlah Realisasi</label>
                <input type="text" class="form-control" name="jumlah_realisasi" value="{{ $request->jumlah_realisasi }}" required="required">
                @if($errors->has('jumlahRealisasi'))
                                <div class="text-danger">
                                    {{ $errors>first('jumlahRealisasi')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="lama_angsuran">Lama Angsuran</label>
                <input type="text" class="form-control" name="lama_angsuran" value="{{ $request->lama_angsuran }}" required="required">
                @if($errors->has('lamaAngsuran'))
                                <div class="text-danger">
                                    {{ $errors>first('lamaAngsuran')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="jumlah_angsuran">Jumlah Angsuran</label>
                <input type="text" class="form-control" name="jumlah_angsuran" value="{{ $request->jumlah_angsuran }}" required="required">
                @if($errors->has('jumlahAngsuran'))
                                <div class="text-danger">
                                    {{ $errors>first('jumlahAngsuran')}}
                                </div>
                            @endif
            </div>
            <div class="form-group">
                <label for="bunga">Bunga</label>
                <input type="text" class="form-control" name="bunga" value="{{ $request->bunga }}" required="required">
                @if($errors->has('bunga'))
                                <div class="text-danger">
                                    {{ $errors>first('bunga')}}
                                </div>
                            @endif
            </div>
            <button type="submit" class="btn btn-primary" value="Update Data">Submit</button>
        </form>
        @endforeach
    </div>




    </body>
</html>
