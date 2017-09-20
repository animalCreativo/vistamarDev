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
   			<div class="item-cool bread-color"><?php echo $lang['awards']; ?></div>
   			<a href="videos.php" style="color: #fff"><div class="item-cool"><?php echo $lang['videos']; ?></div></a>
			<a href="news.php" style="color: #fff"><div class="item-cool"><?php echo $lang['noticias']; ?></div></a>
			<a href="social.php" style="color: #fff"><div class="item-cool"><?php echo $lang['social']; ?></div></a>
   		</div>
   	</div>
   </section>
   
   
    <section class="section-wrap process pad-top-40 pad-bot-700">
    	<div class="container">
			<h3><strong>AWARDS</strong></h3>
    		<div class="row mar-bot-25">
    			
    			<div class="col-lg-3 col-sm-12">
    				<form name="change">
<select name="options" ONCHANGE="document.getElementById('awards-frame').src = this.options[this.selectedIndex].value">
<option value="awards/range.html" target="awards">RANGE</option>
<option value="awards/range1.html" target="awards">Gran Reserva</option>
<option value="awards/range2.html" target="awards">Corte de Campo</option>
<option value="awards/range3.html" target="awards">Sepia Reserva</option>
<option value="awards/range4.html" target="awards">Brisa</option>
<option value="awards/range5.html" target="awards">Late Harvest</option>
</select>
					</form>
    			</div>
    			<div class="col-lg-3 col-sm-12">
    				<form name="change">
<select name="options" ONCHANGE="document.getElementById('awards-frame').src = this.options[this.selectedIndex].value">
<option value="awards/varieties.html" target="awards">VARIETIES</option>
<option value="awards/varieties1.html" target="awards">Andes - Cab. Sauv /Carmenère/ Petite Sirah /Petit Verdot</option>
<option value="awards/varieties2.html" target="awards">Cabernet Sauvignon</option>
<option value="awards/varieties3.html" target="awards">Cabernet Sauvignon / Syrah</option>
<option value="awards/varieties4.html" target="awards">Carmenère</option>
<option value="awards/varieties5.html" target="awards">Chardonnay</option>
<option value="awards/varieties6.html" target="awards">Coastal - Chardonnay / Viognier</option>
<option value="awards/varieties7.html" target="awards">Malbec</option>
<option value="awards/varieties8.html" target="awards">Merlot</option>
<option value="awards/varieties9.html" target="awards">Moscatel</option>
<option value="awards/varieties10.html" target="awards">Moscato</option>
<option value="awards/varieties11.html" target="awards">Pinot Noir</option>
<option value="awards/varieties12.html" target="awards">Sauvignon Blanc</option>
<option value="awards/varieties13.html" target="awards">Syrah</option>
</select>
					</form>
    			</div>
    			<div class="col-lg-3 col-sm-12">
    				<form name="change">
<select name="options" ONCHANGE="document.getElementById('awards-frame').src = this.options[this.selectedIndex].value">
<option value="awards/vintage.html" target="awards">VINTAGE</option>
<option value="awards/vintage10.html" target="awards">2010</option>
<option value="awards/vintage11.html" target="awards">2011</option>
<option value="awards/vintage12.html" target="awards">2012</option>
<option value="awards/vintage13.html" target="awards">2013</option>
<option value="awards/vintage14.html" target="awards">2014</option>
<option value="awards/vintage15.html" target="awards">2015</option>
<option value="awards/vintage16.html" target="awards">2016</option>
</select>
					</form>
    			</div>
    			
    		</div>
    		<!-- END NAV AWARDS -->
    		
    		<div class="col-lg-12">
    			<iframe src="awards/todos.html" id="awards-frame" name="awards" width="100%" height="1000" marginwidth="0" marginheight="0" scrolling="yes" frameborder="0" style="margin-bottom: 40px;"></iframe>
    		</div>
    		
    	</div>
    </section>
<!-- <section class="section-wrap promo-section vinedo" id="valleys"> -->
     
      
 <script type="text/javascript">
window.onload=function () {
    $('#menu_cool-stuff').addClass('page-active');
	$('#menu_awards').addClass('page-active');
};
</script>

<?php include 'footer.php';?>