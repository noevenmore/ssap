@extends('admin.app')
@section('title','Просмотр комментариев')

@section('content')
@include('admin._modal_delete')
    @if (!$data->items())
        <div class="alert alert-info text-center">
            Ничего нет
        </div>
    @endif


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Статус</th>
            <th scope="col">Дата</th>
            <th scope="col">Действия</th>
          </tr>
        </thead>
        <tbody>

    @foreach ($data as $d)
    <tr>
        <th scope="row">{{$d->id}}</th>
        <td>{{$d->is_check?'Опубликован':'Ожидает проверки'}}</td>
        <td>{{date('d.m.Y',strtotime($d->created_at))}}</td>
        <td><a class="btn btn-sm btn-primary" href="{{route('admin_comment_edit',$d->id)}}">Редактировать</a>
        </td>
      </tr>
    @endforeach

    </tbody>
    </table>

    {{ $data->links() }}
@endsection