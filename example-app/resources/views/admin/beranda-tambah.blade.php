@extends('template.master')

@section('title')
    Setting Beranda
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Silahkan Ubah</h6>
            <a href="{{ route('beranda') }}" type="button" class="btn btn-success">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('kirim.beranda') }}" method="POST" enctype="multipart/form-data">
                @csrf

        </div>
        <label for="exampleInputPassword1">Image Beranda</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
        </form>
    </div>

@endsection
