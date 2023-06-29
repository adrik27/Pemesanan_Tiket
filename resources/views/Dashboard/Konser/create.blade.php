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

<section class="input">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-md-7">
            <form action="/Dashboard/Konser" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <input type="hidden" name="Status_id" value="1">
                </div>

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
                    <label for="exampleFormControlInput1" class="form-label">Nama Konser</label>
                    <input type="text" name="nama" class="form-control @error('nama')
                        is-invalid
                    @enderror" id="exampleFormControlInput1" value="{{ old('nama') }}" placeholder="Nama Konser"
                        required autocomplete="off" autofocus>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi Konser</label>
                    <input type="text" name="deskripsi" class="form-control @error('deskripsi')
                        is-invalid
                    @enderror" id="exampleFormControlInput1" value="{{ old('deskripsi') }}"
                        placeholder="Deskripsi Konser" required autocomplete="off" autofocus>
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
                    @enderror" id="harga" value="{{ old('harga') }}" placeholder="Harga Konser" required
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
                    @enderror" id="exampleFormControlInput1" value="{{ old('kuota') }}" placeholder="Kuota Konser"
                        required autocomplete="off" autofocus>
                    @error('kuota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sisa Kuota Konser</label>
                    <input type="number" name="sisakuota" class="form-control @error('sisakuota')
                        is-invalid
                    @enderror" id="exampleFormControlInput1" value="{{ old('sisakuota') }}"
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
                    @enderror" id="exampleFormControlInput2" value="{{ old('tempat') }}" placeholder="Tempat Konser"
                        required autocomplete="off" autofocus>
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
                    @enderror" id="exampleFormControlInput2" value="{{ old('tanggal') }}" placeholder="Tanggal Konser"
                        required autocomplete="off" autofocus>
                    @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-sm btn-success"
                        onclick="return confirm('Apakah Anda Yakin Untuk Menyimpan Data Baru?')">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection