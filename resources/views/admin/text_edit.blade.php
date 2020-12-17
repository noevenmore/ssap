@extends('admin.app')
@section('title','Редактирование заведения')

@section('content')
    @include('admin._text',
    [
        'link'=>route('admin_text_edit_post'),
        'id'=>$data->id,
        'name'=>$data->name,
        'text'=>$data->text,
        'name_eng'=>$data->name_eng,
        'text_eng'=>$data->text_eng,
        ])
@endsection