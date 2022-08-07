<?php include('../required/server.php') ?>
<?php include("../config.php"); ?>
<?php if ($lang_en) { ?>  
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
						<img src="<?php print($logologgedin); ?>">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register <small class="text-muted">for <?php print($seo_title); ?></small></h4>
                               <form method="POST" action="">
							   <?php include('../required/errors.php'); ?>	
							   <div class="form-group">
									<label for="username">Name</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus value="<?php echo $username; ?>">
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required value="<?php echo $email; ?>">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password1" required data-eye>
								</div>

								 <div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block" name="reg_user" value="Register">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="login.php">Login</a>
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
	<script src="../js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/my-login.js"></script>
</body>
</html>
                            <?php } ?> 
<?php if ($lang_ro) { ?>  
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
       <a href="../home.php"><button type="button" name="back-to-page" class="btn btn-primary"><i class="ion-chevron-left"></i>  Înapoi la pagina de start</button></a>
      </div>
    </div>
  </div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?php print($logologgedin); ?>">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Inregistreaza-te <small class="text-muted">pentru <?php print($seo_title); ?></small></h4>
                               <form method="POST" action="">
							   <?php include('../required/errors.php'); ?>	
							   <div class="form-group">
									<label for="username">Nume</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus value="<?php echo $username; ?>">
								</div>

								<div class="form-group">
									<label for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="email" required value="<?php echo $email; ?>">
								</div>

								<div class="form-group">
									<label for="password">Parola</label>
									<input id="password" type="password" class="form-control" name="password1" required data-eye>
								</div>

								 <div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> Sunt de acord cu Termenii și condițiile
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block" name="reg_user" value="Register">
										Inregistreaza-te
									</button>
								</div>
								<div class="margin-top20 text-center">
									Ai deja un cont? <a href="login.php">Autentificare</a>
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
	<script src="../js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/my-login.js"></script>
</body>
</html>
                            <?php } ?> 
