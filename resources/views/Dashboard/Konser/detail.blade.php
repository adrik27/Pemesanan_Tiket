@extends('layouts.main')

@section('isi')

<section class="judul">
    <div class="row ">
        <div class="col-md">
            <h1 class="text-center">Detail Konser "{{ strtoupper($ks->nama) }}"</h1>
        </div>
    </div>
</section>

<section class="gambar">
    <div class="row my-5">
        <div class="col-md d-flex justify-content-center">
            @if (!$ks->image)
            <img src="{{ url('/assets/images/demos/hero1.jpg') }}" alt="{{ $ks->nama }}" width='500' height="250"
                class="img img-fluid rounded-3">
            @else
            <img src="{{ asset('storage/'. $ks->image) }}" alt="{{ $ks->nama }}" width='500' height="250"
                class="img img-fluid rounded-3">
            @endif
        </div>
    </div>
</section>

<section class="table mt-3">
    <div class="row">
        <div class="col-md">
            <table class="table table-active table-bordered table-responsive-md text-center">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td>Tempat</td>
                        <td>Tanggal</td>
                        <td>Harga</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $ks->nama }}</td>
                        <td>{{ $ks->tempat }}</td>
                        <td>{{ $ks->tanggal }}</td>
                        <td>@currency($ks->harga)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="kembali mb-5">
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <a href="/Dashboard/Konser" class="btn btn-sm btn-danger">Kembali</a>
        </div>
    </div>
</section>
@endsection