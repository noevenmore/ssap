@extends('layouts.app')

@section('title',__('Main page'))

@section('content')
@include('layouts._header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div id="excursion_order_form_title" class="calendar_title mt-0 mt-5">
                {{__('Reset Password')}}
            </div>
            <form method="POST" action="{{ route('password.email') }}" class="formMain mb-5">
                @csrf
            
                <input id="email" type="email" name="email" class="formMain_input" placeholder="{{__('Your E-mail')}}" required>
                @error('email')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ __($message) }}
                </span>
                @enderror
            
                <button class="formMain_button">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
</div>

@include('layouts._footer')
@endsection