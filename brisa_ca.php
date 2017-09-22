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
						<img src="img/12brcaen.png" class="img-center img-responsive centrar-div-pos" alt="BRISA CARMENÈRE" >
					</div>
				</div> <!-- end col -->
          
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 espacio-bot">
          <!-- espacio botella -->
			</div>

          <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12 descrip-vino">
           	
            <div class="info-ow" style="text-transform: uppercase">
              <h3><?php echo $lang['homeVariedades']; ?></h3>
              <div class="contain-1">
        <div class="vari"><a href="brisa_cs.php"><h4><?php echo $lang['cabernetBlend']; ?></h4></a></div>
              <div class="dot3">·</div>
              <div class="vari"><a href="brisa_ca.php"><h4 style="color: black;"><?php echo $lang['carmene']; ?></h4></a></div>
              <div class="dot3">·</div>
              <div class="vari"><a href="brisa_me.php"><h4><?php echo $lang['merlot']; ?></h4></a></div>
              <div class="dot3">·</div>
              <div class="vari"><a href="brisa_mo.php"><h4><?php echo $lang['moscato']; ?></h4></a></div>
              </div>
              <div class="contain-1">
        <div class="vari"><a href="brisa_ro.php"><h4><?php echo $lang['rose']; ?></h4></a></div>
              <div class="dot3">·</div>
              <div class="vari"><a href="brisa_ch.php"><h4><?php echo $lang['chardonnay']; ?></h4></a></div>
              <div class="dot3">·</div>
              <div class="vari"><a href="brisa_sb.php"><h4><?php echo $lang['sauvignonBlanc']; ?></h4></a></div>
              </div>
              </div>
             	
            <div class="info-ow mt-30">
              <h1 style="text-transform: uppercase"><?php echo $lang['carmene']; ?></h1>
              <br>
              <h3><?php echo $lang['origen']; ?></h3>
              <h5><?php echo $lang['valleCentral']; ?></h5>
              <?php echo $lang['brisa_caTexto1']; ?>
              <br> <br>
              <h6><?php echo $lang['vinificacion']; ?></h6>
              <?php echo $lang['brisa_caTexto2']; ?>
              <br><br>
              <h6><?php echo $lang['degustacion']; ?></h6>
              <h3><?php echo $lang['color']; ?>:</h3> <?php echo $lang['brisa_caTexto3']; ?>
              <h3><?php echo $lang['aroma']; ?>:</h3> <?php echo $lang['brisa_caTexto4']; ?>
              <h3><?php echo $lang['sabor']; ?>:</h3> <?php echo $lang['brisa_caTexto5']; ?>
              <h3><?php echo $lang['temp']; ?>:</h3> <?php echo $lang['brisa_caTexto6']; ?>
              <h3><?php echo $lang['maridaje']; ?>:</h3> <?php echo $lang['brisa_caTexto7']; ?>
              <br><br>
             
              <?php 
              if ($_SESSION['lang']=='en') {  ?>
              <a href="files/Brisa/ENG/Brisa_Car_16.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <?php
              }
              else if ($_SESSION['lang']=='es') { ?>
              <a href="files/Brisa/ESP/Brisa_Car_16.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <a href="http://www.cavamorande.cl/store/vistamar-brisa-carmenere-2016?search=brisa" target="_blank" class="btn btn-lg btn-color">
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
          <div class="work-img"><img src="img/w2.jpg" height="433" alt="Gran Reserva">
            <div class="work-overlay">        
            <a href="gran-reserva.php" style="color: #FFFFFF">  <div class="other-wines">
                <h3 style="color: #FFFFFF"><?php echo $lang['homeReserva1']; ?> </h3>
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
<script type="text/javascript">
window.onload=function () {
    $('#menu_our-wines').addClass('page-active');
	$('#menu_brisa').addClass('page-active');
};
</script>
<?php include 'footer.php';?>