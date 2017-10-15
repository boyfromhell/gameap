@php($title = 'Game server')

@extends('layouts.main')

@section('content')
    <h2>Commands</h2>

    @if (!$server->processActive())
        <a class="btn btn-large btn-success" href="#"><span class="fa fa-play"></span>&nbsp;Start</a>
    @endif

    @if ($server->processActive())
        <a class="btn btn-large btn-danger" href="#"><span class="fa fa-stop"></span>&nbsp;Stop</a>
    @endif

    <a class="btn btn-large btn-warning" href="#"><span class="fa fa-repeat"></span>&nbsp;Restart</a>
    <a class="btn btn-large btn-info" href="#"><span class="fa fa-refresh"></span>&nbsp;Update</a>

    <h2>Tools</h2>

    <h2>Status</h2>

    <h2>Last actions</h2>
@endsection