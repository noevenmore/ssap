<section class="section section_banner">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="banner_subtitle">
                        {{__('Excursions')}}
                    </div>
                    <div class="banner_title">
                        {{__('Excursions to Kropyvnytskyi')}}<br>
                        <span>{{__('architectural gem in the heart of Ukraine')}}</span>
                    </div>

                    <div class="banner_tag">
                        @foreach ($filters as $f)
                            <div class="banner_tag-item"><a href="{{route('excursion_list',['filter'=>$f->value])}}">{{$system_var_lang=="ua"?$f->name:$f->name_eng}} ({{count($f->how_much)}})</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>