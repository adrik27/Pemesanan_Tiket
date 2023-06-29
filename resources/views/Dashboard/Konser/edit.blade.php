@extends('layouts.main')

@section('isi')
<section class="judul">
    <div class="row">
        <div class="col-md">
            <h1 class="text-center">
                Tambah Data Konser
            </h1>
        </div>
    </div>
</section>

<section class="gambar">
    <div class="row">
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

<section class="input">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-md-7">
            <form action="/Dashboard/Konser/{{ $ks->id }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput0" class="form-label">Image Konser</label>
                    <input type="file" name="image" class="form-control @error('image')
                        is-invalid
                    @enderror" id="exampleFormControlInput0" placeholder="Image Konser" autocomplete="off" autofocus>
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="namakonser" class="form-label">Nama Konser</label>
                    <input type="text" name="nama" class="form-control @error('nama')
                        is-invalid
                    @enderror" id="namakonser" value="{{ old('nama', $ks->nama) }}" placeholder="Nama Konser" required
                        autocomplete="off" autofocus>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Konser</label>
                    <textarea type="text" name="deskripsi" class="form-control @error('deskripsi')
                        is-invalid
                    @enderror" id="deskripsi" value="{{ old('deskripsi', $ks->deskripsi) }}"
                        placeholder="Deskripsi Konser" required autocomplete="off" autofocus></textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Konser</label>
                    <input type="number" name="harga" class="form-control @error('harga')
                        is-invalid
                    @enderror" id="harga" value="{{ old('harga', $ks->harga) }}" placeholder="Harga Konser" required
                        autocomplete="off" autofocus>
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kuota Konser</label>
                    <input type="number" name="kuota" class="form-control @error('kuota')
                        is-invalid
                    @enderror" id="exampleFormControlInput1" value="{{ old('kuota', $ks->kuota) }}"
                        placeholder="Kuota Konser" required autocomplete="off" autofocus>
                    @error('kuota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sisakuota" class="form-label">Sisa Kuota Konser</label>
                    <input type="number" name="sisakuota" class="form-control @error('sisakuota')
                        is-invalid
                    @enderror" id="sisakuota" value="{{ old('sisakuota', $ks->sisakuota) }}"
                        placeholder="Sisa Kuota Konser" required autocomplete="off" autofocus>
                    @error('sisakuota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Tempat Konser</label>
                    <input type="text" name="tempat" class="form-control @error('tempat')
                        is-invalid
                    @enderror" id="exampleFormControlInput2" value="{{ old('tempat', $ks->tempat) }}"
                        placeholder="Tempat Konser" required autocomplete="off" autofocus>
                    @error('tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Tanggal Konser</label>
                    <input type="date" name="tanggal" class="form-control @error('tanggal')
                        is-invalid
                    @enderror" id="exampleFormControlInput2" value="{{ old('tanggal', $ks->tanggal) }}"
                        placeholder="Tanggal Konser" required autocomplete="off" autofocus>
                    @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-sm btn-warning"
                        onclick="return confirm('Apakah Anda Yakin Untuk Mengupdate Data Baru?')">Update</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection