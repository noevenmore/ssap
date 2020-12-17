@extends('admin.app')
@section('title','Добавление типа')

@section('content')
    @include('admin._type',['link'=>route('admin_type_add_post')])
@endsection