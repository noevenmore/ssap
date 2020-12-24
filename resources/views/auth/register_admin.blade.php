@extends('layouts.app')

@section('title',__('Main page'))

@section('content')
@include('layouts._header')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div id="excursion_order_form_title" class="calendar_title mt-0 mt-5">
                {{__('Register')}}
            </div>
            <form method="POST" action="{{ route('register') }}" class="formMain mb-5">
                @csrf
            
                <input id="name" type="name" name="name" class="formMain_input" placeholder="{{__('Your name')}}" required>
                @error('name')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <input id="email" type="email" name="email" class="formMain_input" placeholder="{{__('Your E-mail')}}" required>
                @error('email')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ $message }}
                </span>
                @enderror
                
                <input id="password" type="password" name="password" class="formMain_input" placeholder="{{__('Your password')}}" required autocomplete="new-password">
                @error('password')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <input id="password-confirm" type="password" name="password_confirmation" class="formMain_input" placeholder="{{__('Confirm password')}}" required autocomplete="new-password">
                @error('password')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ $message }}
                </span>
                @enderror
            
                <input id="secret_key" type="secret_key" name="secret_key" class="formMain_input" placeholder="{{__('Secret key')}}" required>
                @error('secret_key')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <button class="formMain_button">
                    {{__('Register')}}
                </button>
            </form>
        </div>
    </div>
</div>

@include('layouts._footer')
@endsection
