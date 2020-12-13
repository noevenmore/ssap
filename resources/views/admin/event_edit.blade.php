@extends('admin.app')
@section('title','Добавление отеля')

@section('content')
    @include('admin._event',
    [
        'link'=>route('admin_event_edit_post'),
        'id'=>$data->id,
        'name'=>$data->name,
        'text'=>$data->text,
        'addr'=>$data->addr,
        'type'=>$data->type,
        'is_show'=>$data->is_show,
        'is_main'=>$data->is_main,
        ])
@endsection