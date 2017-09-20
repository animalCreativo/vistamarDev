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
              <img src="img/ow-sepia.png"
                alt="Specialties"
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >


              <!-- LAYER NR. 2 -->
              <div class="col-lg-8 fondo-blanco ow-description">
              	<div class="wineclass-show">
              		<img class="img-wineclass" src="img/ow-sepia.png" alt="sepia - reserva">
              	</div>
              	<div class="info-ow">
              		<h1 style="text-transform: uppercase;"><?php echo $lang['homeReservaSepia1']; ?></h1>
              		<h3 style="text-transform: uppercase;"><?php echo $lang['homeValle']; ?></h3>
              		<h5><?php echo $lang['especialidadesCentralTitle']; ?></h5>
				        	<p><?php echo $lang['granReservaSepiaReserva']; ?></p>
                  <h3 style="text-transform: uppercase;"><?php echo $lang['homeVariedades']; ?></h3>
             	    <div class="contain-1">
				<div class="vari"><a href="sepia_cs.php"><h4><?php echo $lang['cabernetBlend']; ?></h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="sepia_ca.php"><h4><?php echo $lang['carmene']; ?></h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="sepia_ma.php"><h4><?php echo $lang['malbec']; ?></h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="sepia_me.php"><h4><?php echo $lang['merlot']; ?></h4></a></div>
             	</div>
             	<div class="contain-1">
				<div class="vari"><a href="sepia_ch.php"><h4><?php echo $lang['chardonnay']; ?></h4></a></div>
            	<div class="dot3">·</div>
            	<div class="vari"><a href="sepia_pn.php"><h4><?php echo $lang['pinotNoir']; ?></h4></a></div>
            	<div class="dot3">·</div>
            	<div class="vari"><a href="sepia_sb.php"><h4><?php echo $lang['sauvignonBlanc']; ?></h4></a></div>
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
								<h3 style="color: #FFFFFF"><?php echo $lang['homeBrisa1']; ?> </h3>
                  <span><?php echo $lang['homeBrisa2']; ?>  </span>
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
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeReserva1']; ?> </h3>
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
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeCorte1']; ?> </h3>
                  <span><?php echo $lang['homeCorte2']; ?></span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w5.jpg" height="433" alt="Specialties">
						<div class="work-overlay">        
							<a href="especialidades.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeSpecial1']; ?> </h3>
                  <span><?php echo $lang['homeSpecial2']; ?></span>
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
	$('#menu_sepia-reserva').addClass('page-active');
};
</script>

<?php include 'footer.php';?>