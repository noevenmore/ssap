@extends('admin.app')
@section('title','Добавление фильтра экскурсии')

@section('content')
    @include('admin._excursion_filter',['link'=>route('admin_excursion_filter_add_post')])
@endsection