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
              <img src="img/ow-greserva.png"
                alt="Specialties"
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >


              <!-- LAYER NR. 2 -->
              <div class="col-lg-8 fondo-blanco ow-description">
              	<div class="wineclass-show">
              		<img class="img-wineclass" src="img/ow-greserva.png" alt="sepia - reserva">
              	</div>
              	<div class="info-ow">
              		<h1 style="text-transform: uppercase;"><?php echo $lang['homeReserva1']; ?></h1>
              		<h3 style="text-transform: uppercase;"><?php echo $lang['granReservaValle1']; ?></h3>
              		<h5><?php echo $lang['granReservaValle2']; ?></h5>
					<p><?php echo $lang['granReservaTexto1']; ?>
					<br><br>
				  <?php echo $lang['granReservaTexto2']; ?>
					</p>
            	
             	<h3style="text-transform: uppercase;"><?php echo $lang['homeVariedades1']; ?></h3>
             	<div class="contain-1">
             	<div class="vari"><a href="gr_rb.php"><h4><?php echo $lang['redBlend']; ?></h4></a></div> 	
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
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w5.jpg" height="433" alt="Specialties">
						<div class="work-overlay">        
							<a href="especialidades.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> <?php echo $lang['homeSpecial1']; ?></h3>
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
	$('#menu_gran-reserva').addClass('page-active');
};
</script>

<?php include 'footer.php';?>