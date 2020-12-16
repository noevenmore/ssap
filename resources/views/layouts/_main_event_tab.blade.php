<div class="tab_item">
    <div class="owl-carousel allevent owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1650px;">
                @for ($i = 0; $i < ceil(count($data)/4); $i++)
                    <div class="owl-item" style="width: 520px; margin-right: 30px;">
                        <div class="item">
                            @if (count($data)>$i*4)
                                @include('layouts._main_event_tab_cart',['item'=>$data[$i*4]])
                            @endif

                            @if (count($data)>($i*4)+1)
                                @include('layouts._main_event_tab_cart',['item'=>$data[$i*4+1]])
                            @endif

                            @if (count($data)>($i*4)+2)
                                @include('layouts._main_event_tab_cart',['item'=>$data[$i*4+2]])
                            @endif

                            @if (count($data)>($i*4)+3)
                                @include('layouts._main_event_tab_cart',['item'=>$data[$i*4+3]])
                            @endif
                        </div>
                    </div>
                @endfor
                
            </div>
        </div>

        <!-- NAVIGATION -->
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev">
                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 16L1.5 8.5L9 1" stroke="#D6B247" stroke-width="2"></path>
                </svg>
            </button>
            
            <button type="button" role="presentation" class="owl-next disabled">
                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L8.5 8.5L1 16" stroke="#D6B247" stroke-width="2"></path>
                </svg>
            </button>
        </div>
        
        <div class="owl-dots">
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot active"><span></span></button>
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
</div>