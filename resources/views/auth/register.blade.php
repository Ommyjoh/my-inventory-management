<!DOCTYPE html>
<html lang="en">

<head>

	<title>Flat Able - Premium Admin Template by Phoenixcoded</title>
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
						<div class="form-group mb-2">
							<input type="text" class="form-control" id="Username" placeholder="Full Name">
						</div>
						<div class="form-group mb-2">
							<input type="text" class="form-control" id="Email" placeholder="Email address">
						</div>
						<div class="form-group mb-2">
							<input type="password" class="form-control" id="Password" placeholder="Password">
						</div>
                        <div class="form-group mb-3">
							<input type="password" class="form-control" id="Password" placeholder="Confirm Password">
						</div>
						<button class="btn btn-primary btn-block mb-3">Sign up</button>
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
