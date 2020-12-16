@extends('admin.app')
@section('title','Редактирование заведения')

@section('content')
    @include('admin._hotel',
    [
        'link'=>route('admin_hotel_edit_post'),
        'type'=>$data->type,
        'id'=>$data->id,
        'name'=>$data->name,
        'text'=>$data->text,
        'addr'=>$data->addr,
        'name_eng'=>$data->name_eng,
        'text_eng'=>$data->text_eng,
        'addr_eng'=>$data->addr_eng,
        'blink'=>$data->blink,
        'phones'=>$data->phones,
        'work_times'=>$data->work_times,
        ])
@endsection