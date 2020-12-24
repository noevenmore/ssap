@extends('admin.app')
@section('title','Добавление основной надписи на главной странице')

@section('content')
    @include('admin._mp_title',[
        'link'=>route('admin_mp_title_add_post'),
        'tag'=>0,
        ])
@endsection