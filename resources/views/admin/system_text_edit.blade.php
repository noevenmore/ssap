@extends('admin.app')
@section('title','Редактирование заведения')

@section('content')
    @include('admin._system_text',
    [
        'link'=>route('admin_system_text_edit_post'),
        'id'=>$data->id,
        'caption'=>$data->caption,
        'text'=>$data->text,
        'caption_eng'=>$data->caption_eng,
        'text_eng'=>$data->text_eng,
        ])
@endsection