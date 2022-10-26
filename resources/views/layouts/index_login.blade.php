<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('temp_login')}}/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url({{asset('temp_login')}}/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			
                    <div>
                      @yield('content')
                    </div>
                @if (Route::has('register'))
                <p class="text-center">Not a member? <a href="{{ route('register') }}">{{ __('Register') }}</a></p>
                @endif
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('temp_login')}}/js/jquery.min.js"></script>
  <script src="{{asset('temp_login')}}/js/popper.js"></script>
  <script src="{{asset('temp_login')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('temp_login')}}/js/main.js"></script>

	</body>
</html>

