@extends('template.master')

@section('title')
    Setting Armada
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Silahkan Ubah</h6>
            <a href="{{ route('armada') }}" type="button" class="btn btn-success">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{route('update.armada',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="exampleInputEmail1">Tittle</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tittle" value="{{$data->tittle}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Seat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="seat" value="{{$data->seat}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kapasitas</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="kapasitas" value="{{$data->kapasitas}}">
                </div>
                <label for="exampleInputPassword1">Image Bus</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label >
                </div>

                <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
            </form>
        </div>
    </div>

@endsection
