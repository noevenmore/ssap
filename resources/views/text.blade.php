@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header')

<div class="my-5 mx-3">
    {!!

        $system_var_lang=="ua"?$text->text:$text->text_eng
        
        !!}
</div>


@include('layouts._footer')
@endsection