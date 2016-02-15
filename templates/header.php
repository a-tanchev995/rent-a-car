<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
Made by: Aleksandar Tanchev
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php if (isset($title)): ?>
        <title>Auto Europe: <?= htmlspecialchars($title) ?></title>
    <?php else: ?>
        <title>Auto Europe</title>
    <?php endif ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href="../public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="../public/css/camera.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<script type='text/javascript' src='../public/js/jquery.min.js'></script>
<script type='text/javascript' src='../public/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='../public/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='../public/js/camera.min.js'></script>
    <script>
		jQuery(function(){

			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
    </script>
</head>
<body>
<!--start header-->
<div class="h_bg">
<div class="wrap">
<div class="wrapper">
<div class="header">
	<div class="logo">
		 <a href="index.php"><img src="../public/images/logo.png"> </a>
	</div>
	<div class="cssmenu">
	<ul>
	   <li><a href="index.php"><span>Home</span></a></li>
       <li><a href="account.php"><span>User Panel</span></a></li>
       <li><a href="about_company.php"><span>About</span></a></li>
	   <li class="last"><a href="contact.php"><span>Contact</span></a></li>
	 <div class="clear"></div>
	 </ul>
	</div>
	<div class="clear"></div>
</div>
    </div>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
<div class="wrapper">
	<div class="slider">
	<!-- #camera_wrap_1 -->
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="../public/images/thumbs/slider1fiatpanda.jpeg" data-src="../public/images/slider/slider1fiatpanda.jpg">
            </div>
            <div data-thumb="../public/images/thumbs/slider2volkswagenpolo.jpg" data-src="../public/images/slider/slider2volkswagenpolo.jpg">
            </div>
            <div data-thumb="../public/images/thumbs/slider3opelcorsa.jpg" data-src="../public/images/slider/slider3opelcorsa.jpg">
            </div>
            <div data-thumb="../public/images/thumbs/slider4seatleon.jpg" data-src="../public/images/slider/slider4seatleon.jpg">
            </div>
             </div><!-- #camera_wrap_1 -->
         <div class="clear"></div>
	</div>
	<!-- end #camera_wrap_1 -->
	<div class="clear"></div>
	</div>
</div>
</div>
</div>
