<?php include 'header.php';?>
 
  <div class="main-wrapper-onepage main oh">

    <!-- Revolution Slider -->
    <section class="dimension-ow"> 
      <div class="rev_slider_wrapper dimension-ow">
        <div class="rev_slider" id="slider1" data-version="5.0">
          <ul>
            <!-- SLIDE 2 -->
            <li data-transition="zoomout"
              data-easein="default" 
              data-easeout="default"
              data-slotamount="1"
              data-masterspeed="1200"
              data-delay="8000"
              data-title="Creative &amp; Emotional"
              >
              <!-- MAIN IMAGE -->
              <img src="img/ow-specialties.jpg"
                alt="Specialties"
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >


              <!-- LAYER NR. 2 -->
              
              <div class="col-lg-8 col-xs-12 fondo-blanco ow-description">
              	<div class="wineclass-show">
              		<img class="img-wineclass" src="img/ow-specialties.png" alt="specialties">
              	</div>
              	<div class="info-ow">
              		<h1 style="text-transform: uppercase;"><?php echo $lang['homeSpecial1']; ?></h1>
              		<h3 style="text-transform: uppercase;"><?php echo $lang['homeValle']; ?></h3>
              		<h5><?php echo $lang['especialidadesCentralTitle']; ?></h5>
					        <p><?php echo $lang['especialidadesCentralTexto']; ?></p>
            	    <h3><?php echo $lang['homeVariedades']; ?></h3>
             	    <div class="contain-1">
				             <div class="vari"><a href="special_br.php"><h4>BRUT ROSE</h4></a></div>
             	       <div class="dot3">·</div>
             	       <div class="vari"><a href="special_lh.php"><h4>LATE HARVEST</h4></a></div>
              	  </div>
              	</div>
              </div>
 
            </li> <!-- end slide 2 -->

          </ul>

        </div>
      </div>
    </section>
    
    <!-- DIVISOR TITULOS -->
    <section class="black-b">
    	<div class="content-title-img">
		<div class="title-img">
      <?php 
          if ($_SESSION['lang']=='en') {  ?>
      <img src="img/title_wine_en.png" alt="<?php echo $lang['homeSpecial1']; ?>">
      <?php
      }
      else if ($_SESSION['lang']=='es') { ?>
      <img src="img/title_wine.png" alt="<?php echo $lang['homeSpecial1']; ?>">
      <?php
      }
      ?>
    </div>
		</div>
    </section>
    <!-- DIVISOR TITULOS -->
    
    <section id="wines" class="no-pad-top">
    	<div class="altura-x">
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w1.jpg" height="433" alt="Brisa">
						<div class="work-overlay">        
						<a href="brisa.php" style="color: #FFFFFF">	<div class="other-wines">
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeBrisa1']; ?></h3>
                  <span><?php echo $lang['homeBrisa2']; ?></span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w2.jpg" height="433" alt="Gran Reserva">
						<div class="work-overlay">        
						<a href="gran-reserva.php" style="color: #FFFFFF">	<div class="other-wines">
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeReserva1']; ?></h3>
                  <span><?php echo $lang['homeReserva2']; ?></span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w3.jpg" height="433" alt="Corte de Campo">
						<div class="work-overlay">        
							<a href="corte-de-campo.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeCorte1']; ?></h3>
                  <span><?php echo $lang['homeCorte2']; ?></span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w4.jpg" height="433" alt="Sepia Reserva">
						<div class="work-overlay">        
							<a href="sepia-reserva.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeReservaSepia1']; ?></h3>
                  <span><?php echo $lang['homeReservaSepia2']; ?></span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </section>
    
</div>

<script type="text/javascript">
window.onload=function () {
    $('#menu_our-wines').addClass('page-active');
	$('#menu_specialties').addClass('page-active');
};
</script>

<?php include 'footer.php';?>