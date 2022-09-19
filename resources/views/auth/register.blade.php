<!DOCTYPE html>
<html lang="en">

<head>

	<title>Sign up</title>
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
	<link rel="icon" href="{{ asset('backend/dist/assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('backend/dist/assets/css/style.css') }}">
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <img style="width: 70px" src="{{ asset('backend/dist/assets/images/logo.png') }}" alt="" class="img-fluid mb-4">
						<h4 class="f-w-400">Sign Up</h4>
						<hr>
						<form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror " id="Username" placeholder="Full Name">
                                <div class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder="Email address">
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password">
                                <div class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input name="password_confirmation" type="password" class="form-control" id="Password" placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                        </form>
						<hr>
						<p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
