@extends('template.master')

@section('title')
    Setting Data Penumpang
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">SIlahkan Ubah</h6>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Titik Jemput</th>
                        <th scope="col">Titik Tujuan</th>
                        <th scope="col">Jenis Armada</th>
                        <th scope="col">Tanggal Keberangkatan</th>
                        <th scope="col">Tanggal kepulangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                   @foreach ($data as $penumpang)
                   <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{ $penumpang->nama}}</td>
                    <td>{{ $penumpang->jemput}}</td>
                    <td>{{ $penumpang->tujuan}}</td>
                    <td>{{ $penumpang->armada}}</td>
                    <td>{{ $penumpang->tanggalberangkat}}</td>
                    <td>{{ $penumpang->tanggalpulang}}</td>
                    <td>
                        <a href="{{route('hapus.datapenumpang', $penumpang->id)}}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                   @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection
