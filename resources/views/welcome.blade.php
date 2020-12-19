@extends('layouts.app')

@section('title',__('Main page'))

@section('content')
@include('layouts._header',['is_main_page'=>true])
@include('layouts._main_events')
@include('layouts._main_attraction')
@include('layouts._main_history')
@include('layouts._main_routes')
@include('layouts._main_how_come')
@include('layouts._footer')
@endsection