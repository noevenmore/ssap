@extends('layouts.app')

@section('title',__('Excursions catalog'))

@section('content')
@include('layouts._header')

@include('_excursion_banner')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="/" class="main">{{__('Main page')}}</a>/<a href="{{route('excursion_list')}}" class="haschild">{{__('Excursions')}}</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_excursion section_page section_catalogPublication">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{__('Excursions')}}
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <form action="{{route('excursion_list')}}">
        <div class="filter">
            <div class="filter_input w-100">
                <div class="filter_input-input w-100">
                    <input type="text" name="text" class="w-100" placeholder="{{__('Search by description')}}" value="{{$text}}">
                </div>
                <div class="filter_input-search">
                    <button id="button_submit" type="submit" hidden></button>
                    <img onclick="$('#button_submit').click();" src="img/search.svg" alt="">
                </div>
            </div>
        </div>
        <div class="subfilter">
            <div class="filter_items">
                <div class="filter_item">
                    <a href="{{route('excursion_list',['sort_by'=>'popularity'])}}">{{__('Popular')}}</a>
                </div>
                <div class="filter_item">
                    <a href="{{route('excursion_list',['sort_by'=>'price'])}}">{{__('sort by price')}}</a>
                </div>
                <div class="filter_item">
                    <a href="{{route('excursion_list',['sort_by'=>'rate'])}}">{{__('sort by reviews')}}</a>
                </div>
            </div>
            <div class="filter_color">
                <div class="filter_color-item">
                    <div class="filter_color-block">
                        <label for="terms-agree">
                            <input type="radio" name="type" id="terms-agree" value="" checked="checked">
                            <span class="checkmark"></span>
                            {{__('All')}}	
                        </label>
                    </div>
                </div>
                <div class="filter_color-item">
                    <div class="filter_color-block">
                        <label for="terms-agree2">
                            <input type="radio" name="type" id="terms-agree2"  value="individual" {{isset($type)&&$type=='individual'?'checked="checked"':''}}>
                            <span class="checkmark"></span>
                            {{__('Individual')}}
                        </label>
                    </div>
                </div>
                <div class="filter_color-item">
                    <div class="filter_color-block">
                        <label for="terms-agree3">
                            <input type="radio" name="type" id="terms-agree3"  value="group" {{isset($type)&&$type=='group'?'checked="checked"':''}}>
                            <span class="checkmark"></span>
                            {{__('Group')}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>







    <div class="excursion">
        <div class="container">
            <div class="row publication">
                
                
                
                @foreach ($data as $d)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        
                        <div class="excursion_img">
                            <a href="{{route('excursion',$d->id)}}">
                            <img src="{{$d->image!==null?'/upload/images/'.$d->image->src:'/img/no-images.png'}}" alt="">
                        </a>
                            
                            <div class="excursion_price">
                                <span>{{$d->price}}&#8372</span> {{__('per person')}}
                            </div>
                            <div class="excursion_group">
                                {{$d->type=="group"?__('group'):__('individual')}}
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>


                                @php
                                $count = $d->length;
                                $days = floor($count / 60 / 24);
                                $count = $count - ($days * 60 * 24);
                                $hours = floor($count / 60);
                                $count = $count - ($hours * 60);
                
                                $result = '';
                
                                switch ($days) {
                                    case 0:
                                    break;
                
                                    case 1:
                                    $result.=$days.__('m.1d');
                                    break;
                
                                    case 2:
                                    case 3:
                                    case 4:
                                    $result.=$days.__('m.2d');
                                    break;
                
                                    
                                    default:
                                    $result.=$days.__('m.md');
                                    break;
                                }
                
                                switch ($hours) {
                                    case 0:
                                    break;
                
                                    case 1:
                                    if ($result!='') $result.=' ';
                                    $result.=$hours.__('m.1h');
                                    break;
                
                                    case 2:
                                    case 3:
                                    case 4:
                                    if ($result!='') $result.=' ';
                                    $result.=$hours.__('m.2h');
                                    break;
                
                                    
                                    default:
                                    if ($result!='') $result.=' ';
                                    $result.=$hours.__('m.mh');
                                    break;
                                }
                
                                switch ($count) {
                                    case 0:
                                    break;
                                    
                                    default:
                                    if ($result!='') $result.=' ';
                                    $result.=$count.__('m.m');
                                    break;
                                }
                
                                @endphp

                                {{$result}}
                            </div>
                        </div>
                        
                        <div class="excursion_guide">
                            <div class="excursion_person">

                            </div>
                            <div class="excursion_rate">
                                <span>??????? {{__('responses')}}</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                {{$system_var_lang=="ua"?$d->name:$d->name_eng}}</a>
                            </div>
                            <div class="publication_date">
                                {{date('d.m.Y',strtotime($d->created_at))}}
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