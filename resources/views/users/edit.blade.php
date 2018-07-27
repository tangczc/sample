@extends('layouts.default')
@section('title','用户修改')

@section('content')
<div class ="col-md-offset-3 col-md-5">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>修改个人资料</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')
            <div class="gravatar_edit">
                <a href="http://gravatar.com/emails" target = '_blank'>
                    <img src = "{{ $user -> gravatar('200')}}" alt = "{{ $user -> name }}" class = "gravatar" />
                </a>
            </div>
            <form action = "{{ route('users.update',$user -> id)}}" method = "POST" >
                {{ method_field("PUT") }}
                {{ csrf_field() }}     
                <div class = "form-group">
                    <label for = "name">用户名:</label>
                    <input type = "text" name = "name" class = "form-control" value =  "{{ $user -> name }}" />
                </div>
                
                <div class="form-group"> 
                <div class="form-group">
                    <label for = "email">邮 箱:</label>
                    <input type="text" name="email" class = "form-control" value =  "{{ $user -> email }}" disabled />
                </div> 
                <div class="form-group">
                    <label for = "password">密 码:</label>
                    <input type="password" name = "password" class = "form-control" value =  "{{ old('password') }}" />
                </div> 
                <div class="form-group">
                    <label for = "password_confirmation">确认密码:</label>
                    <input type="password" name = "password_confirmation" class = "form-control" value = "{{ old('password_confirmation') }}" />
                </div> 
                <button type="submit" class = "btn btn-primary">修改</button>
            </form>
        </div>
    </div>
</div>
@stop