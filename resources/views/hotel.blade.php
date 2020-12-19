@extends('layouts.app')

@section('title',$system_var_lang=="ua"?$data->name:$data->name_eng)

@section('content')
@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="/" class="main">{{__('Main page')}} </a>/<a href="{{route('node_list',['type'=>$data->type])}}" class="haschild mr-3">{{__('Catalog')}}</a>/<a href="{{route('node',$data->id)}}" class="haschild">{{$system_var_lang=="ua"?$data->name:$data->name_eng}}</a>
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
                <div class="col-xl-3 col-lg-3 col-md-3 order-md-1 order-sm-2 order-2">


                    <div class="hotel_itemWrapp">
                        @for ($i = 0; $i < count($photos); $i++)
                            <div class="hotel_previes" {{$i>=3?'hidden':''}}>
                                <a class="js-smartPhoto" href="/upload/images/{{$photos[$i]->src}}" data-group="1">
                                    <img src="/upload/images/{{$photos[$i]->src}}" alt="" >
                                </a>
                            </div>
                        @endfor
                    </div>


                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 order-md-2 order-sm-1 order-1">
                    <div class="owl-carousel hotel_slide">
                        @foreach ($photos as $ph)
                            <div class="item">
                                <a class="js-smartPhoto" href="/upload/images/{{$ph->src}}" data-group="2">
                                    <img src="/upload/images/{{$ph->src}}" alt="" >
                                </a>

                                <a class="like" href="#">
                                    <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.3854 5.04965L15.4681 5.10592C15.4772 5.09247 16.0377 4.27452 16.9204 3.46104C17.8063 2.64453 18.998 1.85003 20.2708 1.85003C22.8604 1.85003 24.9833 4.17564 24.9833 7.0547C24.9833 8.40952 24.5056 9.69614 23.64 10.6778C23.6266 10.693 23.6138 10.7091 23.6021 10.726C23.5693 10.7613 23.5339 10.7934 23.4947 10.8289C23.4888 10.8343 23.4829 10.8397 23.4768 10.8452L23.4768 10.8452L23.4751 10.8468L14.9995 18.9311L7.03056 11.3396C6.99913 11.2851 6.95755 11.2359 6.90828 11.1946L6.90804 11.1944C5.70679 10.1931 5.01665 8.68496 5.01665 7.0547C5.01665 4.1756 7.13957 1.85003 9.72915 1.85003C11.002 1.85003 12.1937 2.64453 13.0796 3.46104C13.9599 4.27232 14.5198 5.08805 14.5319 5.10579M15.3854 5.04965L15.4681 5.10578C15.3608 5.2641 15.1754 5.33678 15 5.33678C14.8246 5.33678 14.6392 5.2641 14.5319 5.10579M15.3854 5.04965C15.2162 5.29915 14.7838 5.29915 14.6146 5.04965M15.3854 5.04965C15.4078 5.01676 17.647 1.75003 20.2708 1.75003C22.9246 1.75003 25.0833 4.1298 25.0833 7.0547C25.0833 8.43299 24.5972 9.74336 23.715 10.744C23.7025 10.7581 23.6909 10.773 23.6806 10.7884L14.6146 5.04965M14.5319 5.10579C14.5319 5.10579 14.5319 5.10579 14.5319 5.10578L14.6146 5.04965M14.5319 5.10579C14.5319 5.10584 14.5319 5.10588 14.5319 5.10592L14.6146 5.04965M6.12906 11.9934L6.12914 11.9935L14.6074 20.0697L14.6075 20.0698C14.7167 20.1735 14.8586 20.225 15 20.225C15.1413 20.225 15.2838 20.1735 15.3931 20.0692L15.3241 19.9969L15.3931 20.0692L24.1523 11.7112L24.1534 11.7101L24.2417 11.6283C24.2418 11.6282 24.242 11.628 24.2422 11.6279C24.3138 11.5633 24.3861 11.4966 24.467 11.4112C24.5039 11.3761 24.5351 11.3367 24.56 11.2939C25.5544 10.1278 26.1 8.62634 26.1 7.0547C26.1 3.59945 23.4922 0.775 20.2708 0.775C19.0212 0.775 17.8866 1.32864 16.9668 2.00381C16.1022 2.63845 15.4199 3.38585 15 3.90048C14.5801 3.38585 13.8978 2.63845 13.0332 2.00381C12.1134 1.32864 10.9788 0.775 9.72915 0.775C6.50786 0.775 3.9 3.59945 3.9 7.0547C3.9 8.93644 4.68052 10.6923 6.04913 11.8973C6.07184 11.9323 6.09869 11.9644 6.12906 11.9934Z" fill="#502B1F" stroke="#502B1F" stroke-width="0.2"/>
                                        <path d="M19.5 4.2959C20.5 4.2959 23 6.68226 22.5 8.59135" stroke="#F5A623"/>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">

                @if ($data->is_show_ex_param)
                <div class="infoBlock">
                    <div class="infoBlock_wrapp">
                        <div class="infoBlock_adres infoBlock_item">
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
                        <div class="infoBlock_telephone infoBlock_item">
                            <div class="infoBlock_img">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                    <path d="M12.7085 10.2738L10.7009 8.2659C10.301 7.86762 9.63879 7.87972 9.22497 8.29368L8.21351 9.30492C8.14961 9.2697 8.08346 9.23291 8.01392 9.19388C7.37519 8.83997 6.50099 8.3549 5.58107 7.4343C4.65842 6.51177 4.1729 5.63622 3.8179 4.99708C3.78044 4.92937 3.74455 4.86409 3.70911 4.80209L4.38795 4.12426L4.72169 3.7901C5.13614 3.37554 5.14757 2.71351 4.74862 2.31407L2.74097 0.305979C2.34202 -0.0928987 1.6795 -0.0807979 1.26505 0.333766L0.699228 0.902838L0.71469 0.918188C0.524962 1.16028 0.36642 1.43949 0.248437 1.74059C0.139679 2.0272 0.0719674 2.3007 0.0410059 2.57476C-0.224091 4.77247 0.780199 6.78101 3.50571 9.50656C7.2732 13.2738 10.3093 12.9892 10.4403 12.9753C10.7255 12.9412 10.9989 12.873 11.2768 12.7651C11.5752 12.6485 11.8543 12.4902 12.0962 12.3009L12.1086 12.3119L12.6818 11.7506C13.0954 11.3361 13.1073 10.6738 12.7085 10.2738Z" fill="#502B1F"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="13" height="13" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="infoBlock_wrapper">
                                <p>{{__('Phones')}}</p>

                                @foreach ($phones as $ph)
                                    <span>{{$ph}}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="infoBlock_work infoBlock_item">
                            <div class="infoBlock_img">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 0C3.36433 0 0 3.36433 0 7.5C0 11.6357 3.36433 15 7.5 15C11.6357 15 15 11.6357 15 7.5C15 3.36433 11.6357 0 7.5 0ZM11.0669 11.3793C10.945 11.5012 10.785 11.5625 10.625 11.5625C10.465 11.5625 10.3049 11.5012 10.1832 11.3793L7.05814 8.25439C6.94061 8.13755 6.87504 7.97871 6.87504 7.81254V3.75C6.87504 3.40439 7.15496 3.12504 7.5 3.12504C7.84504 3.12504 8.12496 3.40439 8.12496 3.75V7.55379L11.0669 10.4956C11.3112 10.7401 11.3112 11.135 11.0669 11.3793Z" fill="#502B1F"/>
                                </svg>
                            </div>
                            <div class="infoBlock_wrapper">
                                <p>{{__('Working time')}}</p>

                                @foreach ($work_times as $wt)
                                    <span>{{$wt}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="infoBlock_link">
                        <a href="{{$data->blink}}">{{__('Link on booking.com')}}</a>
                    </div>
                </div>
                @endif


                <div class="plain-text">
                    {!! $system_var_lang=="ua"?$data->text:$data->text_eng !!}
                </div>
            </div>
            <div class="col-xl-4">
                @include('_leave_comment',['id'=>$data->id,'type'=>'node'])
            </div>
        </div>
    </div>

</section>

@include('layouts._footer')
@endsection