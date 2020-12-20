@extends('admin.app')
@section('title','Рассылка писем')

@section('content')

<form action="{{route('admin_mailing_post')}}" method="POST">
    @csrf

    <div class="form-group">
        <label><strong>Количество подписчиков в базе e-mail адрессов: :</strong></label>
        <input type="text" class="form-control" value="{{$count}}" readonly>
    </div>

    <div class="form-group">
        <label><strong>Текст рассылки:</strong></label>
        <textarea name="text" id="summernote">{{isset($text)?$text:''}}</textarea>
    </div>

    <button class="btn btn-primary mt-3" type="submit">Сделать рассылку</button>
</form>

@endsection