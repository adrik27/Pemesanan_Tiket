@extends('layouts.main')

@section('isi')
<section class="judul mt-3">
    <div class="row">
        <div class="col-md">
            <h1 class="text-center">
                Tiket sudah terpesan, silahkan lakukan pembayaran dan kirim bukti pembayaran dengan
                kirim scrreenshot ke nomor 0821-xxx-xxx untuk mengaktifkan tiket !!
            </h1>
        </div>
    </div>
</section>
<section class="tmbol mt-3">
    <div class="row ">
        <div class="col-md d-flex justify-content-center">
            <a href="/Dashboard/MyTiket" class="btn btn-sm btn-danger">Kembali</a>
        </div>
    </div>
</section>
@endsection