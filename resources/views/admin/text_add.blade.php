@extends('admin.app')
@section('title','Добавление текста')

@section('content')
    @include('admin._text',['link'=>route('admin_text_add_post')])
@endsection