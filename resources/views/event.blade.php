@extends('layouts.app')

@section('title',$system_var_lang=="ua"?$data->name:$data->name_eng)

@section('content')
@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="/" class="main">{{__('Main page')}} </a>/<a href="{{route('event_list')}}" class="haschild mr-3">{{__('Catalog of events')}}</a>/<a href="{{route('event',$data->id)}}" class="haschild">{{$system_var_lang=="ua"?$data->name:$data->name_eng}}</a>
            </div>
        </div>
    </div>
</div>
<section class="section section_hotel">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    {{$system_var_lang=="ua"?$data->name:$data->name_eng}}
                </div>
            </div>
        </div>
    </div>

    @if (count($photos)>0)
    <div class="hotel">
        <div class="container">
            <div class="row">

                
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="owl-carousel hotel_slide">
                        @foreach ($photos as $ph)
                            <div class="item">
                                <a class="js-smartPhoto" href="/upload/images/{{$ph->src}}" data-group="2">
                                    <img src="/upload/images/{{$ph->src}}" alt="" >
                                </a>

                                @include('layouts._fav',['type'=>'photo','data_id'=>0,'photo_id'=>$ph->id])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
        @endif

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-8">


                <div class="infoBlock">
                    <div class="infoBlock_wrapp">

                        @if ($data->addr)
                            <div class="infoBlock_item">
                                <div class="infoBlock_img">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.84737 0.553711C5.61307 0.553711 2.9817 3.18507 2.9817 6.41938C2.9817 10.4846 8.85314 17.4287 8.85314 17.4287C8.85314 17.4287 14.713 10.2846 14.713 6.41938C14.713 3.18507 12.0818 0.553711 8.84737 0.553711ZM10.6172 8.13685C10.1292 8.62475 9.48832 8.86875 8.84737 8.86875C8.20653 8.86875 7.56548 8.62475 7.07768 8.13685C6.10179 7.16106 6.10179 5.57326 7.07768 4.59737C7.55023 4.12461 8.17882 3.86423 8.84737 3.86423C9.51593 3.86423 10.1444 4.12471 10.6172 4.59737C11.5931 5.57326 11.5931 7.16106 10.6172 8.13685Z" fill="#502B1F"/>
                                    </svg>
                                </div>
                                <div class="infoBlock_wrapper">
                                    <p>{{__('Address')}}</p>
                                    <span>{{$system_var_lang=="ua"?$data->addr:$data->addr_eng}}</span>
                                </div>
                            </div>
                        @endif

                        
                            <div class="infoBlock_item">
                                <div class="infoBlock_img">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="18" height="18" viewBox="0 0 423.761 423.761" style="enable-background:new 0 0 423.761 423.761;"
                                    xml:space="preserve" fill="none">
                                    
                                        <path d="M342.012,237.535H213.264c12.956-9.977,26.38-19.162,37.94-28.02c2.867-2.19,5.657-4.442,8.411-6.712h82.396
                                        c11.703,0,21.185-9.483,21.185-21.184s-9.481-21.184-21.185-21.184H298.78c5.894-9.026,10.923-18.708,14.623-29.392
                                        c9.528-27.547,4.776-59.267-11.159-83.374C262.057-13.134,179.492-8.639,121.998,21.565c-24.192,12.711-2.778,49.281,21.385,36.587
                                        c28.538-14.992,60.222-21.76,91.431-11.499c21.35,7.019,39.082,26.4,40.932,49.184c2.087,25.827-13.554,47.487-31.599,64.61H81.749
                                        c-11.7,0-21.185,9.484-21.185,21.184c0,11.701,9.484,21.184,21.185,21.184h107.966c-9.859,7.282-19.544,14.78-28.611,23.1
                                        c-3.969,3.652-7.693,7.548-11.195,11.632h-68.16c-11.7,0-21.185,9.481-21.185,21.185c0,11.697,9.484,21.185,21.185,21.185h43.447
                                        c-13.767,38.236-9.431,81.645,21.55,113.604c42.853,44.213,116.362,33.372,166.114,9.132c24.564-11.969,3.073-48.498-21.386-36.588
                                        c-38.515,18.773-109.106,28.839-127.392-22.721c-8.79-24.789-4.176-45.482,7.19-63.422h170.738
                                        c11.703,0,21.185-9.487,21.185-21.185C363.196,247.034,353.715,237.535,342.012,237.535z" fill="#502B1F"/>
                                    </svg>
                                </div>
                                <div class="infoBlock_wrapper">
                                    <p>{{__('Price')}}</p>
                                    <span>{!!$data->price==0?__('Free'):$data->price.'&#8372;'!!}</span>
                                </div>
                            </div>
                        

                        @if ($data->start)
                            <div class="infoBlock_item">
                                <div class="infoBlock_img">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 0C3.36433 0 0 3.36433 0 7.5C0 11.6357 3.36433 15 7.5 15C11.6357 15 15 11.6357 15 7.5C15 3.36433 11.6357 0 7.5 0ZM11.0669 11.3793C10.945 11.5012 10.785 11.5625 10.625 11.5625C10.465 11.5625 10.3049 11.5012 10.1832 11.3793L7.05814 8.25439C6.94061 8.13755 6.87504 7.97871 6.87504 7.81254V3.75C6.87504 3.40439 7.15496 3.12504 7.5 3.12504C7.84504 3.12504 8.12496 3.40439 8.12496 3.75V7.55379L11.0669 10.4956C11.3112 10.7401 11.3112 11.135 11.0669 11.3793Z" fill="#502B1F"/>
                                    </svg>
                                </div>
                                <div class="infoBlock_wrapper">
                                    <p>{{__('The event starts at')}}</p>

                                    <span>{{date('H:i (d.m.Y)',strtotime($data->start))}}</span>
                                </div>
                            </div>
                        @endif

                        @if ($data->length)
                            <div class="infoBlock_item">
                                <div class="infoBlock_img">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 0C3.36433 0 0 3.36433 0 7.5C0 11.6357 3.36433 15 7.5 15C11.6357 15 15 11.6357 15 7.5C15 3.36433 11.6357 0 7.5 0ZM11.0669 11.3793C10.945 11.5012 10.785 11.5625 10.625 11.5625C10.465 11.5625 10.3049 11.5012 10.1832 11.3793L7.05814 8.25439C6.94061 8.13755 6.87504 7.97871 6.87504 7.81254V3.75C6.87504 3.40439 7.15496 3.12504 7.5 3.12504C7.84504 3.12504 8.12496 3.40439 8.12496 3.75V7.55379L11.0669 10.4956C11.3112 10.7401 11.3112 11.135 11.0669 11.3793Z" fill="#502B1F"/>
                                    </svg>
                                </div>
                                <div class="infoBlock_wrapper">
                                    <p>{{__('Duration')}}</p>
                                    <span>
                                    @include('layouts._time',['count'=>$data->length])
                                    </span>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>


                <div class="plain-text">
                    {!! $system_var_lang=="ua"?$data->text:$data->text_eng !!}
                </div>

                @include('_comments')
            </div>
            <div class="col-xl-4">
                @include('_leave_comment',['id'=>$data->id,'type'=>'event'])
            </div>
        </div>
    </div>

</section>

@include('layouts._footer')
@endsection