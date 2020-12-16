<section class="section section_tourist">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title">
                    {{__('Tourist attractions')}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tourist">
            <div class="owl-carousel tourist_slider owl-loaded owl-drag">
            <div class="owl-stage-outer">
                
                <div class="owl-stage">
                    @include('layouts._main_attraction_one',['num'=>1,'title'=>__('Museums'),'subtitle'=>'','link'=>route('node_list',['type'=>'museum'])])
                    @include('layouts._main_attraction_one',['num'=>2,'title'=>__('Galleries'),'subtitle'=>'','link'=>route('node_list',['type'=>'gallery'])])
                    @include('layouts._main_attraction_one',['num'=>3,'title'=>__('Parks'),'subtitle'=>'','link'=>route('node_list',['type'=>'park'])])
                    @include('layouts._main_attraction_one',['num'=>4,'title'=>__('Historical shafts'),'subtitle'=>'','link'=>route('node_list',['type'=>'history_val'])])
                    @include('layouts._main_attraction_one',['num'=>5,'title'=>__('Masterpieces of architecture'),'subtitle'=>'','link'=>route('node_list',['type'=>'architecture'])])
                    @include('layouts._main_attraction_one',['num'=>6,'title'=>__('Monuments'),'subtitle'=>'','link'=>route('node_list',['type'=>'monument'])])
                    @include('layouts._main_attraction_one',['num'=>7,'title'=>__('Temples'),'subtitle'=>'','link'=>route('node_list',['type'=>'temple'])])
                    @include('layouts._main_attraction_one',['num'=>8,'title'=>__('Tourist routes'),'subtitle'=>'','link'=>route('excursion_list')])
                    @include('layouts._main_attraction_one',['num'=>9,'title'=>__('Entertainment'),'subtitle'=>'','link'=>route('node_list',['type'=>'entertainment'])])
                </div>
            </div>

            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 16L1.5 8.5L9 1" stroke="#D6B247" stroke-width="2"></path></svg></button><button type="button" role="presentation" class="owl-next"><svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L8.5 8.5L1 16" stroke="#D6B247" stroke-width="2"></path></svg></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
    </div>
    </div>
</section>