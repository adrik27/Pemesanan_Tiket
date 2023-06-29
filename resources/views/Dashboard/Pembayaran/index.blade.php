@extends('layouts.main')

@section('isi')
<section class="alert">
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <div class="alert alert-success text-dark p-5" role="alert">
                <h1 class="text-center">Pemesanan tiket berhasil, silahkan lakukan pembayaran dan screenshoot bukti
                    pembayaran ke nomor
                    0821-xxx-xxx / admin@gmail.com !</h1>
            </div>
        </div>
    </div>
</section>

<section class="alert">
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <a href="/Dashboard/MyTiket" class="btn btn-sm btn-danger">Kembali</a>
        </div>
    </div>
</section>
@endsection