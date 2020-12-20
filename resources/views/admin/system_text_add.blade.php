@extends('admin.app')
@section('title','Добавление текста')

@section('content')
    @include('admin._system_text',['link'=>route('admin_system_text_add_post')])
@endsection