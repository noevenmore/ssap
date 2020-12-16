@extends('layouts.app')

@section('title','Main page')

@section('content')

@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="{{route('index')}}" class="main">{{__('Main page')}} </a>/<a href="{{route('photogallery')}}" class="haschild">{{__('Photo Gallery')}}</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_gallery section_page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{__('Photo Gallery')}}
                </div>
            </div>
        </div>
    </div>
    <div class="container gallery">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="gallery_filter">
                    <div class="gallery_title">
                        {{__('Filters')}}
                    </div>
                    <div class="gallery_year">
                        <a href="{{route('photogallery',['tag'=>'spring'])}}">{{__('Spring Kropyvnytskyi')}}</a>
                        <a href="{{route('photogallery',['tag'=>'summer'])}}">{{__('Summer Kropyvnytskyi')}}</a>
                        <a href="{{route('photogallery',['tag'=>'winter'])}}">{{__('Winter Kropyvnytskyi')}}</a>
                        <a href="{{route('photogallery',['tag'=>'autumn'])}}">{{__('Autumn Kropyvnytskyi')}}</a>
                    </div>
                    <div class="br"></div>
                    <div class="gallery_arhive">
                        <a href="{{route('photogallery')}}">{{__('All seasons')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="row">
                    @foreach ($data as $d)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <a class="gallery_img js-smartPhoto" href="/upload/images/{{$d->src}}">
                                <img src="/upload/images/{{$d->src}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('pagination')

</section>

@include('layouts._footer')
@endsection