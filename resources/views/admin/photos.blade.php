@extends('admin.app')
@section('title','Просмотр фотографий')

@section('content')

@if ($photos->items())
    <div class="row">

    @foreach ($photos as $ph)
    <div class="col-lg-3 col-md-4 col-6">
        <a href="{{route('admin_show_photo',$ph->id)}}"><img class="img-fluid" src="/upload/images/thumbs/{{$ph->src}}" alt="/upload/images/thumbs/{{$ph->src}}"></a>
    </div>
    @endforeach

    </div>

    <div class="pagination justify-content-center mt-3">
        {{ $photos->links() }}
    </div>
    
@else
    <div class="alert alert-info text-center">
        Ничего нет
    </div>
@endif

@endsection