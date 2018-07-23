@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class = "jumbotron">
        <h1>欢迎进入唐朝早晨的小黑屋</h1>
        <p>点击下方注册</p>
        <p class = "lead">
            <a class = "btn btn-lg btn-success" href = "{{ route('signup')}}">现在注册</a>
        </p>
    </div>
@stop
