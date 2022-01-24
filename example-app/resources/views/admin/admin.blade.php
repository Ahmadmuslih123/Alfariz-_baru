@extends('template.master')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pemesan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection