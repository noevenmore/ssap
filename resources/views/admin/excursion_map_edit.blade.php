@extends('admin.app')
@section('title','Добавление маршрута к экскурсии')

@section('content')
    @include('admin._excursion_map',[
        'link'=>route('admin_excursion_map_edit_post'),
        'id'=>$data->id,
        ])
@endsection