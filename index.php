<?php include("config.php"); ?>

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
    <link rel="icon" type="image/x-icon" href="<?php print($favicon); ?>">
		<title><?php print($seo_title); ?></title>
    <meta http-equiv="refresh" content="<?php print($preloadertime); ?>;url=home.php" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/wtm.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
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
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div id="content">
    </div>
  </body>


  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

</html>
