<div class="owl-carousel header_offer owl-loaded owl-drag">
        
    <div class="owl-stage-outer">
        <div class="owl-stage" style="transform: translate3d(-1440px, 0px, 0px); transition: all 0s ease 0s; width: 5040px;">
            
            @php
            $slide_id = 0;   
            @endphp
            @foreach ($main_page_titles as $mpt)
            @if ($mpt->is_show)
                <div class="owl-item " style="width: 720px;">
                    <div class="item">
                        <div class="header_offer-wrapp">
                            <div class="header_offer-subtitle">
                                {{ $system_var_lang=="ua"?$mpt->label0:$mpt->label0_eng }} <div class="line"></div>
                            </div>
                            <div class="header_offer-title">
                                <span class="header_offer-title--gold">{{ $system_var_lang=="ua"?$mpt->label1:$mpt->label1_eng }}</span> 
                                <span>{{ $system_var_lang=="ua"?$mpt->label2:$mpt->label2_eng }}</span>
                            </div>
                            <div class="header_offer-text">
                                {{ $system_var_lang=="ua"?$mpt->text:$mpt->text_eng }}
                            </div>
                        </div>

                        <div class="header_offer-img" hidden>
                            <img class="slide_img_id{{$slide_id}}" src="{{$mpt->image?"/upload/images/".$mpt->image->src:"/img/no-images.png"}}" alt="">
                            @php
                            $slide_id++;   
                            @endphp
                        </div>
                    </div>
                </div>
            @endif
            @endforeach


        </div>
    </div>
        
        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><img src="img/arowD.svg" alt=""></button><button type="button" role="presentation" class="owl-next"><img src="img/arowD.svg" alt=""></button></div>
        <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
    </div>

    <div class="header_counter">
        <div id="counter" class="counter">3 / 22</div>
        <div class="line"></div>
    </div>		