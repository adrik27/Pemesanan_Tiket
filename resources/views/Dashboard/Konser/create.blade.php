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
            <form action="/Dashboard/Konser" method="post">
                @csrf

                <div class="mb-3">
                    <input type="hidden" name="Status_id" value="1">
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

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection