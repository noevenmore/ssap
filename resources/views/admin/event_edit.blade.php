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
        'name_eng'=>$data->name_eng,
        'text_eng'=>$data->text_eng,
        'addr_eng'=>$data->addr_eng,
        'type'=>$data->type,
        'is_show'=>$data->is_show,
        'is_main'=>$data->is_main,
        'start'=>$data->start?$data->start:null,
        'length'=>$data->length,
        'price'=>$data->price
        ])
@endsection