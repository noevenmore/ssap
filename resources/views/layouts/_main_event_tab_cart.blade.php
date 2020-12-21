<a href="{{route('event',['id'=>$item->id,'slug'=>$item->slug])}}">

<div class="allevent_cart">
    <div class="allevent_img">
        @if (count($item->images)>0)
            <img src="/upload/images/{{$item->images[0]->src}}" alt="">
        @else
            <img src="/img/no-images.png" alt="NO IMAGE">
        @endif
    </div>
    <div class="allevent_description">
        <div class="allevent_title">
            {{$system_var_lang=='ua'?$item->name:$item->name_eng}}
        </div>
        <div class="allevent_wrap">
            <div class="allevent_prise">
                {!!$item->price==0?__('Free'):$item->price.'&#8372;'!!}
            </div>
            <div class="allevent_days text-center" {{$item->length==0?'hidden':''}}>
                @include('layouts._time',['count'=>$item->length])
            </div>
        </div>
    </div>
</div>
</a>