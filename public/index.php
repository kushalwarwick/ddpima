<?php require_once 'app/view/header.php'; ?>

<body>
	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="app/controller/authenticate" method="POST">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="<?php echo BASE_URL; ?>assets/images/logo.png" class="h-80px" alt="">
									</div>
									<h5 class="mb-0">Login to your university account</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>

								<div class="mb-3">
									<label class="form-label">Username</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="email" name="username" class="form-control" placeholder="University Email" required="required">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" name="password" class="form-control" placeholder="Password" required="required">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>
								
								<div class="mb-3">
									<?php
										session_start();

										// Check if 'login' parameter is set in the query string
										if (isset($_GET['login'])) {
											// Check if 'notify' session variable is not set
											if (!isset($_SESSION['notify'])) {
												$_SESSION['notify'] = TRUE;
												echo "<p class='text-danger'>Please login to access this area</p>";
											}
										}

										// Check if 'success' session variable is set
										if (isset($_SESSION['success'])) {
											$msg = $_SESSION['success'];
											echo "<p class='text-success'>$msg</p>";
											unset($_SESSION['success']);
										}

										// Check if 'alert' session variable is set
										if (isset($_SESSION['alert'])) {
											$msg = $_SESSION['alert'];
											echo "<p class='text-danger'>$msg</p>";
											unset($_SESSION['alert']);
										}
									?>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Login</button>
								</div>

								<div class="text-center">
									<a href="">Forgot password?</a>
								</div>
							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2023 <a href="https://warwick.ac.uk/">University of Warwick</a></span>

						<ul class="nav">
							<li class="nav-item">
								<a href="https://warwick.ac.uk/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-lifebuoy"></i>
										<span class="d-none d-md-inline-block ms-2">Support</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>