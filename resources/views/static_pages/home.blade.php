@extends('layouts.default')
@section('title','主页')
@section('content')
@if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h3>微博列表</h3>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class = "jumbotron">
        <h1>欢迎进入唐朝早晨的小黑屋</h1>
        <p>点击下方注册</p>
        <p class = "lead">
            <a class = "btn btn-lg btn-success" href = "{{ route('users.signup')}}">现在注册</a>
        </p>
    </div>
    @endif
@stop
