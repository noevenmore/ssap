@extends('admin.app')
@section('title','Редактирование типов')

@section('content')
    @include('admin._type',[
        'link'=>route('admin_type_edit_post'),
        'id'=>$data->id,
        'llink'=>$data->link,
        'is_main'=>$data->is_main,
        'name'=>$data->name,
        'name_eng'=>$data->name_eng
        ])
@endsection