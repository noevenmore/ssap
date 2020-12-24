@extends('admin.app')
@section('title','Редактирование основной надписи на главной странице')

@section('content')
    @include('admin._mp_title',[
        'link'=>route('admin_mp_title_edit_post'),
        'id'=>$data->id,
        'label0'=>$data->label0,
        'label0_eng'=>$data->label0_eng,
        'label1'=>$data->label1,
        'label1_eng'=>$data->label1_eng,
        'label2'=>$data->label2,
        'label2_eng'=>$data->label2_eng,
        'text'=>$data->text,
        'text_eng'=>$data->text_eng,
        'is_show'=>$data->is_show,
        'tag'=>$data->id,
        ])
@endsection