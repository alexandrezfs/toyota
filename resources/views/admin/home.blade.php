@extends('admin/app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1><a href="/admin/veh/list"><i class="fa fa-car"></i> Véhicules</a></h1>
            </div>
            <div class="col-lg-4">
                <h1><a href="/admin/forfaits/list"><i class="fa fa-list-ol"></i> Forfaits</a></h1>
            </div>
            <div class="col-lg-4">
                <h1><a href="/admin/news/list"><i class="fa fa-newspaper-o"></i> News</a></h1>
            </div>
        </div>
    </div>

@endsection