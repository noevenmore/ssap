@extends('layouts.app')

@section('title',$system_var_lang=="ua"?$text->name:$text->name_eng)

@section('content')
@include('layouts._header')

<div class="container my-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="plain-text">
                {!!

                    $system_var_lang=="ua"?$text->text:$text->text_eng
                    
                    !!}
            </div>
        </div>
        <!--
        <div class="col-xl-4">
            @include('_leave_comment',['id'=>$text->id,'type'=>'text'])
        </div>
        -->
    </div>
</div>

@include('layouts._footer')
@endsection