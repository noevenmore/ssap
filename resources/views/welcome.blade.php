@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header',['is_main_page'=>true])
@include('layouts._main_events')

@include('layouts._footer')
@endsection