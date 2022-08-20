<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Sukamanah Islamic Village</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="Sukamanah Islamic Village" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/img/Logo SIV.png">
	<!-- Bootstrap Css -->
	<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> </head>

<body class="authentication-bg">
<div class="account-pages my-5 pt-sm-5">
		<div class="container">
			<div class="row" style="margin-top: -5rem; margin-bottom: -2rem;">
				<div class="col-lg-12">
					<div class="text-center">
						<a href="user/index.php" class="mb-5 d-block auth-logo"> <img src="assets/img/Logo SIV.png" alt="" height="100" class="logo logo-dark">  </a>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card">
						<div class="card-body p-4">
							<div class="text-center mt-2">
								<h5 class="text-primary">Register</h5>
								<p class="text-muted">Daftar untuk menikmati produk kami.</p>
							</div>
							<div class="p-2 mt-4">
								<form action="user-input.php" method="POST">
								<div class="mb-3">
										<label class="form-label" for="username">Nama Lengkap</label>
										<input type="text" class="form-control" id="username" name="nama" placeholder="Masukan Nama Lengkap"> </div>
                                    <div class="mb-3">
										<label class="form-label" for="useremail">Email</label>
										<input type="email" class="form-control" id="useremail" name="email" placeholder="Masukan Email"> </div>
                                    <div class="mb-3">
										<label class="form-label" for="username">No Hp</label>
										<input type="text" class="form-control" id="Hp" name="nohp" placeholder="Masukan No Hp"> </div>
									<div class="mb-3">
										<label class="form-label" for="userpassword">Password</label>
										<input type="password" class="form-control" name="password" id="userpassword" placeholder="Masukan password"> </div>
									<div class="mt-3 text-end">
										<button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
									</div>
									<div class="mt-4 text-center">
										<p class="text-muted mb-0">Already have an account ? <a href="login.php" class="fw-medium text-primary"> Login</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="mt-5 text-center" >
						<p>©
							<script>
							document.write(new Date().getFullYear())
							</script> SIV. dibuat oleh Daffa Ahmad Raffi</p>
					</div>
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- JAVASCRIPT -->
	<script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="assets/libs/simplebar/simplebar.min.js"></script>
	<script src="assets/libs/node-waves/waves.min.js"></script>
	<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- App js -->
	<script src="assets/js/app.js"></script>
</body>

</html>