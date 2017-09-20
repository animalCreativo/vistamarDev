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
              		<h1>GRAN RESERVA</h1>
              		<h3>VALLEY</h3>
              		<h5>Maipo</h5>
					<p>This wine represent all our potential and experience. It is a terroir-wine, grown on specific plots of our vineyards in Maipo Andes.
					<br><br>
					Each of its stages has been carefully and meticulously determined, with the aim of achieving top-level quality with identity, unique personality and a long life in the bottle.
					</p>
            	
             	<h3>VARIETIES</h3>
             	<div class="contain-1">
             	<div class="vari"><a href="gr_rb.php"><h4>RED BLEND</h4></a></div>
             	
              	
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
					<div class="work-img"><img src="img/w4.jpg" height="433" alt="Sepia Reserva">
						<div class="work-overlay">        
							<a href="sepia-reserva.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> Sepia Reserva</h3>
                  <span>The grapes for our reserve range are sourced form Single Estate vineyards within our properties from Casablanca Costa (Belen) and Cachapoal Andes (La Moralina).</span>
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
	$('#menu_gran-reserva').addClass('page-active');
};
</script>

<?php include 'footer.php';?>