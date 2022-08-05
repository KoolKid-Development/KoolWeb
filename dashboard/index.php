<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../auth/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:../auth/login.php");
  }
?>
<?php include("../config.php"); ?>
<!DOCTYPE html>
<html lang="en">
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
		<link rel="icon" type="image/x-icon" href="<?php print($faviconloggedin); ?>">
		<link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="../css/wtm.css">
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
	<body>
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#dashboard">
			  	<img src="<?php print($logologgedin); ?>" alt="Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link smooth-link" href="home.php">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="<?php print($forum_link); ?>">Forum</a>
			      </li>
				  <li class="nav-item">
			        <a class="nav-link smooth-link" href="<?php print($vote_link); ?>">Vote</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="<?php print($store_link); ?>">Store</a>
			      </li>
				  <li class="nav-item">
			        <a class="nav-link smooth-link" href="launcher.php">Launcher</a>
			      </li>
						<li class="nav-item">
							<a class="nav-link smooth-link" href="<?php print($discord_invite); ?>">Discord</a>
						</li>
			    </ul>
			    <form class="form-inline">
				    <a href="index.php?logout='1'" class="btn smooth-link align-middle btn-primary"><?php echo $_SESSION['username'];?></a>
			    </form>
			  </div>
		  </div>
		</nav>
		<section class="hero bg-overlay" id="dashboard" data-bg="<?php print($backroundloggedin); ?>">
			<div class="text">
			<h1><span class="bold"><?php print($seo_title); ?></h1><br />
		    <h3><span class="bold"><?php print($seo_description); ?></h3><br />
				<div class="cta">
				</div>
			</div>
		</section>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.easeScroll.js"></script>
		<script src="../sweetalert/dist/sweetalert.min.js"></script>
		<script src="../js/wtm.js"></script>
	</body>
</html>
