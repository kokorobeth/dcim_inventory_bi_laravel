@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{ \App\User::count() }}</h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ \App\Petugas::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Petugas DC</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('petugas.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ \App\Vendor::count() }}</h3>
                <p>Vendor</p>
            </div>
            <div class="icon">
                <i class="ion ion-briefcase"></i>
            </div>
            <a href="{{route('vendor.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ \App\Ruangan::count() }}</h3>

                <p>Ruangan</p>
            </div>
            <div class="icon">
                <i class="ion ion-home"></i>
            </div>
            <a href="{{route('ruangan.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>



<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>{{ \App\Merk::count() }}</h3>

                <p>Merk</p>
            </div>
            <div class="icon">
                <i class="ion ion-compose"></i>
            </div>
            <a href="{{route('merk.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>{{ \App\Perangkat::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Perangkat In</p>
            </div>
            <div class="icon">
                <i class="ion ion-wrench"></i>
            </div>
            <a href="{{route('perangkat.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>{{ \App\PerangkatOut::count() }}</h3>

                <p>Perangkat Out</p>
            </div>
            <div class="icon">
                <i class="ion ion-hammer"></i>
            </div>
            <a href="{{route('perangkatout.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- ./col -->
</div>

    {{-- <div class="row">
        <div class="box">
            <div class="box-body">
            <div class="callout callout-success">
                <h4>Success</h4>

                <p> You are logged in!</p>
            </div>
            </div>
        </div>
    </div> --}}
@endsection
