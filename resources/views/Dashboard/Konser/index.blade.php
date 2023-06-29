@extends('layouts.main')

@section('isi')
<section class="judul">
    <div class="row">
        <div class="col-md">
            <h1 class="text-center">Konser Dashboard</h1>
        </div>
    </div>
</section>

@can('admin')
<section class="tombol mt-3">
    <div class="row">
        <div class="col-md">
            <a href="/Dashboard/Konser/create" class="btn btn-sm btn-success">Tambah Konser +</a>
        </div>
    </div>
</section>
@endcan

<section class="table mt-3">
    <table class="table table-active table-bordered table-responsive-md ">
        <thead>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Kuota</td>
                <td>Sisa Kuota</td>
                <td>Tempat</td>
                <td>Tanggal</td>
                @can('admin')
                <td>Status</td>
                @endcan
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($konser as $ks)
            {{-- @dd($ks) --}}
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if (!$ks->image)
                    <img src="{{ url('/assets/images/demos/hero1.jpg') }}" alt="{{ $ks->nama }}" width='100' height="50"
                        class="img img-fluid rounded-3">
                    @else
                    <img src="{{ asset('storage/'. $ks->image) }}" alt="{{ $ks->nama }}" width='100' height="50"
                        class="img img-fluid rounded-3">
                    @endif
                </td>
                <td>{{ $ks->nama }}</td>
                <td>@currency($ks->harga)</td>
                <td>{{ $ks->kuota }}</td>
                <td>{{ $ks->sisakuota }}</td>
                <td>{{ $ks->tempat }}</td>
                <td>{{ $ks->tanggal }}</td>
                @can('admin')
                <td>{{ $ks->status }}</td>
                @endcan
                <td>
                    <div class="d-flex gap-2">
                        @can('admin')
                        <div class="edit">
                            <a href="/Dashboard/Konser/{{ $ks->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        </div>
                        <div class="delete">
                            <form action="/Dashboard/Konser/{{ $ks->id }}" method="POST" enctype="multipart/form-data">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ?')">Hapus</button>
                            </form>
                        </div>
                        @endcan

                        <div class="detail">
                            <a href="/Dashboard/Konser/{{ $ks->id }}" class="btn btn-sm btn-info">Detail</a>
                        </div>
                        @can('user') <div class="status">
                            @if ($ks->sisakuota < 1 ) <button type="button" class="btn btn-sm btn-danger">Kuota
                                Habis</button>
                                @else
                                <form action="/Dashboard/Pembayaran" method="Post">
                                    @csrf
                                    <input name="User_id" value="" type="hidden" />
                                    <input name="Konser_id" value="{{ $ks->id }}" type="hidden" />
                                    <input name="status" value="" type="hidden" />

                                    <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                                </form>
                        </div>
                        @endif
                        @endcan

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<section class="paginate">
    <div class="row ">
        <div class="col-md d-flex justify-content-center">
            {{ $konser->links() }}
        </div>
    </div>
</section>
@endsection