@extends('admin.app')
@section('title','Добавление юнита')

@section('content')
    @include('admin._hotel',['link'=>route('admin_hotel_add_post')])
@endsection