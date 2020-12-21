@extends('admin.app')
@section('title','Просмотр фотографий')

@section('content')
@include('admin._modal_delete')

<div class="row">
    <div class="col-12 text-center">

        <img class="img-fluid" src="/upload/images/{{$photo->src}}" alt="/upload/images/{{$photo->src}}">
    </div>
</div>

<form class="mt-4" method="POST" action="{{route('admin_photo_edit')}}">
    @csrf
    <input type="number" name="id" value="{{$photo->id}}" hidden>

    <!--
    <div class="form-group">
        <label><strong>ID прикрепленного события:</strong></label>
        <input type="text" name="data_id" class="form-control" value="{{$photo->data_id}}">
    </div>

    <div class="form-group">
        <label><strong>Тип фотографии:</strong></label>
        <select class="form-control" name="type">
            <option value="hotel" {{isset($photo->type)&&$photo->type=='hotel'?'selected':''}}>Отель</option>
            <option value="event" {{isset($photo->type)&&$photo->type=='event'?'selected':''}}>Событие</option>
            <option value="gallery" {{isset($photo->type)&&$photo->type=='gallery'?'selected':''}}>Галлерея</option>
            <option value="excursion" {{isset($photo->type)&&$photo->type=='excursion'?'selected':''}}>Экскурсия</option>
            <option value="etc" {{isset($photo->type)&&$photo->type=='etc'?'selected':''}}>Другое</option>
        </select>
    </div>

    <div class="form-group">
        <label><strong>Тег:</strong></label>
        <input type="text" name="tag" class="form-control" value="{{$photo->tag}}">
    </div>
    -->

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_main" {{$photo->is_main?'checked':''}}>
        <label class="form-check-label">Изображение является главным</label>
    </div>

    <div class="text-center">
        <button class="btn btn-primary mt-2" type="submit">Сохранить</button>
    </div>

    <div class="form-check">
        <label><strong>Тип прикрепленного события:</strong></label>
        <input class="form-control" value="{{$photo->type}}" readonly>
    </div>

    <div class="form-check">
        <label><strong>ID прикрепленного события:</strong></label>
        <input class="form-control" value="{{$photo->data_id}}" readonly>
    </div>

    <div class="form-check">
        <label><strong>Тэг:</strong></label>
        <input class="form-control" value="{{$photo->tag}}" readonly>
    </div>
</form>

<div class="text-center mt-5">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteWindow" data-filename="{{$photo->src}}" data-url="{{route('admin_deleteimage')}}" data-route="{{route('admin_show_gallery')}}">Удалить</button>
</div>

@endsection