@extends('theme::blank')

@section('content')
    <div class="d-flex flex-column flex">
        <div class="row no-gutters h-100">
            <div class="col-md-6 bg-primary" style="">
                <div class="p-3 p-md-5 d-flex flex-column h-100">
                    <h4 class="mb-3 text-white">{{config('app.name')}}</h4>
                    <div class="text-fade">{{config('app.name')}}</div>
                    <div class="d-flex flex align-items-center justify-content-center"></div>
                    <div class="d-flex text-sm text-fade"><a href="index.html" class="text-white">About</a> <span class="flex"></span> <a href="#" class="text-white mx-1">Terms</a> <a href="#" class="text-white mx-1">Policy</a></div>
                </div>
            </div>
            <div class="col-md-6" id="content-body">
                <div class="p-3 p-md-5">
                    <h5>Welcome back</h5>
                    <p><small class="text-muted">Login to manage your account</small></p>
                    <form class="" role="form" action="{{route('post_admin_login_form')}}" method="post">
                        @if(session('status'))
                        <div class="alert alert-danger">{{ session('status') }}</div>
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control is-invalid" placeholder="Enter email" id="email" name="email">
                            <ul class="list-unstyled text-sm mt-1 text-muted filled" id="parsley-id-30">
                                <li class="parsley-required">This value is required.</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label>Password</label><input type="password" class="form-control " placeholder="Password" id="password" name="password">
                            <div class="my-3 text-right"><a href="forgot-password.html" class="text-muted" data-pjax-state="">Forgot password?</a></div>
                        </div>
                        <div class="checkbox mb-3"><label class="ui-check"><input type="checkbox"><i></i> Remember me</label></div>
                        <button type="submit" class="btn btn-primary mb-4">Sign in</button>
                        <div>Do not have an account? <a href="signup.html" class="text-primary" data-pjax-state="">Sign up</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="form">--}}
        {{--<form class="login-form" action="{{route('post_admin_login_form')}}" method="post">--}}
            {{--{{ csrf_field() }}--}}
            {{--@if(session('status'))--}}
                {{--<div class="text-red">{{ session('status') }}</div>--}}
            {{--@endif--}}
            {{--<input type="text"  placeholder="email" id="email" name="email"/>--}}
            {{--<span class="text-red">{{ $errors->first('email') }}</span>--}}
            {{--<input type="password" placeholder="password" id="password" name="password"/>--}}
            {{--<span class="text-red">{{ $errors->first('password') }}</span>--}}

            {{--<button>login</button>--}}
        {{--</form>--}}
    {{--</div>--}}
@endsection
