@extends('layouts.app')

@if ($system_var_lang=="ua")
    @isset($data->caption)
        @section('title', $data->caption)
    @endisset
@else
    @isset($data->caption_eng)
        @section('title', $data->caption_eng)
    @endisset
@endif

@section('content')
@include('layouts._header')


@if ($system_var_lang=="ua")
    @isset($data->text)
    {!! $data->text !!}
    @endisset
@else
    @isset($data->text_eng)
    {!! $data->text_eng !!}
    @endisset
@endif

@include('layouts._footer')
@endsection