@extends('layouts.app')

@section('title',__('Main page'))

@section('content')
@include('layouts._header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div id="excursion_order_form_title" class="calendar_title mt-0 mt-5">
                {{__('Login')}}
            </div>
            <form method="POST" action="{{ route('login') }}" class="formMain mb-5">
                @csrf
            
                <input id="email" type="email" name="email" class="formMain_input" placeholder="{{__('Your E-mail')}}" required>
                @error('email')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ __($message) }}
                </span>
                @enderror
                
                <input id="password" type="password" name="password" class="formMain_input" placeholder="{{__('Your password')}}" required>
                @error('password')
                <span style="color: red;" class="mb-2 mt-0" role="alert">
                    {{ __($message) }}
                </span>
                @enderror
            
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            
                <button class="formMain_button">
                    {{__('Login')}}
                </button>

                @if (Route::has('password.request'))
                <a class="mx-auto mt-2 mb-0 formMain_button btn" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </form>
            
            <a class="mx-auto mb-5 formMain_button btn" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </div>
    </div>
</div>

@include('layouts._footer')
@endsection
