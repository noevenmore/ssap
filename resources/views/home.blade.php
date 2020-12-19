@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header')

<div class="container my-5">
    <div class="row">
        Hello, {{Auth::user()->name}}! You are not admin :)

        <br>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">{{__('Logout')}}</button>
        </form>
    </div>
</div>

@include('layouts._footer')
@endsection