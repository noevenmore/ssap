@extends('admin.app')
@section('title','Редактирование фильтров')

@section('content')
    @include('admin._filter',[
        'link'=>route('admin_filter_edit_post'),
        'id'=>$data->id,
        'category_link'=>$data->category_link,
        'name'=>$data->name,
        'name_eng'=>$data->name_eng,
        'value'=>$data->value,
        'is_show'=>$data->is_show,
        'is_redirect_one'=>$data->is_redirect_one,
        'is_show_phones'=>$data->is_show_phones,
        'is_show_worktimes'=>$data->is_show_worktimes,
        'is_show_link'=>$data->is_show_link,
        'is_can_comment'=>$data->is_can_comment,
        ])
@endsection