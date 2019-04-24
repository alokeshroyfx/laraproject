@extends('layouts.app')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">General elements</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General elements</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!-- Basic example -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Update Account</h3></div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInput">Business Name</label>
                                    <input type="text" class="form-control" id="exampleIn" placeholder="Enter Business Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Address</label>
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Input your Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">City</label>
                                    <input type="password" class="form-control" id="exampleInput" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Post Code</label>
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Country</label>
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Country">
                                </div>
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->              
                <!-- Horizontal form -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Change password</h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/update-pass') }}">
                                @csrf
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="oldpass" class="col-sm-3 control-label">Old Password</label>
                                    <div class="col-sm-9">
                                      <input type="password" class="form-control" id="oldpass" name="oldpass"  placeholder="Input Old Password" value="" required autofocus>
                                      @if ($errors->has('oldpass'))
                                          <span class="help-block">
                                            <strong>{{ $errors->first('oldpass') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-sm-3 control-label">New Password</label>
                                    <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" placeholder="New Password" name="password" required>
                                     @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                     @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password_confirmation" class="col-sm-3 control-label">Re Password</label>
                                    <div class="col-sm-9">
                                      <input type="password" class="form-control" id="password_confirmation" placeholder="Retype Password" name="password_confirmation" required>
                                      @if ($errors->has('password_confirmation'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                      </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                      <button type="submit" class="btn btn-info waves-effect waves-light">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->                  
    </div> <!-- content -->
    <footer class="footer text-right">
        2015 © Moltran.
    </footer>
</div>
@endsection