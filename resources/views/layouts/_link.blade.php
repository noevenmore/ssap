@php
    switch($obj->link_type)
    {
        case 'category':
        if ($obj->filter->value)
        {
            echo route('node_list',[
                'type'=>$obj->filter->category_link,
                'value'=>$obj->filter->value]);
        } else
        {
            echo route('node_list',['type'=>$obj->filter->category_link]);
        }
        break;

        case 'text':
        echo route('show_text',$obj->text_id);
        break;

        case 'gallery':
        echo route('photogallery');
        break;

        case 'gallery_spring':
        echo route('photogallery',['tag'=>'spring']);
        break;

        case 'gallery_summer':
        echo route('photogallery',['tag'=>'summer']);
        break;

        case 'gallery_winter':
        echo route('photogallery',['tag'=>'winter']);
        break;

        case 'gallery_autumn':
        echo route('photogallery',['tag'=>'autumn']);
        break;

        default:
        echo '/';
    }
@endphp