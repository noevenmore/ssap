@php
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