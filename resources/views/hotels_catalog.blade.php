@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header')


@php
$tn = 'Не указано';

switch ($type) {
  case 'hotel':
    $tn = __('Catalog of hotels');
  break;

  case 'museum':
    $tn = __('Catalog of museums');
  break;

  case 'gallery':
    $tn = __('Catalog of gallerys');
  break;

  case 'park':
    $tn = __('Catalog of parks');
  break;

  case 'history_val':
    $tn = __('Catalog of historical shafts');
  break;

  case 'architecture':
    $tn = __('Catalog of architecture');
  break;

  case 'monument':
    $tn = __('Catalog of monuments');
  break;

  case 'temple':
    $tn = __('Catalog of temples');
  break;

  case 'cafe':
    $tn = __('Catalog of cafes');
  break;

  case 'restaurant':
    $tn = __('Catalog of restaurants');
  break;

  case 'coffe':
    $tn = __('Catalog of coffes shops');
  break;

  case 'entertainment':
    $tn = __('Catalog of entertainments');
  break;
}
@endphp

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="#" class="main">{{__('Main page')}}</a>/<a href="#" class="haschild">{{$tn}}</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_gallery section_page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{$tn}}
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
                        <a href="#">Рекомендуемый</a>
                        <a href="#">Кропивницкий</a>
                        <ul>
                            <li><a href="#" class="season">Весняний</a></li>
                            <li><a href="#" class="season">Літній</a></li>
                            <li><a href="#" class="season">Осінній</a></li>
                            <li><a href="#" class="season">Зимовий</a></li>
                        </ul>
                    </div>
                    <div class="br"></div>
                    <div class="gallery_arhive">
                        <a href="#">Закладки</a>
                    </div>
                    <div class="gallery_btn">
                        <a href="#" class="btn">Застосувати</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="row">
                    <!-- ELEMENTS -->
                    @foreach ($data as $d)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="/upload/images/{{$d->image->src}}" alt="">
                            <div class="gallery_views">
                                <a href="{{route('node',$d->id)}}"><span>{{__('Review')}}</span></a>
                                <div class="br"></div>
                            </div>
                        </div>
                        <div class="adress">
                            <div class="adress_title">
                                {{$system_var_lang=="ua"?$d->name:$d->name_eng}}
                            </div>
                            <div class="adress_location">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.49995 0C4.37995 0 1.8418 2.53816 1.8418 5.65776C1.8418 10.1495 6.89285 14.6617 7.10798 14.852C7.22048 14.9507 7.36022 15 7.49995 15C7.64522 15 7.79048 14.9467 7.90377 14.8405C8.11811 14.64 13.1581 9.87947 13.1581 5.65816C13.1581 2.53855 10.6192 0 7.49995 0ZM7.49995 8.35579C6.00982 8.35579 4.80232 7.1475 4.80232 5.65855C4.80232 4.16961 6.00982 2.96132 7.49995 2.96132C8.9893 2.96132 10.1968 4.16921 10.1968 5.65855C10.1968 7.14789 8.9893 8.35579 7.49995 8.35579Z" fill="#D6B247"/>
                                </svg>
                                {{$system_var_lang=="ua"?$d->addr:$d->addr_eng}}
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