@extends('admin.app')
@section('title','Добавление события')

@section('content')
    @include('admin._event',['link'=>route('admin_event_add_post')])
@endsection