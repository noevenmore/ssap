<section class="section section_event">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title">
                    {{__('Events')}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="event">
                    <div class="wrapper row">
                        <div class="tabs col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <span class="tab active">{{__('All events')}}
                                <img src="img/angels.png" alt="">
                            </span>
                            <span class="tab">{{__('Festivals')}}
                                <img src="img/angels.png" alt="">
                            </span>
                            <span class="tab">{{__('Exhibitions')}}
                                <img src="img/angels.png" alt="">
                            </span>
                            <span class="tab">{{__('Concerts')}}
                                <img src="img/angels.png" alt="">
                            </span>
                            <span class="tab">{{__('Sport')}}
                                <img src="img/angels.png" alt="">
                            </span>
                            <span class="tab">{{__('Conferences')}}
                                <img src="img/angels.png" alt="">
                            </span>
                            <span class="tab">{{__('Other')}}
                                <img src="img/angels.png" alt="">
                            </span>
                        </div>
                        <div class="tab_content col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                            @include('layouts._main_event_tab',['data'=>$all_events])
                            @include('layouts._main_event_tab',['data'=>$events_festivals])
                            @include('layouts._main_event_tab',['data'=>$events_show])
                            @include('layouts._main_event_tab',['data'=>$events_concert])
                            @include('layouts._main_event_tab',['data'=>$events_sport])
                            @include('layouts._main_event_tab',['data'=>$events_conference])
                            @include('layouts._main_event_tab',['data'=>$events_other])
                            <!--
                            <div class="tab_item" style="display: none;">Содержимое2</div>
                            <div class="tab_item" style="display: none;">Содержимое3</div>
                            <div class="tab_item" style="display: none;">Содержимое4</div>
                            <div class="tab_item" style="display: none;">Содержимое5</div>
                            <div class="tab_item" style="display: none;">Содержимое6</div>
                            <div class="tab_item" style="display: none;">Содержимое7</div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>