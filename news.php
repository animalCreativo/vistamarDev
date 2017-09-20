<?php include 'header.php';?>
 
  <div class="main-wrapper-onepage main oh">

    <!-- Process -->
    <section class="section-wrap process no-pad" style="background-image: url(img/cool-stuff-header.jpg)">
		<div class="tela head_image">
      <div class="container">

        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center color-white">Cool Stuff</h2>
            <img class="center-block" width="50" height="auto" src="img/line-separator.png" alt="" />
          </div>
        </div>

      </div>
		</div>
    </section> <!-- process -->
    
    <!-- menu cool stuff -->
   <section class="no-pad bgc-mcgray">
   	<div class="container">
   		<div class="menu-cool">
   			<a href="awards.php" style="color: #fff"><div class="item-cool"><?php echo $lang['awards']; ?></div></a>
   			<a href="videos.php" style="color: #fff"><div class="item-cool"><?php echo $lang['videos']; ?></div></a>
   			<div class="item-cool bread-color"><?php echo $lang['noticias']; ?></div>
   			<a href="social.php" style="color: #fff"><div class="item-cool"><?php echo $lang['social']; ?></div></a>
   		</div>
   	</div>
   </section>
   
   
    <section class="section-wrap process pad-top-40">
    	<div class="container news">
			<h3><strong><?php echo $lang['noticias']; ?></strong></h3>
    		<div class="row mar-bot-25">
    			<div class="col-lg-6 col-sm-12"><img class="img-responsive" src="img/Sepia-Reserva-Malbec-2014.png" alt="Noticia 1" /></div>
    			<div class="col-lg-6 news">
    				<h5><?php echo $lang['noticia1Fecha'];?></h5>
    				<h4><?php echo $lang['noticia1Title1'];?></h4>
    				<h3><?php echo $lang['noticia1Title2'];?></h3>
    				<p><?php echo $lang['noticia1Texto'];?></p>
    				<!--a href=""><div class="news-btn">VER NOTICIA</div></a-->
    			</div>
    		</div>
    		<div class="row mar-bot-25">
    			<div class="col-lg-6 col-sm-12"><img class="img-responsive" src="img/Sepia-Reserva-Chardonnay-2015.png" alt="Noticia 2" /></div>
    			<div class="col-lg-6 news">
    				<h5><?php echo $lang['noticia2Fecha'];?></h5>
            <h4><?php echo $lang['noticia2Title1'];?></h4>
            <h3><?php echo $lang['noticia2Title2'];?></h3>
            <p><?php echo $lang['noticia2Texto'];?></p>
    				<!--a href=""><div class="news-btn">VER NOTICIA</div></a-->
    			</div>
    		</div> 
    		<div class="row mar-bot-25">
    			<div class="col-lg-6 col-sm-12"><img class="img-responsive" src="img/Cabernet-Sauvignon_Syrah.png" alt="Noticia 3" /></div>
    			<div class="col-lg-6 news">
    				<h5><?php echo $lang['noticia3Fecha'];?></h5>
            <h4><?php echo $lang['noticia3Title1'];?></h4>
            <h3><?php echo $lang['noticia3Title2'];?></h3>
            <p><?php echo $lang['noticia3Texto'];?></p>
    				<!--a href=""><div class="news-btn">VER NOTICIA</div></a-->
    			</div>
    		</div>
    	</div>
    </section>
<!-- <section class="section-wrap promo-section vinedo" id="valleys"> -->
      
 <script type="text/javascript">
window.onload=function () {
    $('#menu_cool-stuff').addClass('page-active');
	$('#menu_news').addClass('page-active');
};
</script>

<?php include 'footer.php';?>