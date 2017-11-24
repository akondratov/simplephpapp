@extends('layouts.frontend')

@section('title')
    {{ config('app.title') }}
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Information</div>
            <div class="panel-body">
                <div class="col-sm-4">
                    <h3>Host</h3>
                    <p>{{ Request::getHost() }}</p>
                </div>
                <div class="col-sm-4">
                    <h3>Application url</h3>
                    <p>{{ config('app.url') }}</p>
                </div>
                <div class="col-sm-4">
                    <h3>Laravel version:</h3>
                    <p>{{ app()->version() }}</p>
                </div>
                <div class="col-sm-4">
                    <h3>Php version:</h3>
                    @if (version_compare('7.1.0', PHP_VERSION) >= 0)
                        <p class="text-danger">{{ PHP_VERSION}}</p>
                    @else
                        <p class="text-success">{{ PHP_VERSION }}</p>
                    @endif
                </div>
                {{--<div class="col-sm-4">--}}
                    {{--<h3>Installed extensions:</h3>--}}
                    {{--<ul class="list-group">--}}
                        {{--@foreach(get_loaded_extensions() as $extension)--}}
                            {{--<li class="list-group-item">{{ $extension }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="col-sm-4">
                    <h3>Web server:</h3>
                    <p>{{ $_SERVER['SERVER_SOFTWARE'] }}</p>
                </div>
                <div class="col-sm-4">
                    <h3>Session driver</h3>
                    @if (\Illuminate\Support\Facades\Session::getDefaultDriver() !== 'redis')
                        <p class="text-danger">{{ \Illuminate\Support\Facades\Session::getDefaultDriver() }}</p>
                    @else
                        <p class="text-success">{{ \Illuminate\Support\Facades\Session::getDefaultDriver() }}</p>
                    @endif
                </div>
                <div class="col-sm-4">
                    <h3>Session id</h3>
                    <p>{{ \Illuminate\Support\Facades\Session::getId() }}</p>
                </div>
                <div class="col-sm-4">
                    <h3>Environment</h3>
                    @if (config('app.env') !== 'production')
                        <p class="text-danger">{{ config('app.env') }}</p>
                    @else
                        <p class="text-success">{{ config('app.env') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
