@if(isset($comments) && count($comments)>0)
    <div class="comment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="comment_title">
                        {{__('Reviews')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($comments as $c)
        <div class="container comment">
            <div class="row">
                <div class="col-12">
                    <div class="comment_item">
                        <div class="comment_img">
                            <img src="/img/admin.png" alt="">
                        </div>
                        <div class="comment_wrapp">
                            <div class="comment_name">
                                <div class="name">{{$c->name}}</div>
                                <div class="date">{{date('d.m.Y',strtotime($c->created_at))}}</div>
                            </div>
                            <div class="comment_text">{{$c->text}}</div>
                            
                            <!--
                            <div class="comment_send">
                                Ответить
                                <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0L10.2179 0.668178L13.1912 3.64145H0V4.5864H13.1912L10.2179 7.55964L10.8861 8.22782L15 4.11389L10.8861 0Z" fill="#502B1F"/>
                                </svg>
                            </div>
                        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @include('pagination',['data'=>$comments])
@endif
<!--
<div class="container comment comment--admin">
    <div class="row">
        <div class="col-12">
            <div class="comment_item">
                <div class="comment_img">
                    <img src="/img/admin.png" alt="">
                </div>
                <div class="comment_wrapp">
                    <div class="comment_name">
                        <div class="name">Администратор</div>
                        <div class="date">12.11.2020</div>
                    </div>
                    <div class="comment_text">С другой стороны укрепление и развитие структуры играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. </div>
                    <div class="comment_text comment_text--mobile">С другой стороны укрепление и развитие структуры играет важную роль в формировании ... <a href="#" class="comment_text--more">Подробнее</a></div>
                    <div class="comment_send">
                        Ответить
                        <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8861 0L10.2179 0.668178L13.1912 3.64145H0V4.5864H13.1912L10.2179 7.55964L10.8861 8.22782L15 4.11389L10.8861 0Z" fill="#502B1F"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->