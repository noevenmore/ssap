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
            {{app()->getLocale()=='ua'?$item->name:$item->name_eng}}
        </div>
        <div class="allevent_wrap">
            <div class="allevent_prise">
                {!!$item->price==0?__('Free'):$item->price.'&#8372;'!!}
            </div>
            <div class="allevent_days text-center" {{$item->length==0?'hidden':''}}>
                @php
                $count = $item->length;
                $days = floor($count / 60 / 24);
                $count = $count - ($days * 60 * 24);
                $hours = floor($count / 60);
                $count = $count - ($hours * 60);

                $result = '';

                switch ($days) {
                    case 0:
                    break;

                    case 1:
                    $result.=$days.__('m.1d');
                    break;

                    case 2:
                    case 3:
                    case 4:
                    $result.=$days.__('m.2d');
                    break;

                    
                    default:
                    $result.=$days.__('m.md');
                    break;
                }

                switch ($hours) {
                    case 0:
                    break;

                    case 1:
                    if ($result!='') $result.=' ';
                    $result.=$hours.__('m.1h');
                    break;

                    case 2:
                    case 3:
                    case 4:
                    if ($result!='') $result.=' ';
                    $result.=$hours.__('m.2h');
                    break;

                    
                    default:
                    if ($result!='') $result.=' ';
                    $result.=$hours.__('m.mh');
                    break;
                }

                switch ($count) {
                    case 0:
                    break;
                    
                    default:
                    if ($result!='') $result.=' ';
                    $result.=$count.__('m.m');
                    break;
                }

                @endphp

                {{$result}}
            </div>
        </div>
    </div>
</div>