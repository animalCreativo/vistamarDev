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
              		<h1>SEPIA RESERVA</h1>
              		<h3>VALLEY</h3>
              		<h5>Central and Limarí</h5>
					<p>The grapes for our reserve range are sourced form Single Estate vineyards within our properties from Casablanca Costa (Belen) and Cachapoal Andes (La Moralina).<br><br>The Reserve wines are aged for 8-10 months in wood, and deliver an amazing quality for their value. </p>
            	
             	<h3>VARIETIES</h3>
             	<div class="contain-1">
				<div class="vari"><a href="sepia_cs.php"><h4>CABERNET SAUVIGNON</h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="sepia_ca.php"><h4>CARMENÈRE</h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="sepia_ma.php"><h4>MALBEC</h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="sepia_me.php"><h4>MERLOT</h4></a></div>
             	</div>
             	<div class="contain-1">
				<div class="vari"><a href="sepia_ch.php"><h4>CHARDONNAY</h4></a></div>
            	<div class="dot3">·</div>
            	<div class="vari"><a href="sepia_pn.php"><h4>PINOT NOIR</h4></a></div>
            	<div class="dot3">·</div>
            	<div class="vari"><a href="sepia_sb.php"><h4>SAUVIGNON BLANC</h4></a></div>
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
		<div class="title-img"><img src="img/title_wine.png" alt="our wines"></div>
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
								<h3 style="color: #FFFFFF"> Brisa</h3>
                  <span>Brisa means ‘breeze’ and it is our homage to the gentle winds that chill-out our vineyards, both in the Andean and the coastal areas.</span>
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
								<h3 style="color: #FFFFFF"> Gran Reserva</h3>
                  <span>This wine represent all our potential and experience. <br>It is a terroir-wine, grown on specific plots of our vineyards in Maipo Andes.</span>
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
								<h3 style="color: #FFFFFF"> Corte de Campo</h3>
                  <span>The Corte de Campo range consists of two blends that represent the greatest expression of our constant efforts to achieve unique wines. <br>Red Blend comes from Cachapoal Andes while White Blend comes from Casablanca Costa.</span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w5.jpg" height="433" alt="Specialties">
						<div class="work-overlay">        
							<a href="specialties.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> Specialties</h3>
                  <span>Our aim of being different and innovative led us to develop these incredible sparkling wines Brut and Brut Rosé and our delicate, aromatic and fruity Late Harvest Moscatel.</span>
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