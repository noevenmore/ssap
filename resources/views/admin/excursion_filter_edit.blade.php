@extends('admin.app')
@section('title','Редактирование фильтров экскурсий')

@section('content')
    @include('admin._excursion_filter',[
        'link'=>route('admin_excursion_filter_edit_post'),
        'id'=>$data->id,
        'name'=>$data->name,
        'name_eng'=>$data->name_eng,
        'value'=>$data->value,
        ])
@endsection