@extends('admin.app')
@section('title','Редактирование экскурсии')

@section('content')
    @include('admin._excursion',
    [
        'link'=>route('admin_excursion_edit_post'),
        'is_individual'=>$data->type=='individual',
        'id'=>$data->id,
        'name'=>$data->name,
        'text'=>$data->text,
        'addr'=>$data->addr,
        'name_eng'=>$data->name_eng,
        'text_eng'=>$data->text_eng,
        'addr_eng'=>$data->addr_eng,
        'admin_email'=>$data->admin_email,
        'blink'=>$data->blink,
        'phones'=>$data->phones,
        'filter'=>$data->filter,
        'work_times'=>$data->work_times,
        'length'=>$data->length,
        'price'=>$data->price,
        'rate'=>$data->rate,
        'popularity'=>$data->popularity,
        'max_people'=>$data->max_people,
        'is_show'=>$data->is_show
        ])
@endsection