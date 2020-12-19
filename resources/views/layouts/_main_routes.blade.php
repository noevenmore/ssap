<section class="section section_cart">
<div class="owl-carousel cart_slider container owl-loaded owl-drag">

    <div class="owl-stage-outer">
        <div class="owl-stage">
            @foreach ($excursions as $d)
            <div class="owl-item" style="width: 700px; margin-right: 30px;">
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-md-12">
                                <div class="section_title">
                                    {{__('Routes')}}
                                </div>
                                <div class="subtitle">
                                    {{ $system_var_lang=="ua"?$d->name:$d->name_eng}}
                                </div>
                                <div class="wrapp">
                                    <div class="time">
                                        <img src="/img/clock.svg" alt=""><span>
                                            @include('layouts._time',['count'=>$d->length])
                                            
                                        </span>
                                    </div>
                                    <div class="stret">
                                        <img src="/img/str.svg" alt=""><span>{{$system_var_lang=="ua"?$d->addr:$d->addr_eng}}</span>
                                    </div>
                                </div>
                                <div class="wrapper_btn">
                                    <a href="{{route('excursion',$d->id)}}" class="btn">{{__('SHOW')}}</a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <img class="ride_map" src="{{$d->image_map!==null?'/upload/images/'.$d->image_map->src:'/img/no-images.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev disabled">
            <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 16L1.5 8.5L9 1" stroke="#D6B247" stroke-width="2"></path>
            </svg>
        </button>
        
        <button type="button" role="presentation" class="owl-next">
            <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L8.5 8.5L1 16" stroke="#D6B247" stroke-width="2"></path>
            </svg>
        </button>
    </div>

    <div class="owl-dots">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>

</div>
</section>