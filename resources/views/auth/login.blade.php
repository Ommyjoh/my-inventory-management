<!DOCTYPE html>
<html lang="en">

<head>

	<title>Log in</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('backend/dist/assets/images/favicon.ico')}}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('backend/dist/assets/css/style.css')}}">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
                        <img style="width: 80px" src="{{ asset ('backend/dist/assets/images/logo.png') }}" alt="" class="img-fluid mb-4">
						<form action="{{ route('login') }}" method="POST">
							@csrf
							<h4 class="mb-3 f-w-400">Sign In</h4>
							<div class="text-danger">
								@error('email')
									{{ $message }}
								@enderror
							</div>
							<hr>
							<div class="form-group mb-3">
								<input name="email" type="text" class="form-control" id="Email" placeholder="Email address">
							</div>
							<div class="form-group mb-4">
								<input name="password" type="password" class="form-control" id="Password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-block btn-primary mb-4">Sign in</button>
						</form>
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset ('backend/dist/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset ('backend/dist/assets/js/plugins/bootstrap.min.js') }}"></script>

<script src="{{ asset ('backend/dist/assets/js/pcoded.min.js') }}"></script>



</body>

</html>
