@extends('template.master')

@section('title')
    Setting Beranda
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Silahkan Ubah</h6>
            <a href="{{ route('tambah.beranda') }}" type="button" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $beranda)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>
                                <img src="{{ asset('beranda/' . $beranda->image) }}" alt="" width="40px">
                            </td>
                            <td>
                                <a href="{{ route('hapus.beranda', $beranda->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
