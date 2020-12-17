@extends('admin.app')
@section('title','Редактирование фильтров')

@section('content')
    @include('admin._filter',[
        'link'=>route('admin_filter_edit_post'),
        'id'=>$data->id,
        'category_link'=>$data->category_link,
        'name'=>$data->name,
        'name_eng'=>$data->name_eng,
        'value'=>$data->value
        ])
@endsection