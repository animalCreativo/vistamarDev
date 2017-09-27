<?php
include('languages/lang.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php echo $lang['title']; ?> </title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/slider_valley.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/flexslider.min.css" />
  <link rel="stylesheet" href="fonts/sl-arrow/styles.css" />

  <!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
 <link rel="icon" href="favicon/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 

	 <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
        <!-- responsive tables -->
       <!--  <link href="stacktable.css" rel="stylesheet" /> -->
        
        <!-- jquery transform SELECT -->
        <!-- <link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" /> -->
        <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
        <!-- <script type="text/javascript" src="js/jquery.jqtransform.min.js"></script> -->
     <!--   <script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'jqtransformplugin/img/'});
		});
	</script> -->
        
<script src="js/jquery.min.js"></script>        
<!-- <script src="js/jquery.flexslider-min.js"></script> -->
<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider'
        });
    });
</script>

</head>

<body data-spy="scroll" data-offset="10" data-target=".navbar-fixed-top">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
    <?php echo $lang['loading']; ?>
    </div>
  </div>

  <!-- Navigation -->
  <header class="nav-type-2" id="home">
  
  <nav class="navbar navbar-fixed-top">
      <div class="navigation">
        <div class="container relative full-width">
 

          <div class="row">

            <div class="navbar-header">
              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap local-scroll">
                  <a href="home.php">
                    <img class="logo big-logo" src="img/vistamar2.png" alt="vistamar">
                  </a>
                </div>
              </div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- end navbar-header -->

            <div class="col-md-6 nav-wrap">
              <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav local-scroll">

                  <li class="dropdown">
                    <a id="menu_our-wines" href="home.php#wines" class="dropdown-toggle js-btn" data-toggle="dropdown">  <?php echo $lang['headerNuestrosVinos']; ?> </a>
                    <ul class="dropdown-menu" style="text-transform: uppercase;">
                     <li><a id="menu_specialties" href="especialidades.php"><?php echo $lang['homeSpecial1']; ?></a></li>
                      <li><a id="menu_gran-reserva" href="gran-reserva.php"><?php echo $lang['homeReserva1']; ?></a></li>
                      <li><a id="menu_corte-de-campo" href="corte-de-campo.php"><?php echo $lang['homeCorte1']; ?></a></li>
                      <li><a id="menu_sepia-reserva" href="sepia-reserva.php"><?php echo $lang['homeReservaSepia1']; ?></a></li>
                      <li><a id="menu_brisa" href="brisa.php"><?php echo $lang['homeBrisa1']; ?></a></li>
                    </ul>
                  </li>
                  <li>
                    <a id="menu_valleys" href="home.php#valleys"><?php echo $lang['homeValle']; ?></a>
                  </li>
                  <li class="dropdown">
                    <a id="menu_cool-stuff" href="home.php#cool" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['coolStuff']; ?></a>
                    
                    <ul class="dropdown-menu">
                      <li><a id="menu_awards" href="awards.php"><?php echo $lang['awards']; ?></a></li>
                      <li><a id="menu_videos" href="videos.php"><?php echo $lang['videos']; ?></a></li>
                      <li><a id="menu_news" href="news.php"><?php echo $lang['noticias']; ?></a></li>
                      <li><a id="menu_social" href="social.php"><?php echo $lang['social']; ?></a></li>
                    </ul>
                  </li>
                  <li>
                    <a id="menu_sustentabilidad" href="sustentabilidad.php"><?php echo $lang['sustentabilidad']; ?></a>
                  </li>     
                  <li>
                    <a id="menu_contacto" href="home.php#contact"><?php echo $lang['contacto']; ?></a>
                  </li>
                  <li class="mobile-adventure">
				   <a class="adventure" href="http://www.morandeadventure.cl/" target="_blank"><?php echo $lang['aventura']; ?></a>
                  </li>


                </ul> <!-- end menu -->
              </div> <!-- end collapse -->
            </div> <!-- end col -->
            
            <div class="menu-socials hidden-sm hidden-xs">
              <ul>
               <li>
				   <a class="adventure" href="http://www.morandeadventure.cl/" target="_blank"><?php echo $lang['aventura']; ?></a> &nbsp;<span style="color: #1488A3;">|</span>
                  </li>
                  <li>
					  <a href="http://www.cavamorande.cl/store/"><img src="img/carro.png" width="auto" height="20" alt=""/></a> &nbsp;<span style="color: #1488A3;">|</span>
                  </li>
                <li>
                  <a href="?lang=en"><img src="img/flag_eng.png" width="20" height="20" alt=""/></a>
                </li>
                <li>
                  <a href="?lang=es"><img src="img/flag_spa.png" width="20" height="20" alt=""/></a>
                </li>
              </ul>
            </div>

          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>
 