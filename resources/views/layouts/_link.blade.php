@php
    switch($obj->link_type)
    {
        case 'category':
        if ($obj->filter->value)
        {
            echo route('node_list',[
                'type'=>$obj->filter->category_link,
                'filter'=>$obj->filter->value]);
        } else
        {
            echo route('node_list',['type'=>$obj->filter->category_link]);
        }
        break;

        case 'excursions':
        echo route('excursion_list');
        break;

        case 'excursion_get':
        echo route('excursion_get');
        break;

        case 'text':
        echo route('show_text',['id'=>$obj->text_id,'slug'=>str_slug($obj->name)]);
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