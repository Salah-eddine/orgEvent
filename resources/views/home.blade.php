@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/demand" style="color:white !important;">  <button type="button" class="btn btn-block btn-primary btn-lg">Demande</button></a>
            </div>
            <div class="col-md-6">
                <a href="/service" style="color:white !important;"> <button type="button" class="btn btn-block btn-primary btn-lg">Service</button></a>
            </div>
        </div>
    </div>
@stop
