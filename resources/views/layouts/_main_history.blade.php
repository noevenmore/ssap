<section class="section section_history">
    <div class="history">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="history_info">
                        <div class="history_subtitle">
                            <span>{{$system_var_lang=="ua"?$main_page_block->caption:$main_page_block->caption_eng}}</span>
                            <div class="history_info-img">
                                <img src="img/Frame1.png" alt="">
                            </div>
                        </div>
                        <div class="section_title">
                            {{$system_var_lang=="ua"?$main_page_block->text:$main_page_block->text_eng}}
                        </div>
                        <div class="history_btn">
                            <a class="btn" href="{{$system_var_main_page_link}}">{{__('SHOW')}}</a>
                        </div>
                        <div class="history_link">
                            @isset($mpl0)
                            <a href="
                            {{
                                route('node_list',[
                'type'=>$mpl0->category_link,
                'filter'=>$mpl0->value])
                            }}
                            
                            ">{{$system_var_lang=="ua"?$mpl0->name:$mpl0->name_eng}}</a>
                            @endisset



                            @isset($mpl1)
                            <a href="
                            {{
                                route('node_list',[
                'type'=>$mpl1->category_link,
                'filter'=>$mpl1->value])
                            }}
                            
                            ">{{$system_var_lang=="ua"?$mpl1->name:$mpl1->name_eng}}</a>
                            @endisset

                            @isset($mpl2)
                            <a href="
                            {{
                                route('node_list',[
                'type'=>$mpl2->category_link,
                'filter'=>$mpl2->value])
                            }}
                            
                            ">{{$system_var_lang=="ua"?$mpl2->name:$mpl2->name_eng}}</a>
                            @endisset

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="history_img" style="max-height: 100%;">
            <img src="{{$main_page_photo?'/upload/images/'.$main_page_photo->src:'/img/no-images.png'}}" style="width: auto;" alt="">
        </div>
    </div>
</section>