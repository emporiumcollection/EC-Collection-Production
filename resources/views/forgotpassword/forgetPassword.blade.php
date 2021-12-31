@extends('layouts.login')
  
@section('content')
<div class="container-wrapper h-100">
    <div class="row h-100">
        <div class="col-md-8 bg-white">
            <div class="mb-4">
                <a href="/" class="back-abs">
                    <i class="ico ico-back"></i>
                </a>
            </div>
            <div class="auth-container-inner">
                <div class="mb-5">
                    <img src="/images/logo.svg" alt="">                        
                </div>
                @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form action="{{ route('forget.password.post') }}" method="POST">
                    @csrf
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" href="/register">Sign up</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link" href="login">Sign in</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link" href="/forget-password">Forgot Password</a>
                        </li>
                    </ul>
                    <div class="mt-5 mb-3">                                              
                        <h3 class="mt-4 font-2">Welcome</h3>
                        @if(isset($massage))
                        <div class="alert alert-danger alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ $massage }}</strong>
                          </div>
                          @endif
                        @if(session()->has('message'))
                            <?php echo  htmlspecialchars_decode(session()->get('message')); ?>
                        @endif
                        <ul class="parsley-error-list">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-group">                  
                        <label for="email_address" class="font-2 label-2">E-Mail Address</label>
                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="text-right mt-5">	
                        <button type="submit" class="btn btn-outline-dark px-5"> Send Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Send Password Reset Link
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main> --}}
@endsection