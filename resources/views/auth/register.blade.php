@extends('layouts.app')

@section('content')
<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img"> 
            <div class="bg-overlay"></div>
           <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
        </div> 
        <div class="panel-body">
        <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input class="form-control input-lg" id="name" type="text" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>           
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input class="form-control input-lg" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input class="form-control input-lg" id="password" type="password" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control input-lg" id="password-confirm" type="password" placeholder="Password" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox" checked="">
                        <label for="checkbox-signup">
                            I accept <a href="#">Terms and Conditions</a>
                        </label>
                    </div>
                    
                </div>
            </div>
            
            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button>
                </div>
            </div>

            <div class="form-group m-t-30">
                <div class="col-sm-12 text-center">
                    <a href="login.html">Already have account?</a>
                </div>
            </div>
        </form> 
        </div>                                 
        
    </div>
</div>
@endsection
