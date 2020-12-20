@extends('admin.app')
@section('title','Добавление фильтра')

@section('content')
@include('admin._modal_delete')
<div class="form-group">
    <label><strong>Имя пользователя:</strong></label>
    <input type="text" name="name" class="form-control" placeholder="Введите название..." value="{{isset($name)?$name:''}}" readonly>
</div>

<div class="form-group">
    <label><strong>Почта:</strong></label>
    <input type="text" name="email" class="form-control" placeholder="Введите почту..." value="{{isset($email)?$email:''}}" readonly>
</div>

<div class="form-group">
    <label><strong>Текст комментария:</strong></label>
    <textarea class="form-control" name="text" readonly>{{isset($text)?$text:''}}</textarea>
</div>

<form class="text-center" action="{{route('admin_comment_verify_post')}}" method="POST">
    @csrf
    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>
    <button class="btn btn-success" type="submit">Опубликовать</button>
</form>

<div class="text-center">
    <button type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#ModalDeleteWindow" data-id="{{$id}}" data-url="{{route('admin_comment_delete_post')}}" data-route="{{route('admin_comments_show')}}">Удалить</button>
</div>

@endsection