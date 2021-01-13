@extends('layouts.app')

@section('title',__('Favorite'))

@section('content')
@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="/" class="main">{{__('Main page')}}</a>/<a href="{{route('home')}}" class="haschild">{{__('Favorite')}}</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_gallery section_page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{__('Favorite')}}
                </div>
            </div>
        </div>
    </div>
    <div class="container gallery gallery--hotel">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="gallery_filter">
                    <div class="gallery_title">
                        {{__('User panel')}}
                    </div>
                    <div class="gallery_year gallery_year--hotel">
                        <a href="{{route('logout')}}">{{__('Logout')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="row">
                    <!-- ELEMENTS -->
                    @foreach ($data as $d)
                    @if ($d->image || $d->data_id)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="gallery_img">
                                <img src="{{$d->image!==null?'/upload/images/'.$d->image->src:'/img/no-images.png'}}" alt="">
                                <div class="gallery_views">
                                    <a href="
                                    @include('layouts._fav_link',['item'=>$d])
                                    "><span>{{__('Review')}}</span></a>
                                    <div class="br"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('pagination')
</section>

@include('layouts._footer')
@endsection