@extends('template.master')

@section('title')
    Setting Jenis Perjalanan
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Silahkan Ubah</h6>
            <a href="{{route('tambah.perjalanan')}}" type="button" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tittle</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $perjalanan)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $perjalanan->tittle }}</td>
                            <td>{{ $perjalanan->deskripsi }}</td>
                            <td>
                                <img src="{{ asset('perjalanan/'. $perjalanan->image)}}" alt="" width="40px">
                            </td>
                            <td>
                                <a href="{{ route('edit.perjalanan', $perjalanan->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('hapus.perjalanan', $perjalanan->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
