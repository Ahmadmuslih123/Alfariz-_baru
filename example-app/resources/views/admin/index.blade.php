@extends('template.master')

@section('title')
    Setting Tentang
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>
        <div class="row">

            <div class="col-lg ">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">SIlahkan Ubah</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.tentang')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Alamat</label>
                                <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tentang Perusahaan</label>
                                <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3">{!! $data->about !!}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">No Whatsapp Perusahaan</label>
                                        <input type="number" name="kontak" class="form-control" id="title" value="{{$data->kontak}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Instagram Perusahaan</label>
                                        <input type="text" name="instagram" class="form-control" id="title" value="{{ $data->instagram}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
