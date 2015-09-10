<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="YChi Lu" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Brio Insurance</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLE SHEET -->
    <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" />-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- CUSTOM STYLES -->
	
    <link href="assets/css/style.css" rel="stylesheet" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
	<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
				<?php 
					if (!preg_match('/index.php/',$_SERVER['PHP_SELF']))
				{
					echo '<img src="assets/img/vivaldi-logo.png" alt="" class=" img-responsive" />';
				}	
				else
				{
						            echo       ' <img src="assets/img/vivaldi-logo.png" alt="" class="visible-xs img-responsive" />
					<img src="assets/img/logo_flag.png" alt="" class="hidden-xs img-responsive" />';
				}
					?>
                
				
                </a>
				
            </div>

            <div class="navbar-collapse collapse  scroll-me">

					<ul class="nav navbar-nav">
				     <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li class="dropdown">
              <a href="about.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about.php#aboutbrio">Meet Brio</a></li>
                <li><a href="about.php#career">Careers</a></li>
                <li><a href="about.php#community">Giving Back</a></li>
 <li><a href="about.php#contact">Contact</a></li>
              </ul>
            </li>

				

					
                    <li><a href="product.php">PRODUCTS</a></li>
                    <li><a href="news2.php">NEWS</a></li>
                    <li><a href="#quote">REQUEST A QUOTE</a></li>
					    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR CODE END -->