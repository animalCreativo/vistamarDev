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
						<img src="img/32ccaben.png" class="img-center img-responsive centrar-div-pos" alt="CORTE DE CAMPO ANDES BLEND">
					</div>
				</div> <!-- end col -->
          
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 espacio-bot">
          <!-- espacio botella -->
			</div>

          <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12 descrip-vino">
           	
              <div class="info-ow" style="text-transform: uppercase">
              <h3><?php echo $lang['homeVariedades']; ?></h3>
              <div class="contain-1">
        <div class="vari"><a href="cc_cb.php"><h4><?php echo $lang['coastalBlend']; ?></h4></a></div>
              <div class="dot3">·</div>
              <div class="vari"><a href="cc_ab.php"><h4 style="color: black;"><?php echo $lang['andesBlend']; ?></h4></a></div>
              </div>
              </div>
             	
            <div class="info-ow mt-30">
              <h1 style="text-transform: uppercase"><?php echo $lang['andesBlend']; ?></h1>
              <br>
              <h3><?php echo $lang['origen']; ?></h3>
              <h5><?php echo $lang['homeValleCachapoal11']; ?></h5>
              <?php echo $lang['cc_abTexto1']; ?><br>
			       
              <br>
              <h6><?php echo $lang['vinificacion']; ?></h6>
              <h3><?php echo $lang['reporte']; ?>:</h3>  <?php echo $lang['cc_abTexto2']; ?>
              <h3><?php echo $lang['cosecha']; ?>:</h3>  <?php echo $lang['cc_abTexto3']; ?>
              <h3><?php echo $lang['guarda']; ?>:</h3>  <?php echo $lang['cc_abTexto4']; ?>
              <h3><?php echo $lang['vinificacion']; ?>:</h3>  <?php echo $lang['cc_abTexto5']; ?>
              <br><br>
              <h6><?php echo $lang['degustacion']; ?></h6>
              <h3><?php echo $lang['color']; ?>:</h3>  <?php echo $lang['cc_abTexto6']; ?>
              <h3><?php echo $lang['aroma']; ?>:</h3>  <?php echo $lang['cc_abTexto7']; ?>
              <h3><?php echo $lang['sabor']; ?>:</h3>  <?php echo $lang['cc_abTexto8']; ?>
              <h3>Temperatura de consumo:</h3>  <?php echo $lang['cc_abTexto9']; ?>
              <h3><?php echo $lang['potencial']; ?>:</h3>  <?php echo $lang['cc_abTexto10']; ?>
              <br><br>
              
              <?php 
              if ($_SESSION['lang']=='en') {  ?>
              <a href="files/Corte de Campo/Eng/CorteCampo_Andes_14.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <?php
              }
              else if ($_SESSION['lang']=='es') { ?>
              <a href="files/Corte de Campo/Esp/CorteCampo_Andes_14.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <a href="http://www.cavamorande.cl/store/vistamar-corte-de-campo-tinto-2014?search=CORTE%20DE%20CAMPO" target="_blank" class="btn btn-lg btn-color">
              <?php echo $lang['buy']; ?></a>
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
								<h3 style="color: #FFFFFF"><?php echo $lang['homeBrisa1']; ?></h3>
                  <span><?php echo $lang['homeBrisa2']; ?> </span>
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
								<h3 style="color: #FFFFFF"><?php echo $lang['homeReserva1']; ?></h3>
                  <span><?php echo $lang['homeReserva2']; ?></span>
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
								<h3 style="color: #FFFFFF"><?php echo $lang['homeReservaSepia1']; ?></h3>
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
								<h3 style="color: #FFFFFF"><?php echo $lang['homeSpecial1']; ?></h3>
                  <span><?php echo $lang['homeSpecial2']; ?></span>
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
	$('#menu_corte-de-campo').addClass('page-active');
};
</script>
<?php include 'footer.php';?>