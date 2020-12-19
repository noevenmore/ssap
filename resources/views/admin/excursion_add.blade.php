@extends('admin.app')
@section('title','Добавление экскурсии')

@section('content')
    @include('admin._excursion',['link'=>route('admin_excursion_add_post')])
@endsection