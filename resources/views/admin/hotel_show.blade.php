@extends('admin.app')
@section('title','Просмотр заведений')

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
            <th scope="col">Тип</th>
            <th scope="col">Название</th>
            <th scope="col">Действия</th>
          </tr>
        </thead>
        <tbody>

    @foreach ($data as $d)
    <tr>
        <th scope="row">{{$d->id}}</th>

        @php
        $tn = 'Не указано';
        
        switch ($d->type) {
          case 'hotel':
            $tn = 'Отель';
          break;

          case 'museum':
            $tn = 'Музей';
          break;

          case 'gallery':
            $tn = 'Галлерея';
          break;

          case 'park':
            $tn = 'Парк';
          break;

          case 'history_val':
            $tn = 'Исторический вал';
          break;

          case 'architecture':
            $tn = 'Шедевр архитектуры';
          break;

          case 'monument':
            $tn = 'Памятник';
          break;

          case 'temple':
            $tn = 'Храм';
          break;

          case 'cafe':
            $tn = 'Кафе';
          break;

          case 'restaurant':
            $tn = 'Ресторан';
          break;

          case 'coffe':
            $tn = 'Кофейня';
          break;

          case 'entertainment':
            $tn = 'Развлечения';
          break;
        }
        @endphp

        <td>{{$tn}}</td>
        <td>{{$d->name}}</td>
        <td><a class="btn btn-sm btn-primary" href="{{route('admin_hotel_edit',$d->id)}}">Редактировать</a> <a class="btn btn-sm btn-danger" href="/">Удалить</a></td>
      </tr>
    @endforeach

    </tbody>
    </table>

    {{ $data->links() }}
@endsection