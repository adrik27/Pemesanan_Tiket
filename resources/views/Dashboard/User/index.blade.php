@extends('layouts.main')

@section('isi')
<section class="j mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="text-center">Daftar Konser</h1>
            </div>
        </div>
    </div>
</section>
<section class="t mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <table class="table table-bordered table-responsive-md table-active table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Konser</th>
                            <th>Tempat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KONSER POP</td>
                            <td>JEPARA</td>
                            <td>
                                <form action="/Dashboard/User" method="post">
                                    @csrf
                                    <input type="hidden" name="username" value="{{ Auth()->user()->username }}">
                                    <button type="submit" class="btn btn-sm btn-success">Pesan</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection