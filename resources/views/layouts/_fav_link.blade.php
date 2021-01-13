@php
if (isset($item->image->type))
{
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
} else
{
    switch ($item->type) {
    case 'event':
        echo route('event',$item->data_id);
    break;
     
    case 'hotel':
        echo route('node',$item->data_id);
    break;

    case 'excursion':
        echo route('excursion',$item->data_id);
    break;

     default:
     echo '/';
         break;
 }
}
@endphp