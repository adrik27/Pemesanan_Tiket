@extends('layouts.main')

@section('isi')

<section class="j mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="text-center">Daftar Pesanan Tiket</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md text-center">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="j mt-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                <form action="/Dashboard/Admin" method="get">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm btn-danger ri-search-eye-line" type="submit"
                                id="button-addon1"></button>
                        </div>
                        <input type="text" name="query" class="form-control" placeholder="Masukkan Kode Tiket"
                            aria-describedby="button-addon1" autocomplete="off" autofocus>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="t mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                @if($tiket->isEmpty())
                <h1 class="text-center mt-5 ">Tidak ada hasil ditemukan !!</h1>
                @else
                <table class="table table-bordered table-responsive-md table-active table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Tiket</th>
                            <th>Username</th>
                            <th>Nama Konser</th>
                            <th>Tempat Konser</th>
                            <th>Tanggal Konser</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiket as $tk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tk->kode_tiket }}</td>
                            <td>{{ $tk->username }}</td>
                            <td>{{ $tk->nama_konser }}</td>
                            <td>{{ $tk->tempat_konser }}</td>
                            <td>{{ $tk->tgl_konser }}</td>
                            <td>
                                @if ($tk->Status == 'Active')
                                <span class="badge bg-success text-white">{{ $tk->Status }}</span>
                                @else
                                <span class="badge bg-danger text-white">{{ $tk->Status }}</span>
                                @endif
                            </td>
                            <td>
                                @if ($tk->Status == 'Non Active')
                                <div class="d-flex gap-2">
                                    <div class="status">
                                        <form action="/Dashboard/konfirmasi" method="post">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $tk->id }}">
                                            <button type="submit" class="btn btn-sm btn-success">Konfirmsi</button>
                                        </form>
                                    </div>
                                </div>

                                @endif
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="paginate">
    <div class="row ">
        <div class="col-md d-flex justify-content-center">
            {{ $tiket->links() }}
        </div>
    </div>
</section>
@endsection