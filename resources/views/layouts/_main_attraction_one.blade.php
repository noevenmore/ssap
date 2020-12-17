<div class="owl-item" style="width: auto; margin-right: 35px;">
    <a href="{{route('node_list',['type'=>$data->link])}}" class="tourist_item">
        <div class="tourist-img">
            @if (count($data->images)>0)
                <img src="/upload/images/{{$data->images[0]->src}}" alt="" style="opacity: 1;">
            @else
                <img src="/img/no-images.png" alt="NO IMAGE" style="opacity: 1;">
            @endif

            <div class="tourist_info">
                <div class="tourist_count">
                    {{$data->id}}
                </div>
                <div class="tourist_title">
                    {{ $system_var_lang=="ua"? $data->name : $data->name_eng}}
                </div>
                <div class="tourist_subtitle">
                    
                </div>
            </div>
        </div>
    </a>
</div>