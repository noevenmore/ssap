@extends('admin.app')
@section('title','Редактирование меню')

@section('content')
    @include('admin._menu_item',[
        'link'=>route('admin_menu_item_edit_post'),
        'id'=>$data->id,
        'name'=>$data->name,
        'name_eng'=>$data->name_eng,
        'is_main'=>$data->is_main,
        'category_id'=>$data->category_id,
        'filter_id'=>$data->filter_id,
        'position'=>$data->position,
        'parent_id'=>$data->parent_id,
        'text_id'=>$data->text_id,
        'link_type'=>$data->link_type,
        ])
@endsection