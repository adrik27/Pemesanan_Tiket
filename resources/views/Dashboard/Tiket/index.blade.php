@extends('layouts.main')

@section('isi')
<section class="judul mt-3">
    <div class="row">
        <div class="col-md">
            <h1 class="text-center">
                My Tiket
            </h1>
        </div>
    </div>
</section>

<section class="table mt-3">
    <div class="row">
        <div class="col-md">
            <table class="table table-active table-responsive-md table-bordered ">
                <thead>
                    <tr>
                        <th>Kode Tiket</th>
                        <th>Nama Konser</th>
                        <th>Tempat Konser</th>
                        <th>Tanggal Konser</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiket as $tk)
                    <tr>
                        <td>{{ $tk->kode_tiket }}</td>
                        <td>{{ $tk->nama_konser }}</td>
                        <td>{{ $tk->tempat_konser }}</td>
                        <td>{{ $tk->tgl_konser }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="activenonactive">
                                    @if ($tk->Status == 'Active')
                                    <span class="badge bg-success text-white">{{ $tk->Status }}</span>
                                    @else
                                    <span class="badge bg-danger text-white">{{ $tk->Status }}</span>
                                    @endif
                                </div>
                                {{-- <div class="detail">
                                    <a href="/Dashboard/pdf/{{ $tk->id }}" class="btn btn-sm btn-primary">Download
                                        Tiket</a>
                                </div> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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