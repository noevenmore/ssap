@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header')

<div class="container my-5">
    <div class="row">
        <div class="col-xl-8">
            <div class="plain-text">
                {!!

                    $system_var_lang=="ua"?$text->text:$text->text_eng
                    
                    !!}
            </div>
        </div>
        <div class="col-xl-4">
            @include('_leave_comment')
        </div>
    </div>
</div>

@include('layouts._footer')
@endsection