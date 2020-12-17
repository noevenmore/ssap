@extends('admin.app')
@section('title','Добавление фильтра')

@section('content')
    @include('admin._filter',['link'=>route('admin_filter_add_post')])
@endsection