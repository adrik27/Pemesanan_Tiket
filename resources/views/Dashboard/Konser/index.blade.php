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
                <td>Nama</td>
                <td>Tempat</td>
                @can('admin')
                <td>Status</td>
                @endcan
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($konser as $ks)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ks->nama }}</td>
                <td>{{ $ks->tempat }}</td>
                @can('admin')
                <td>{{ $ks->Status->nama }}</td>
                @endcan
                <td>
                    <div class="d-flex gap-2">
                        @can('admin')
                        <div class="edit">
                            <a href="/Dashboard/Konser/{{ $ks->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        </div>
                        <div class="detail">
                            <a href="/Dashboard/Konser/{{ $ks->id }}" class="btn btn-sm btn-info">Detail</a>
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

                        @can('user')
                        <div class="status">
                            <form action="">

                                <input name="nama" value="{{ $ks->nama }}" type="hidden" />
                                <input name="tempat" value="{{ $ks->tempat }}" type="hidden" />
                                <input name="status" value="{{ $ks->status_id }}" type="hidden" />
                                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                            </form>
                        </div>
                        @endcan
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection