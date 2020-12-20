@extends('admin.app')
@section('title','Добавление фильтра')

@section('content')
@include('admin._modal_delete')

@if ($excursion)
<div class="form-group">
    <label><strong>Экскурсия:</strong></label>
    <a target="_blank" href="{{route('excursion',$excursion->id)}}">{{$excursion->name}}</a>
</div>
@endif

<div class="form-group">
    <label><strong>Имя:</strong></label>
    <input type="text" name="name" class="form-control" value="{{isset($data->name)?$data->name:''}}" readonly>
</div>

<div class="form-group">
    <label><strong>Почта:</strong></label>
    <input type="text" name="email" class="form-control" value="{{isset($data->email)?$data->email:''}}" readonly>
</div>

<div class="form-group">
    <label><strong>Телефон:</strong></label>
    <input type="text" name="phone" class="form-control" value="{{isset($data->phone)?$data->phone:''}}" readonly>
</div>

<div class="form-group">
    <label><strong>Дата:</strong></label>
    <input type="text" name="date" class="form-control" value="{{isset($data->date)?$data->date:''}}" readonly>
</div>

<div class="form-group">
    <label><strong>Количество людей:</strong></label>
    <input type="text" name="people_count" class="form-control" value="{{isset($data->people_count)?$data->people_count:''}}" readonly>
</div>

<form class="text-center" action="{{route('admin_order_verify_post')}}" method="POST">
    @csrf
    <input type="text" name="id" value="{{isset($data->id)?$data->id:0}}" hidden>
    <button class="btn btn-success" type="submit">Пометить как просмотренное</button>
</form>

<div class="text-center">
    <button type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#ModalDeleteWindow" data-id="{{$data->id}}" data-url="{{route('admin_order_delete_post')}}" data-route="{{route('admin_orders_show')}}">Удалить</button>
</div>

@endsection