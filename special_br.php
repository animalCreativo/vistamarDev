<?php include 'header.php';?>
 
  <div class="main-wrapper-onepage main oh">

    <!-- Revolution Slider -->
<section class="section-wrap promo-section no-pad-top">

      <div  class="pad-top-40">

      </div> 
    </section>
    
    <!-- About us / Progress Bars -->
    <section class="section-wrap-mp pad-top-20">
      <div class="container">
        <div class="row mt-minus-30">

          <div class="sobrepuesto paddingTop10">
					<div class="imgbotella">
						<img src="img/51brpnen.png" class="img-center img-responsive centrar-div-pos" alt="SPECIALITIES BRUT ROSE" style="height: 900px; width: auto;">
					</div>
				</div> <!-- end col -->
          
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 espacio-bot">
          <!-- espacio botella -->
			</div>

          <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12 descrip-vino">
           	
            	<div class="info-ow" style="text-transform: uppercase">
            	<h3 ><?php echo $lang['homeVariedades']; ?></h3>
             	<div class="contain-1">
				<div class="vari"><a href="special_br.php"><h4><?php echo $lang['brutRose']; ?></h4></a></div>
             	<div class="dot3">·</div>
             	<div class="vari"><a href="special_lh.php"><h4><?php echo $lang['lateHarvest']; ?></h4></a></div>
              	</div>
             	</div>
             	
            <div class="info-ow mt-30">
              <h1 style="text-transform: uppercase"><?php echo $lang['brutRose']; ?></h1>
              <br>
              <h3><?php echo $lang['origen']; ?></h3>
              <h5><?php echo $lang['homeValleCasaBlanca1']; ?></h5>
              <?php echo $lang['special_brTexto1']; ?>
              <br><br>
              <h6><?php echo $lang['vinificacion']; ?></h6>
              <?php echo $lang['special_brTexto2']; ?>
              <br><br>
              <h6> <?php echo $lang['degustacion']; ?></h6>
              <h3><?php echo $lang['color']; ?>:</h3> <?php echo $lang['special_brTexto3']; ?>
              <h3><?php echo $lang['aroma']; ?>:</h3> <?php echo $lang['special_brTexto4']; ?>
              <h3><?php echo $lang['boca']; ?>:</h3> <?php echo $lang['special_brTexto5']; ?>
              <h3><?php echo $lang['temp']; ?>:</h3> <?php echo $lang['special_brTexto6']; ?>
              <h3><?php echo $lang['maridaje']; ?>:</h3> <?php echo $lang['special_brTexto7']; ?>
              <br><br>

              <?php 
              if ($_SESSION['lang']=='en') {  ?>
              <a href="files/Specialties/Brut Rose/PDF eng/Vistamar_Brut Rose_eng.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <?php
              }
              else if ($_SESSION['lang']=='es') { ?>
              <a href="files/Specialties/Brut Rose/PDF Esp/Vistamar_Brut Rose_esp.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <!-- <a href="http://www.cavamorande.cl/store/vistamar-gran-reserva/vistamar-gran-reserva-cabernet-sauvignon-syrah" target="_blank" class="btn btn-lg btn-color">
              <?php echo $lang['buy']; ?></a> -->
              <?php
              }
              ?>              
            </div>
          </div> <!-- end col -->   

        </div>
      </div>
    </section> <!-- end progress bars -->

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
    	</div>
    </section>
<script type="text/javascript">
window.onload=function () {
    $('#menu_our-wines').addClass('page-active');
	$('#menu_specialties').addClass('page-active');
};
</script>
<?php include 'footer.php';?>