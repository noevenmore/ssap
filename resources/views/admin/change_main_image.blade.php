@extends('admin.app')
@section('title','Редактор главного изображения')

@section('content')

<form action="{{route('admin_index')}}" method="GET">
    @csrf

    <div class="form-group">
        <label><strong>Изображения:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="main_page"></div>
    </div>

    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>

@endsection