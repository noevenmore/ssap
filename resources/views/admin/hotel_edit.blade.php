@extends('admin.app')
@section('title','Добавление отеля')

@section('content')
    @include('admin._hotel',
    [
        'link'=>route('admin_hotel_edit_post'),
        'id'=>$data->id,
        'name'=>$data->name,
        'text'=>$data->text,
        'addr'=>$data->addr,
        'blink'=>$data->blink,
        'phones'=>$data->phones,
        'work_times'=>$data->work_times,
        ])
@endsection