@extends('admin.app')
@section('title','Просмотр отелей')

@section('content')
    @if (!$data->items())
        <div class="alert alert-info text-center">
            Ничего нет
        </div>
    @endif


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Название отеля</th>
            <th scope="col">Действия</th>
          </tr>
        </thead>
        <tbody>

    @foreach ($data as $d)
    <tr>
        <th scope="row">{{$d->id}}</th>
        <td>{{$d->name}}</td>
        <td><a class="btn btn-sm btn-primary" href="{{route('admin_hotel_edit',$d->id)}}">Редактировать</a> <a class="btn btn-sm btn-danger" href="/">Удалить</a></td>
      </tr>
    @endforeach

    </tbody>
    </table>

    {{ $data->links() }}
@endsection