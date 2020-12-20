@extends('admin.app')
@section('title','Редактор значений')

@section('content')

<form action="{{route('admin_var_editor_update_post')}}" method="POST">
    @csrf

    <div class="form-group">
        <label><strong>Почта:</strong></label>
        <input type="text" name="email" class="form-control" placeholder="Введите значение..." value="{{isset($email)?$email:''}}">
    </div>

    <div class="form-group">
        <label><strong>Facebook:</strong></label>
        <input type="text" name="facebook" class="form-control" placeholder="Введите значение..." value="{{isset($facebook)?$facebook:''}}">
    </div>

    <div class="form-group">
        <label><strong>Instagram:</strong></label>
        <input type="text" name="instagram" class="form-control" placeholder="Введите значение..." value="{{isset($instagram)?$instagram:''}}">
    </div>

    <div class="form-group">
        <label><strong>Telegram:</strong></label>
        <input type="text" name="telegram" class="form-control" placeholder="Введите значение..." value="{{isset($telegram)?$telegram:''}}">
    </div>



    <button class="btn btn-primary mt-3" type="submit">Сохранить</button>
</form>

@endsection