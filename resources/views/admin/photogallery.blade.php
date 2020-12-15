@extends('admin.app')
@section('title','Добавление фото в фотогалерею')

@section('content')

<form action="{{route('admin_add_to_gallery_post')}}" method="POST">
@csrf
    <div class="form-group">
        <label><strong>Изображения:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="gallery"></div>
    </div>

    <div class="form-group">
        <label><strong>Тип:</strong></label>
        <select class="form-control" name="tag">
            <option value="summer">Лето</option>
            <option value="autumn">Осень</option>
            <option value="winter">Зима</option>
            <option value="spring">Весна</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

@endsection