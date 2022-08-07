<?php
include("config.php");
?>
<?php if ($lang_en) { ?>
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
		<link rel="icon" type="image/x-icon" href="<?php print($favicon); ?>">
		<link rel="stylesheet" href="./ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="./css/wtm.css">
		
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
			  	<img src="<?php print($logo); ?>" alt="Logo">
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
			      <?php if ($enable_forum) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($forum_link); ?>">Forum</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_vote) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($vote_link); ?>">Vote</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_bans) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($bans_link); ?>">Bans</a>
			      </li>
    <?php } ?> 
				    <?php if ($enable_store) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($store_link); ?>">Store</a>
			      </li>
				  <?php if ($launcher_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="./dashboard/launcher.php">Launcher</a>
			      </li>
    <?php } ?> 
				 
	<?php if ($enable_discord) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($discord_invite); ?>">Discord</a>
			      </li>
    <?php } ?> 
	<?php if ($staffpanel_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($staffpanel_link); ?>">StaffPanel</a>
			      </li>
    <?php } ?> 
	<?php if ($teamspeak_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($teamspeak_link); ?>">TeamSpeak</a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link1_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link1); ?>"><?php print($custom_link1_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link2_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link2); ?>"><?php print($custom_link2_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link3_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link3); ?>"><?php print($custom_link3_name); ?></a>
			      </li>
    <?php } ?> 
			    </ul>
				<?php if ($loginbutton) { ?>
								    <form class="form-inline">
				    <a href="./auth/login.php" class="btn smooth-link align-middle btn-primary">Login</a>
			    </form>
			      </li>
    <?php } ?> 
			  </div>
		  </div>
		</nav>
		<section class="hero bg-overlay" id="dashboard" data-bg="<?php print($backround); ?>">
			<div class="text">
				<h1><span class="bold"><?php print($seo_title); ?></h1><br />
				<h3><span class="bold"><?php print($seo_description); ?></h3><br />
				<div class="cta">
				</div>
			</div>

		</section>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="./js/jquery.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<script src="./js/jquery.easeScroll.js"></script>
		<script src="./sweetalert/dist/sweetalert.min.js"></script>
		<script src="./js/wtm.js"></script>
	</body>
</html>

	<?php } ?> 

<?php if ($lang_ro) { ?>
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
		<link rel="icon" type="image/x-icon" href="<?php print($favicon); ?>">
		<link rel="stylesheet" href="./ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="./css/wtm.css">
		
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
			  	<img src="<?php print($logo); ?>" alt="Logo">
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
			        <a class="nav-link smooth-link" href="home.php">Acasa</a>
			      </li>
			      <?php if ($enable_forum) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($forum_link); ?>">Forum</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_vote) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($vote_link); ?>">Votati-ne</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_store) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($store_link); ?>">Magazin</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_bans) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($bans_link); ?>">Bans</a>
			      </li>
    <?php } ?> 
				  <?php if ($launcher_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="./dashboard/launcher.php">Launcher</a>
			      </li>
    <?php } ?> 
				 
	<?php if ($enable_discord) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($discord_invite); ?>">Discord</a>
			      </li>
    <?php } ?> 
	<?php if ($staffpanel_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($staffpanel_link); ?>">StaffPanel</a>
			      </li>
    <?php } ?> 
	<?php if ($teamspeak_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($teamspeak_link); ?>">TeamSpeak</a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link1_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link1); ?>"><?php print($custom_link1_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link2_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link2); ?>"><?php print($custom_link2_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link3_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link3); ?>"><?php print($custom_link3_name); ?></a>
			      </li>
    <?php } ?> 
			    </ul>
				<?php if ($loginbutton) { ?>
								    <form class="form-inline">
				    <a href="./auth/login.php" class="btn smooth-link align-middle btn-primary">Autentificare</a>
			    </form>
			      </li>
    <?php } ?> 
			  </div>
		  </div>
		</nav>
		<section class="hero bg-overlay" id="dashboard" data-bg="<?php print($backround); ?>">
			<div class="text">
				<h1><span class="bold"><?php print($seo_title); ?></h1><br />
				<h3><span class="bold"><?php print($seo_description); ?></h3><br />
				<div class="cta">
				</div>
			</div>

		</section>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="./js/jquery.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<script src="./js/jquery.easeScroll.js"></script>
		<script src="./sweetalert/dist/sweetalert.min.js"></script>
		<script src="./js/wtm.js"></script>
	</body>
</html>

	<?php } ?> 
