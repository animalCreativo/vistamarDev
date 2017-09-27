
<?php include 'header.php';?>
 
  <div class="main-wrapper-onepage main oh">

    <!-- Revolution Slider -->
    <section> 
      <div class="rev_slider_wrapper">
        <div class="rev_slider" id="slider1" data-version="5.0">
          <ul>
            <!-- SLIDE 1 -->
            <li data-transition="zoomout"
              data-easein="default" 
              data-easeout="default"
              data-slotamount="1"
              data-masterspeed="1200"
              data-delay="8000"
              data-title="Andes and coastal"
              >
              <!-- MAIN IMAGE -->
              <img src="img/banner1.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 1 -->
              <div class="mainslider-fonts tp-caption hero-text huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-transform_idle="o:1;s:1000"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1000"
                data-splitout="none"><?php echo $lang['homeImg1']; ?>
              </div>

            </li> <!-- end slide 1 -->

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
              <img src="img/banner2.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 1 -->
              <div class="mainslider-fonts tp-caption hero-text huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-transform_idle="o:1;s:1000"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1000"
                data-splitout="none"><?php echo $lang['homeImg21']; ?> <br><?php echo $lang['homeImg22']; ?>
              </div>

            </li> <!-- end slide 2 -->

          <!-- SLIDE 3 -->
            <li data-transition="zoomout"
              data-easein="default" 
              data-easeout="default"
              data-slotamount="1"
              data-masterspeed="1200"
              data-delay="8000"
              data-title="Creative &amp; Emotional"
              >
              <!-- MAIN IMAGE -->
              <img src="img/banner3.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 1 -->
              <div class="mainslider-fonts tp-caption hero-text huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-transform_idle="o:1;s:1000"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1000"
                data-splitout="none"><?php echo $lang['homeEsencia1']; ?> <br><?php echo $lang['homeEsencia2']; ?>
              </div>

            </li> <!-- end slide 2 -->

          </ul>

          <div class="local-scroll">
            <a href="#wines" class="scroll-down">
              <i class="fa fa-angle-down"></i>
            </a>
          </div>

        </div>
      </div>
    </section>
    
    <!-- DIVISOR TITULOS -->
    <section class="black-b" id="wines">
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
    
    <section class="no-pad-top">
    	<div class="altura-x">
    	<div class="wine-space" id="bck-brut">
    			<div class="work-item web-design print">
					<div class="work-img-responsive"><img src="img/wine5.png" height="433" alt="Specialties">
						<div class="work-overlay">
						<a href="especialidades.php" style="color: #FFFFFF">
							<div class="other-wines">
								<h3> <?php echo $lang['homeSpecial1']; ?></h3>
                  				<span><?php echo $lang['homeSpecial2']; ?></span>         
							<div class="work-description"></div>
							</div>
							</a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space" id="bck-granreserva">
    			<div class="work-item web-design print">
					<div class="work-img-responsive"><img src="img/wine2.png" height="433" alt="Gran Reserva">
						<div class="work-overlay">
						 <a href="gran-reserva.php" style="color: #FFFFFF">
							<div class="other-wines">
								<h3><?php echo $lang['homeReserva1']; ?></h3>
                  				<span><?php echo $lang['homeReserva2']; ?></span>         
							<div class="work-description"></div>
							</div>
							</a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space" id="bck-cortedecampo">
    			<div class="work-item web-design print">
					<div class="work-img-responsive"><img src="img/wine3.png" height="433" alt="Corte de Campo">
						<div class="work-overlay">
						<a href="corte-de-campo.php" style="color: #FFFFFF">
							<div class="other-wines">
								<h3> <?php echo $lang['homeCorte1']; ?></h3>
                  				<span><?php echo $lang['homeCorte2']; ?></span>         
							<div class="work-description"></div>
							</div>
							</a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space" id="bck-sepia">
    			<div class="work-item web-design print">
					<div class="work-img-responsive"><img src="img/wine4.png" height="433" alt="Sepia Reserva">
						<div class="work-overlay">
						<a href="sepia-reserva.php" style="color: #FFFFFF">
							<div class="other-wines">
								<h3><?php echo $lang['homeReservaSepia1']; ?></h3>
                  				<span><?php echo $lang['homeReservaSepia2']; ?></span>         
							<div class="work-description"></div>
							</div>
							</a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space" id="bck-brisa">
    			<div class="work-item web-design print">
					<div class="work-img-responsive"><img src="img/wine1.png" height="433" alt="Brisa">
						<div class="work-overlay">
						 <a href="brisa.php" style="color: #FFFFFF">
							<div class="other-wines">
								<h3><?php echo $lang['homeBrisa1']; ?></h3>
                  				<span><?php echo $lang['homeBrisa2']; ?> </span>         
							<div class="work-description"></div>
							</div>
							</a>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </section>
    
    <!-- DIVISOR TITULOS -->
    <section class="black-b" id="valleys">
    	<div class="content-title-img">
		<div class="title-img">
      <?php 
          if ($_SESSION['lang']=='en') {  ?>
      <img src="img/title_valleys_en.png" alt="<?php echo $lang['homeNuestrosValles']; ?>">
      <?php
      }
      else if ($_SESSION['lang']=='es') { ?>
      <img src="img/title_valleys.png" alt="<?php echo $lang['homeNuestrosValles']; ?>">
      <?php
      }
      ?>

    </div>
		
    </div>
    </section>
    <!-- DIVISOR TITULOS -->

<!-- <section class="section-wrap promo-section vinedo" id="valleys"> -->
      
      <!-- Inicio Slider-->
        
        <div class="flex-container">
    <div class="flexslider">
        <ul class="slides">
        	<li>
               <div id="slide_valley_cac" class="v_slide">
               			<div class="col-lg-12 v_info">
              				<div class="col-lg-1"></div>
               				<div class="col-lg-5 valley-info">
               					<h4><?php echo $lang['homeValle']; ?></h4>
               					<h2><?php echo $lang['homeValleCachapoal1']; ?></h2>
								<span><?php echo $lang['homeValleCachapoal2']; ?></span>
               				</div>
               				<div class="slide-image-responsive">
               					<div class="col-lg-3 map-1"><img src="img/sv_mapa-1.png" alt="mapa" /></div>
               					<div class="col-lg-2 cal-1"><img src="img/sv_belen.png" alt="belen" /></div>
							</div>
               			</div>
               </div>
            </li>
        	<li>
               <div id="slide_valley_cas" class="v_slide">
               <div class="col-lg-12 v_info">
              				<div class="col-lg-1"></div>
               				<div class="col-lg-5 valley-info">
               					<h4><?php echo $lang['homeValle']; ?></h4>
               					<h2><?php echo $lang['homeValleCasaBlanca1']; ?></h2>
								<span><?php echo $lang['homeValleCasaBlanca2']; ?></span>
               				</div>
               				<div class="slide-image-responsive">
               					<div class="col-lg-3 map-1"><img src="img/sv_mapa-2.png" alt="mapa" /></div>
               					<div class="col-lg-2 cal-1"><img src="img/sv_casablanca.png" alt="casablanca" /></div>
				   			</div>
               			</div>
               </div>
            </li>
        	<li>
               <div id="slide_valley_lim" class="v_slide">
               	<div class="col-lg-12 v_info">
              				<div class="col-lg-1"></div>
               				<div class="col-lg-5 valley-info">
               					<h4><?php echo $lang['homeValle']; ?></h4>
               					<h2><?php echo $lang['homeValleCasaLimari1']; ?></h2>
								<span><?php echo $lang['homeValleCasaLimari2']; ?></span>
               				</div>
               				<div class="slide-image-responsive">
               					<div class="col-lg-3 map-1"><img src="img/sv_mapa-3.png" alt="mapa" /></div>
               					<div class="col-lg-2 cal-1"><img src="img/sv_limari.png" alt="limari" /></div>
							</div>
               			</div>
               </div>
            </li>
            <li>
               <div id="slide_valley_mai" class="v_slide">
               	<div class="col-lg-12 v_info">
              				<div class="col-lg-1"></div>
               				<div class="col-lg-5 valley-info">
               					<h4><?php echo $lang['homeValle']; ?></h4>
               					<h2><?php echo $lang['homeValleMaipo1']; ?></h2>
								<span><?php echo $lang['homeValleMaipo2']; ?></span>
               				</div>
               				<div class="slide-image-responsive">
               					<div class="col-lg-3 map-1"><img src="img/sv_mapa-4.png" alt="mapa" /></div>
               					<div class="col-lg-2 cal-1"><img src="img/sv_romeral.png" alt="romeral" /></div>
							</div>
               			</div>
               </div>
            </li>
            <li>
               <div id="slide_valley_mau" class="v_slide">
               	<div class="col-lg-12 v_info">
              				<div class="col-lg-1"></div>
               				<div class="col-lg-5 valley-info">
               					<h4><?php echo $lang['homeValle']; ?></h4>
               					<h2><?php echo $lang['homeValleMaule1']; ?></h2>
								<span><?php echo $lang['homeValleMaule2']; ?></span>
               				</div>
               				<div class="slide-image-responsive">
               					<div class="col-lg-3 map-1"><img src="img/sv_mapa-5.png" alt="mapa" /></div>
               					<div class="col-lg-2 cal-1"><img src="img/sv_maule.png" alt="maule" /></div>
							</div>
               			</div>
               </div>
            </li>
        </ul>
    </div>
</div>
        
       <!-- Fin Slider-->


<!-- DIVISOR TITULOS -->
    <section class="black-b" id="cool">
    	<div class="content-title-img">
		<div class="title-img">
     <?php 
          if ($_SESSION['lang']=='en') {  ?>
      <img src="img/title_cool_en.png" alt="<?php echo $lang['coolStuff']; ?>">
      <?php
      }
      else if ($_SESSION['lang']=='es') { ?>
      <img src="img/title_cool.png" alt="<?php echo $lang['coolStuff']; ?>">
      <?php
      }
      ?>
    </div>
		</div>
    </section>
    <!-- DIVISOR TITULOS -->

<section class="no-pad-top section-wrap process pad-bot-5">
      <div class="colmd-12">
      	<div class="col-md-3 no-pad">
      		<div id="awards"> <!-- background img -->
      			<a href="awards.php">
      				<div class="cool-type"> <!-- div hover -->
      					<?php echo $lang['awards']; ?>
      				</div>
				</a>
      		</div>
      	</div>
      	<div class="col-md-3 no-pad">
      		<div id="videos"> <!-- background img -->
      			<a href="videos.php" >
      				<div class="cool-type"> <!-- div hover -->
                <?php echo $lang['videos']; ?>
      				</div>
				</a>
      		</div>
      	</div>
      	<div class="col-md-3 no-pad">
      		<div id="news"> <!-- background img -->
      			<a href="news.php">
      				<div class="cool-type"> <!-- div hover -->
      					<?php echo $lang['noticias']; ?>
      				</div>
				</a>
      		</div>
      	</div>
      	<div class="col-md-3 no-pad">
      		<div id="social"> <!-- background img -->
      			<a href="social.php">
      				<div class="cool-type"> <!-- div hover -->
      				  <?php echo $lang['social']; ?>
      				</div>
				</a>
      		</div>
      	</div>	
      </div>

    </section>

   
   <!-- DIVISOR TITULOS -->
    <section class="white-b" id="contact">
    	<div class="content-title-img">
		<div class="title-img">
      <?php 
          if ($_SESSION['lang']=='en') {  ?>
      <img src="img/title_contact_en.png" alt="<?php echo $lang['contacto2']; ?>">
      <?php
      }
      else if ($_SESSION['lang']=='es') { ?>
      <img src="img/title_contact.png" alt="<?php echo $lang['contacto2']; ?>">
      <?php
      }
      ?>
    </div>
		</div>
    </section>
    <!-- DIVISOR TITULOS -->
   
   
    <!-- Contact -->
    <section class="no-pad-top section-wrap contact" >
      <div class="container">
<!--
        <div class="row heading">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-center bottom-line">Contact Us</h2>
          </div>
        </div>
-->
        <div class="row">

          <div class="col-md-4">

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <h6><?php echo $lang['address1']; ?></h6>
              <p><?php echo $lang['address2']; ?><br>
              <?php echo $lang['address3']; ?></p>
            </div> <!-- end address -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fa fa-phone"></i>
              </div>
              <h6><?php echo $lang['phone1']; ?></h6>
              <span><?php echo $lang['phone2']; ?></span>
            </div> <!-- end phone number -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fa fa-envelope"></i>
              </div>
              <h6><?php echo $lang['mail1']; ?></h6>
              <a href=<?php echo $lang['mail2']; ?>><?php echo $lang['mail3']; ?></a>
            </div> <!-- end email -->

          </div>

          <div class="col-md-8">
           
            <form id="contact-form" name="contactform" method="post" action="#">

              <div class="row contact-row">
                <div class="col-md-6 contact-name">
                  <input name="name" id="name" type="text" placeholder=<?php echo $lang['contacto1']; ?>>
                </div>
                <div class="col-md-6 contact-email">
                  <input name="phone" id="phone" type="text" placeholder=<?php echo $lang['contacto2']; ?>>
                </div>
                <div class="col-md-6 contact-email">
                  <input name="mail" id="mail" type="email" placeholder=<?php echo $lang['contacto3']; ?>>
                </div>
              </div>

              <input name="subject" id="subject" type="text" placeholder=<?php echo $lang['contacto4']; ?>> 
              <textarea name="comment" id="comment" placeholder=<?php echo $lang['contacto5']; ?>></textarea>
              <input type="submit" value=<?php echo $lang['enviar']; ?> class="btn btn-lg btn-color btn-submit">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

        </div>
      </div>
    </section> <!-- end contact -->


    <!-- Google Map -->
    <div class="overlay-gmap" onClick="style.pointerEvents='none'"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.728659642691!2d-70.57479794893948!3d-33.40424258069295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ced8931b6443%3A0xef31de536dc3b3c8!2sRosario+Nte+615%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1489689914101" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>

<?php include 'footer.php';?>