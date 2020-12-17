@extends('admin.app')
@section('title','Добавление меню')

@section('content')
    @include('admin._menu_item',['link'=>route('admin_menu_item_add_post')])
@endsection