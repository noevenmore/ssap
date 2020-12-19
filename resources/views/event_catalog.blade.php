@extends('layouts.app')

@section('title',__('Events catalog'))

@section('content')
@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="/" class="main">{{__('Main page')}}</a>/<a href="{{route('event_list')}}" class="haschild">{{__('Catalog of events')}}</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_gallery section_page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{__('Catalog of events')}}
                </div>
            </div>
        </div>
    </div>
    <div class="container gallery gallery--hotel">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="gallery_filter">
                    <div class="gallery_title">
                        {{__('Filters')}}
                    </div>
                    <div class="gallery_year gallery_year--hotel">
                        <a href="{{route('event_list',['filter'=>'festival'])}}">{{__('Festivals')}}</a>
                        <a href="{{route('event_list',['filter'=>'show'])}}">{{__('Exhibitions')}}</a>
                        <a href="{{route('event_list',['filter'=>'concert'])}}">{{__('Concerts')}}</a>
                        <a href="{{route('event_list',['filter'=>'sport'])}}">{{__('Sport')}}</a>
                        <a href="{{route('event_list',['filter'=>'conference'])}}">{{__('Conferences')}}</a>
                        <a href="{{route('event_list',['filter'=>'other'])}}">{{__('Other')}}</a>
                        <a href="{{route('event_list')}}">{{__('All events')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="row">
                    <!-- ELEMENTS -->
                    @foreach ($data as $d)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="{{$d->image!==null?'/upload/images/'.$d->image->src:'/img/no-images.png'}}" alt="">
                            <div class="gallery_views">
                                <a href="{{route('event',$d->id)}}"><span>{{__('Review')}}</span></a>
                                <div class="br"></div>
                            </div>
                        </div>
                        
                        <div class="adress">
                            <div class="adress_title">
                                {{$system_var_lang=="ua"?$d->name:$d->name_eng}}
                            </div>

                            <div class="adress_location">
                                @if ($d->start)
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 0C3.36433 0 0 3.36433 0 7.5C0 11.6357 3.36433 15 7.5 15C11.6357 15 15 11.6357 15 7.5C15 3.36433 11.6357 0 7.5 0ZM11.0669 11.3793C10.945 11.5012 10.785 11.5625 10.625 11.5625C10.465 11.5625 10.3049 11.5012 10.1832 11.3793L7.05814 8.25439C6.94061 8.13755 6.87504 7.97871 6.87504 7.81254V3.75C6.87504 3.40439 7.15496 3.12504 7.5 3.12504C7.84504 3.12504 8.12496 3.40439 8.12496 3.75V7.55379L11.0669 10.4956C11.3112 10.7401 11.3112 11.135 11.0669 11.3793Z" fill="#502B1F"/>
                                </svg>

                                {{date('H:i (d.m.Y)',strtotime($d->start))}}
                                @endif
                            </div>
                            
                        </div>
                        
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