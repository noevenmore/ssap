@extends('admin.app')
@section('title','Редактирование ссылок главной страницы')

@section('content')
    @include('admin._history',
    [
        'link'=>route('admin_main_page_link_editor_post'),
        'main_link'=>$main_page_link,
        'main_link1'=>$main_page_link0,
        'main_link2'=>$main_page_link1,
        'main_link3'=>$main_page_link2,
        ])
@endsection