@extends('layouts.login')
@section('content')

	<div class="container-wrapper h-100">
        <div class="row h-100">
            <div class="col-md-8 bg-white">
                <div class="mb-4">
                    <a href="main-page.html" class="back-abs">
                        <i class="ico ico-back"></i>
                    </a>
                </div>
                <div class="auth-container-inner">
                    <div class="mb-5">
                        <img src="/images/logo.svg" alt="">                        
                    </div>
                    <form method="post" action="{{ url('user/signin')}}">
                    	<ul class="nav" id="myTab" role="tablist">
		                    <li class="nav-item " role="presentation">
		                        <a class="nav-link active" href="/register">Register</a>
		                    </li>
		                    <li class="nav-item " role="presentation">
		                        <a class="nav-link" href="login">Sign in</a>
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
                            @if(Session::has('message'))
								{!! Session::get('message') !!}
							@endif
							<ul class="parsley-error-list">
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
                        </div>
                        <div class="form-group">                  
                            <label class="font-2 label-2">{{ Lang::get('core.email') }}</label>
                            <input type="text" name="email" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <label class="font-2 label-2">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Last name">
                        </div>

				        @if( (int) \Session::get('login.attempts') >= 5)
							<div class="form-group has-feedback  animated fadeInRight delayp1">
								<label>Security Question</label>
								<select name="question" class="form-control">
									@if(isset($questions))
									{{ $questions }}
										@foreach($questions as $que)
											<option value="{{ $que->id }}">{{ $que->question }}</option>
										}
										@endforeach
									@endif	
								</select>					
								<i class="icon-lock form-control-feedback"></i>
							</div>

							<div class="form-group has-feedback  animated fadeInRight delayp1">
								<label>Answer</label>
								<input type="text" name="answer" placeholder="Answer" class="form-control" required="true" />				
								<i class="icon-lock form-control-feedback"></i>
							</div>
						@endif
						<div class="form-group has-feedback  animated fadeInRight delayp1">
							<label> Remember Me ?	</label>
							<input type="checkbox" name="remember" value="1" />				
							<i class="icon-lock form-control-feedback"></i>
						</div>
						@if(CNF_RECAPTCHA =='true') 
						<div class="form-group has-feedback  animated fadeInLeft delayp1">
							<label class="text-left"> Are u human ? </label>	
							<br />
							{!! captcha_img() !!} <br /><br />
							<input type="text" name="captcha" placeholder="Type Security Code" class="form-control" required/>				
							<div class="clr"></div>
						</div>	
					 	@endif	

						@if(CNF_MULTILANG =='1') 
						<div class="form-group has-feedback  animated fadeInLeft delayp1">
							<label class="text-left"> Language Preference </label>	
							<select class="form-control" name="language">
								@foreach(SiteHelpers::langOption() as $lang)
								<option value="{{ $lang['folder'] }}" @if(Session::get('lang') ==$lang['folder']) selected @endif>  {{  $lang['name'] }}</option>
								@endforeach
							</select>								
							<div class="clr"></div>
						</div>	
					 	@endif	
                        <div class="text-right mt-5">
                            <a href="#" class="mr-4">Forgot Password?</a>	
                            <button type="submit" class="btn btn-outline-dark px-5">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
@endsection