@php
 switch ($item->image->type) {
    case 'event':
        echo route('event',$item->image->data_id);
    break;
     
    case 'hotel':
        echo route('node',$item->image->data_id);
    break;

    case 'excursion':
        echo route('excursion',$item->image->data_id);
    break;

     default:
     echo '/';
         break;
 }
@endphp