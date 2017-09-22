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
   			<div class="item-cool bread-color"><?php echo $lang['videos']; ?></div>
   			<a href="news.php" style="color: #fff"><div class="item-cool"><?php echo $lang['noticias']; ?></div></a>
   			<a href="social.php" style="color: #fff"><div class="item-cool"><?php echo $lang['social']; ?></div></a>
   		</div>
   	</div>
   </section>
   
   
    <section class="pad-top-50 section-wrap process">
    	<div class="container">
			<h3><strong><?php echo $lang['videos']; ?></strong></h3>
    		<div class="row mar-bot-25">
    			<div class="col-12 videos text-center">

            <?php 
            if ($_SESSION['lang']=='en') {  ?>
            <div class="col-12">
              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/rKiL2HBe0xg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
              <p><?php echo $lang['videos2Titulo']; ?></p>
            </div>
            <?php
            }
            else if ($_SESSION['lang']=='es') { ?>
            <div class="col-12">
              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/kp9wJ13fw0c?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
              <p><?php echo $lang['videos1Titulo']; ?></p>
            </div>
            
            <div class="col-12">
              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Jb4uN_6YlqQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
              <p><?php echo $lang['videos3Titulo']; ?></p>
            </div>
            <?php
            }
            ?>
    			</div>
    			
    		</div>
    	</div>
    </section>
<!-- <section class="section-wrap promo-section vinedo" id="valleys"> -->
      
 <script type="text/javascript">
window.onload=function () {
    $('#menu_cool-stuff').addClass('page-active');
	$('#menu_videos').addClass('page-active');
};
</script>

<?php include 'footer.php';?>