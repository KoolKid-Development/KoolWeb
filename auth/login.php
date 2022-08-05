<?php include('../required/server.php') ?>
<?php include("../config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="<?php print($seo_keywords); ?>">
    <meta name="description" content="<?php print($seo_description); ?>">
    <meta property="og:url" content="<?php print($seo_link); ?>">
    <meta property="og:image" content="<?php print($logo); ?>">
    <meta name="twitter:image" content="<?php print($logo); ?>">
    <meta property="og:site_name" content="<?php print($seo_title); ?>">
    <meta name="author" content="<?php print($seo_title); ?>"> 
	<title><?php print($seo_title); ?></title>
	<link rel="icon" type="image/x-icon" href="<?php print($favicon); ?>">
    <link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/my-login.css">
	<?php if ($enable_ga) { ?>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php print($ga_tracking_id); ?>', 'auto');
        ga('send', 'pageview');

        </script>
    <?php } ?>
</head>

<body class="my-login-page"><br /><br />
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-4">
       <a href="../home.php"><button type="button" name="back-to-page" class="btn btn-primary"><i class="ion-chevron-left"></i>  Back to Homepage</button></a>
      </div>
    </div>
  </div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img class="bigger-logo" src="<?php print($logo); ?>">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login <small class="text-muted">for KoolLauncher</small></h4>
							<form method="POST" action="">
							<?php include('../required/errors.php'); ?>
								<div class="form-group">
									<label for="username">Username</label>

									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group no-margin">
									<button type="submit" name="login_user" class="btn btn-primary btn-block" value="Login">Login</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="register.php">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; KoolKidDev 2022
					</div>
				</div>
			</div>
		</div>
	</section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
