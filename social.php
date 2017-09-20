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
   			<a href="news.php" style="color: #fff"><div class="item-cool"><?php echo $lang['noticias']; ?></div></a>
   			<div class="item-cool bread-color"><?php echo $lang['social']; ?></div>
   		</div>
   	</div>
   </section>
   
   
    <section class="pad-top-50 section-wrap process">
    	<script src="//www.powr.io/powr.js" external-type=html></script> <div class="powr-instagram-feed" id="10101619"></div>
    </section>
<!-- <section class="section-wrap promo-section vinedo" id="valleys"> -->
      
 <script type="text/javascript">
window.onload=function () {
    $('#menu_cool-stuff').addClass('page-active');
	$('#menu_social').addClass('page-active');
};
</script>

<?php include 'footer.php';?>