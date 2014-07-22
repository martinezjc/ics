@extends('layouts.master')

@section('content')

<div class="slider-area">
  <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
  	<div data-thumb="img/resource/banner1-thumb.jpg" data-src="img/resource/banner1.jpg">
	<div class="camera_caption slide1 fadeFromRight"> 
		<div class="slide1-style">
			<!-- <span><img src="img/resource/slide1-logo.png" alt="" />The <span>Perfect Template</span> with</span> -->
			<h3>Responsive and <span>Flexible</span></h3>
		</div>
	</div>
	<div class="camera_caption slide1 fadeFromBottom"> 
		<p>layout which can be opened in any mobile device or tablet. The perfect work has been done in this html</p> 
		<p>template which fits in every electronics device like iPad.</p>
	</div>
    </div><!-- 1st Slide -->
    <div data-thumb="img/resource/banner2-thumb.jpg" data-src="img/resource/banner2.jpg">
	<div class="camera_caption slide2 fadeFromLeft"> 
		<div class="slide2-style">
			<span>Dictate Gives You The Best Way to Create A</span>
			<h3>Creative <span>Website</span></h3>
			<h4>Conviniently <span>and</span> Easily</h4>
			<p>For the Clinics, Hospitals, Health Centers etc.</p>
		</div>
	</div>
    </div><!-- 2nd Slide -->
    <div data-thumb="img/resource/banner3-thumb.jpg" data-src="img/resource/banner3.jpg">
	<div class="camera_caption slide3 fadeFromLeft"> 
		<div class="slide3-style">
			<h3>3 Sliders Support</h3>
			<p>Sliders are used to display your work aggressively</p>
			<span>on the main page to put impression.</span>
		</div>
	</div>
    </div><!-- 3rd Slide -->
    <div data-thumb="img/resource/banner4-thumb.jpg" data-src="img/resource/banner4.jpg">
	<div class="camera_caption slide4 fadeFromBottom"> 
		<div class="slide4-style">
			<h3><span>Do you <i>need</i> a New Health & </span> Medical HTML <i>Template</i></h3>
			<p>This template will be best suited for all the medical, doctors, health related website. It has all the features to be used for hospitals and clinics needs.  </p>
		</div>
	</div>
    </div><!-- 4th Slide -->
    <div data-thumb="img/resource/banner5-thumb.jpg" data-src="img/resource/banner5.jpg">
	<div class="camera_caption slide5 fadeFromLeft"> 
		<div class="slide5-style">
			<h3>Top <i>notch</i> <span>HTML5 Work</span></h3>
			<p>This newly designed HTML 5 template is going to be launched with pure coding of HTML5.</p>
		</div>
	</div>	
    </div><!-- 5th Slide -->
  </div>
</div><!-- Slider Area -->

<div class="clearfix"></div>

<section id="simple-services">
	<div class="container">
		<div>
			<div class="service-box span4">
              <ul>
              	<li><h2><i class="fa fa-info-circle"></i> Acerca del ICS</h2></li>
              	<li><a href="{{ action('PageController@showPage', array('slug' => 'mision-vision-y-objetivos' ) ); }}">Misi&oacute;n, visi&oacute;n y objetivos</a></li>
              	<li><a href="{{ action('PageController@showPage', array('slug' => 'historia' ) ); }}">Historia</a></li>
              	<li>Organizaci&oacute;n y liderazgo</li>
              	<li>Pol&iacute;ticas y normativas</li>
              	<li>D&oacute;nde encontrarnos</li>
              	<li>Trabaja con nosotros</li>
              	<li>Ayuda y donaciones</li>
              </ul>
			</div>
			<div class="service-box span4">
			  <ul>
			  	<li><h2><i class="fa fa-flask"></i> Investigaci&oacute;n</h2></li>
			  	<li>L&iacute;nea y grupos</li>
			  	<li>Proyectos</li>
			  	<li>Redes</li>
			  	<li>Innovaci&oacute;n</li>
			  	<li>Comite de &eacute;tica</li>
			  	<li>Publicaciones</li>
			  	<li>Serie de "Seminarios de Investigaci&oacute;n"</li>
			  </ul>
			</div>
			<div class="service-box span4">
			  <ul>
			  	<li><h2><i class="fa fa-graduation-cap"></i> Oferta acad&eacute;mica</h2></li>
			  	<li>Carreras t&eacute;cnicas</li>
			  	<li>Grado</li>
			  	<li>Posgrado</li>
			  	<li>Cursos libres</li>
			  	<li>Estudios de intercambio</li>
			  	<li>Pasant&iacute;a y entrenamientos</li>
			  	<li>Programa Internacional</li>
			  </ul>
			</div>	
		</div>
	</div>
</section>

<section class="box-recent-news">
	<div class="container">
		<div>
			<div class="recent-posts">
				<div class="main-title first">
				<h3>&Uacute;ltimas <span>Noticias</span></h3>
				</div>
			</div>

			<div id="slider3">
				<a class="buttons next" href="#"></a>
				<a class="buttons prev" href="#"></a>
				<div class="viewport">
					<ul class="overview">
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post1.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH PRODUCTS</a></h6>
							<p>Vitamins and Supplements</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post2.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">SLIDESHOWS</a></h6>
							<p>How We Feel About Beauty</p>
						</li>


						<li>
							<div class="post-img">
								<img src="img/resource/recent-post3.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH & WELLNESS</a></h6>
							<p>People Who Are Changing he Face of Yoga</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post4.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH PRODUCTS</a></h6>
							<p>Friendly Foods That Pack a Punch</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post5.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH & WELLNESS</a></h6>
							<p>Pad Kitchen Must-Haves</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post6.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH PRODUCTS</a></h6>
							<p>The 2013 Embassy Chef Challenge</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post1.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH PRODUCTS</a></h6>
							<p>Vitamins and Supplements</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post2.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">SLIDESHOWS</a></h6>
							<p>How We Feel About Beauty</p>
						</li>
						<li>
							<div class="post-img">
								<img src="img/resource/recent-post3.jpg" alt="" />
								<a class="recent-post-link" href="#" title=""><i class="theme-icon chain"></i></a>
							</div>
							<h6><a href="#" title="">HEALTH & WELLNESS</a></h6>
							<p>People Who Are Changing he Face of Yoga</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
</section>

<section class="boxes">
	<div class="container">

    <div class="boxes-left">
      <div class="sidebox-head">
        <h2>EVENTOS RECIENTES<span></span></h2>
      </div>
      <div id="events" class="tab-pane fade in">
        <div class="tabbable tabs-below events">
          <div class="tab-content">
            <div id="event1" class="tab-pane fade active in">
              <div class="event-img"> 
                <a title="" href="http://player.vimeo.com/video/33741794" class="html5lightbox">
                  <span class="play-icon"></span>
                </a>
                <img src="img/resource/events-img1.jpg" alt="" /> 
              </div>
              <div class="post-details">
                <h2><a href="event-single-page.html" title="">Powerful ideas, technical creativity</a></h2>
				<div class="post-meta"> 
					<span>                 
						<span class="published-date"><i class="theme-icon calender"></i><span>May, 3, 2013</span></span>  
						<span class="post-time"><i class="theme-icon clock"></i>10:48 pm</span>
					</span>
				</div>
                <article>
                  <p>Nam ultricies dolor elit varius sceisque. leonio estibulum in lacus lis pretium feugiat nonwin ed elit. Duis pretiurna Nam ultricies dolor elit varius sceisque. vgw estibulum in lacus listion pretium feugiat nonwi lacus lis pretiu feugiat nonwin ed elit</p>
                  <a class="readmore" href="event-single-page.html" title="">Read More</a> 
                </article>
              </div>
            </div><!-- First Event -->
            <div id="event2" class="tab-pane fade in">
              <div class="event-img"> 
                <img src="img/resource/events-img2.jpg" alt="" /> 
              </div>
              <div class="post-details">
                <h2><a href="event-single-page.html" title="">Powerful ideas, technical creativity</a></h2>
				<div class="post-meta"> 
					<span>                 
						<span class="published-date"><i class="theme-icon calender"></i><span>May, 3, 2013</span></span>  
						<span class="post-time"><i class="theme-icon clock"></i>10:48 pm</span>
					</span>
				</div>
                <article>
                  <p>Nam ultricies dolor elit varius sceisque. leonio estibulum in lacus lis pretium feugiat nonwin ed elit. Duis pretiurna Nam ultricies dolor elit varius sceisque. vgw estibulum in lacus listion pretium feugiat nonwi lacus lis pretiu feugiat nonwin ed elit</p>
                  <a class="readmore" href="event-single-page.html" title="">Read More</a> 
                </article>
              </div>
            </div><!-- Second Event -->
            <div id="event3" class="tab-pane fade in">
              <div class="event-img"> 
                <img src="img/resource/events-img3.jpg" alt="" /> 
                <a title="" href="http://player.vimeo.com/video/33741794" class="html5lightbox">
                  <span class="play-icon"></span>
                </a>
              </div>
              <div class="post-details">
                <h2><a href="event-single-page.html" title="">Powerful ideas, technical creativity</a></h2>
				<div class="post-meta"> 
					<span>                 
						<span class="published-date"><i class="theme-icon calender"></i><span>May, 3, 2013</span></span>  
						<span class="post-time"><i class="theme-icon clock"></i>10:48 pm</span>
					</span>
				</div>
                <article>
                  <p>Nam ultricies dolor elit varius sceisque. leonio estibulum in lacus lis pretium feugiat nonwin ed elit. Duis pretiurna Nam ultricies dolor elit varius sceisque. vgw estibulum in lacus listion pretium feugiat nonwi lacus lis pretiu feugiat nonwin ed elit</p>
                  <a class="readmore" href="event-single-page.html" title="">Read More</a> 
                </article>
              </div>
            </div><!-- Third Event -->
          </div>
          <ul class="nav nav-tabs">
            <li class="active"> 
              <a data-toggle="tab" href="#event1"> 
                <span class="events-thumb">
					<img src="img/resource/events1.jpg" alt="" /> 
					<h4>Chottani Mallows Taleon<span>By Machil Goume</span></h4>
                </span>
              </a>
            </li>
            <li class=""> 
              <a data-toggle="tab" href="#event2"> 
                <span class="events-thumb">
					<img src="img/resource/events2.jpg" alt="" /> 
					<h4>Chottani Mallows Taleon<span>By Machil Goume</span></h4>
                </span>
              </a>
            </li>
            <li class=""> 
              <a data-toggle="tab" href="#event3"> 
                <span class="events-thumb">
					<img src="img/resource/events3.jpg" alt="" /> 
					<h4>Chottani Mallows Taleon<span>By Machil Goume</span></h4>
                </span>
              </a>
            </li>
          </ul> <!-- Event Selector -->
        </div>
      </div><!-- Recent Events Section -->  
    </div>  	
	
    <div class="boxes-right">
      <div class="sidebox-head">
        <h2>HAPPY CUSTOMERS<span>Satisfied People With Us</span></h2>
      </div>    
			
      <div class="clients">
      	<p><i class="theme-icon comma-start"></i>Said multiply togeth were lande d you. The green said form are have give i replenish. Moved made living have wose called.<i class="theme-icon comma-end"></i></p>
        <div class="abt-client">
          	<span>3 days Ago</span>
           	<p>Michel</p>
			<i>Coder Designer</i>
        </div>
        <img src="img/resource/client1.jpg" alt="" />
      </div><!-- Satisfied Client -->

      <div class="clients">
      	<p><i class="theme-icon comma-start"></i>Said multiply togeth were lande d you. The green said form are have give i replenish. Moved made living have wose called.<i class="theme-icon comma-end"></i></p>
        <div class="abt-client">
          	<span>3 days Ago</span>
           	<p>Michel</p>
			<i>Coder Designer</i>
        </div>
        <img src="img/resource/client2.jpg" alt="" />
      </div><!-- Satisfied Client -->

    </div>
    
  </div>
</section>

<section id="serve" class="pattern2">
	<div class="title">
		<div class="container">
    	<h2>THE PEOPLE WHO WILL SERVE YOU <span class="slogan">Expert Doctors in Our Team</span> </h2>
    </div>
  </div><!-- Section Title -->
  
  <div id="slider1">
    <div class="container"> <span class="carousel-pagination"> <a class="buttons prev" href="#">left</a> <a class="buttons next" href="#">right</a> </span>
      <div class="viewport">
        <ul class="overview">
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve1.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve1.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Ava Kuch</h3>
						<span class="speciality">Cardiologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve2.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve2.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Grace Henry</h3>
						<span class="speciality">Urologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve3.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve3.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Jayden Ryan</h3>
						<span class="speciality">Pathologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve4.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve4.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Sofia Nida</h3>
						<span class="speciality">Cardiologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve1.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve1.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Ava Kuch</h3>
						<span class="speciality">Cardiologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve2.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve2.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Grace Henry</h3>
						<span class="speciality">Urologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
			<li>
				<div class="serve-img"> 
					<img src="img/resource/serve3.jpg" alt="" />
					<div class="serve-hover">
						<p>Lorem ipsdo lowr st amet, consectietd ur adipiscing elit.as fvharetra magna id augue pelle sque non tempius nunc consectetur.</p>
						<a href="#" title="" class="link"></a>
						<a href="img/resource/serve3.jpg" class="html5lightbox" data-group="team"><span class="magnify"></span></a>
						<div class="progress indivisual">
							<div class="bar" style="width: 30%;"></div>
							<span>Surgeon Skills</span><i>30%</i>
						</div>
						<div class="progress indivisual">
							<div class="bar" style="width: 60%;"></div>
							<span>Cardiology Skills</span><i>60%</i>
						</div>
					</div>
				</div>
				<div class="figcaption"> 
					<div class="serve-intro">
						<h3><i class="theme-icon user"></i>Dr. Jayden Ryan</h3>
						<span class="speciality">Pathologist</span> 
					</div> 
					<div class="contact">
						<h4>Contact</h4>
						<ul>
							<li><a href="default.htm" title=""><i class="theme-icon mail"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
							<li><a href="default.htm" title=""><i class="theme-icon skype"></i></a></li>
						</ul>
					</div> 
				</div>
			</li>
        </ul>
      </div>
    </div>
  </div>  <!-- Our Team Carousel -->

</section><!-- Our Team Section -->


<section class="boxes">
	<div class="container">

    <div class="boxes-left">
      <div class="sidebox-head">
        <h2>TIMETABLE FOR THE DOCTOR'S AVAILIBILITY<span>Ways To Tackle Health Issues</span></h2>
      </div>
		<div id="timetable" class="tab-pane fade active in">
			<div class="tabbable timetable-tabs tabs-below">
				<ul class="nav days nav-tabs">
					<li class="active"><a data-toggle="tab" href="#sat">Saturday</a></li>
					<li><a data-toggle="tab" href="#sun">Sunday</a></li>
					<li><a data-toggle="tab" href="#mon">Monday</a></li>
					<li><a data-toggle="tab" href="#tue">Tuesday</a></li>
					<li><a data-toggle="tab" href="#wed">Wednesday</a></li>
					<li><a data-toggle="tab" href="#thu">Thursday</a></li>
					<li><a data-toggle="tab" href="#fri">Friday</a></li>
				</ul><!-- Day Selector -->
				<div class="tab-content">
					<div id="sat" class="tab-pane fade active in"> 
						<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>
						</div> 
					</div><!-- Saturday -->
					<div id="sun" class="tab-pane fade in"> 
							<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>
						</div> 
					</div><!-- Sunday -->
					<div id="mon" class="tab-pane fade in"> 
						<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>
						</div> 
					</div><!-- Monday -->
					<div id="tue" class="tab-pane fade in"> 
						<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>
						</div> 
					</div><!-- Tuesday -->
					<div id="wed" class="tab-pane fade in"> 
						<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>
						</div> 
					</div><!-- Wednesday -->
					<div id="thu" class="tab-pane fade in"> 
						<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>
						</div> 
					</div><!-- Thursday -->
					<div id="fri" class="tab-pane fade in">
						<div class="doctors-time">
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time3.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Sofia Nida</h5>
										<h5><i class="theme-icon tool"></i>Pathologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time1.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Emily Bella</h5>
										<h5><i class="theme-icon tool"></i>Enerologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time2.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. David Luis</h5>
										<h5><i class="theme-icon tool"></i>Urologist,</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<div class="doc">
									<div class="doc-img">
										<img src="img/resource/doctor-time4.jpg" alt="" />
									</div>
									<div class="caption">
										<h5><i class="theme-icon user-small"></i>Dr. Jmey Gonzo</h5>
										<h5><i class="theme-icon tool"></i>Cardiologist</h5>
										<h5><i class="theme-icon clock"></i>09:00 AM - 05:00 PM</h5>
									</div> 
								</div>
								<a href="doctors-timetable.html" title="">View All</a>								
						</div> 
					</div><!-- Friday -->
				</div>
			</div>
		</div><!-- Time Table Section -->
    </div>  	
	
    <div class="sidebox">
      <div class="sidebox-head">
        <h2>Make An Appointment<span>Ready To Serve You Happily</span></h2>
      </div><!-- Form Title -->
      <div class="sidebox-body">
        <p> Just login and you cannt chsange things as you browse your site.You can watch videos and learn how to:</p>
        <form action="#" class="appointment-form">
          <input class="full" type="text" placeholder="Name Of Patient">
          <span class="half-fields">
          <input class="half" type="text" placeholder="Phone No">
          <input class="half" type="text" placeholder="Doctor Name">
          </span>
          <input class="full" type="email" placeholder="Email">
          <span class="half-fields">
          <input class="half" type="text" placeholder="Date">
          <input class="half" type="text" placeholder="Time">
          </span>
          <input class="full" type="text" placeholder="Additional Info">
          <input class="submit" type="submit" value="Submit">
        </form>
      </div>
   </div><!-- Appointment Form -->
  </div>
</section>

<section id="simple-services" class="pattern2">
	<div class="title">
		<div class="container">
			<h2>THE EXPERT SERVICES THAT WE OFFER<span class="slogan">Ways To Tackle Health Issues</span> </h2>
		</div>
	</div><!-- Section Title -->
	
	<div class="container">
		<div>
			<div class="service-box span4">
				<div class="service-box-img">
					<img src="img/resource/microscope.png" alt="" />
				</div>
				<h3>Long Term Care Unit</h3>
				<p>Said multiply togeth were laende d you. The green said form are have giveerdi replenish. Moved made living have wose called id multiply togeth.</p>
			</div>
			<div class="service-box span4">
				<div class="service-box-img">
					<img src="img/resource/chemicals.png" alt="" />
				</div>
				<h3>Long Term Care</h3>
				<p>Said multiply togeth were laende d you. The green said form are have giveerdi replenish. Moved made living have wose called id multiply togeth.</p>
			</div>
			<div class="service-box span4">
				<div class="service-box-img">
					<img src="img/resource/dna.png" alt="" />
				</div>
				<h3>Long Term Care</h3>
				<p>Said multiply togeth were laende d you. The green said form are have giveerdi replenish. Moved made living have wose called id multiply togeth.</p>
			</div>	
		</div>
	</div>
</section>



</div>


@stop