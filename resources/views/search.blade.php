@extends('layouts.app')

@section('title',__('Search on the site'))

@section('content')
@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="/" class="main">{{__('Main page')}}</a>/<a href="{{route('search')}}" class="haschild">{{__('Search on the site')}}</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_excursion section_page section_catalogPublication">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{__('Search on the site')}}
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <form action="{{route('search')}}">
        <div class="filter">
            <div class="filter_input w-100">
                <div class="filter_input-input w-100">
                    <input type="text" name="t" class="w-100" placeholder="{{__('Search by text')}}" value="{{$text}}">
                </div>
                <div class="filter_input-search" onclick="$('#button_submit').click();">
                    
                    <img src="img/search.svg" alt="">
                </div>
            </div>
        </div>
        <div class="subfilter">
            <div class="filter_items">
                <div class="filter_item">
                    <a href="{{route('search',['t'=>$text])}}">{{__('New ones first')}}</a>
                </div>
                <div class="filter_item">
                    <a href="{{route('search',['t'=>$text,'filter'=>'old'])}}">{{__('At first old')}}</a>
                </div>
            </div>
        </div>
        <button id="button_submit" type="submit" hidden></button>
        </form>
    </div>


    <div class="excursion">
        <div class="container">
            <div class="row publication">
                
                
                
                @foreach ($data as $d)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        
                        <div class="excursion_img">
                            <a href="
                            @php
                                switch($d->type)
                                {
                                    case 'node':
                                    echo route('node',['id'=>$d->data_id,'slug'=>str_slug($d->name)]);
                                    break;

                                    case 'excursion':
                                    echo route('excursion',['id'=>$d->data_id,'slug'=>str_slug($d->name)]);
                                    break;

                                    case 'event':
                                    echo route('event',['id'=>$d->data_id,'slug'=>str_slug($d->name)]);
                                    break;

                                    case 'text':
                                    echo route('show_text',['id'=>$d->data_id,'slug'=>str_slug($d->name)]);
                                    break;

                                    default:
                                    echo '/';
                                    
                                }
                                @endphp
                                ">
                            <img src="{{$d->image!==null?'/upload/images/'.$d->image->src:'/img/no-images.png'}}" alt="">
                        </a>
                            
                        </div>
                        
                        <div class="excursion_guide">
                            <div class="excursion_rate">
                                <span>{{$system_var_lang=="ua"?$d->name:$d->name_eng}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>


    @include('pagination')
</section>

@include('layouts._footer')
@endsection