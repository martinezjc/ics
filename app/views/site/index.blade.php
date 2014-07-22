@extends('layouts.master')

@section('content')

<div class="slider-area">
  <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
  	<div data-thumb="img/resource/banner1-thumb.jpg" data-src="img/resource/banner1.jpg">
	<div class="camera_caption slide1 fadeFromRight"> 
		<div class="slide1-style">
			<!-- <span><img src="img/resource/slide1-logo.png" alt="" />The <span>Perfect Template</span> with</span> -->
			<h3>Encabezado de <span>articulo</span></h3>
		</div>
	</div>
	<div class="camera_caption slide1 fadeFromBottom"> 
		<p>Breve descripcion del contenido del articulo</p> 
	</div>
    </div><!-- 1st Slide -->
    <div data-thumb="img/resource/banner2-thumb.jpg" data-src="img/resource/banner2.jpg">
	<div class="camera_caption slide2 fadeFromLeft"> 
		<div class="slide2-style" style="margin-top: 8%;">
			<!-- <span>Dictate Gives You The Best Way to Create A</span>
			<h3>Otro titulo <span> de articulo</span></h3> -->
			<h4><a href=""><span>Titulo de articulo 2</span></a></h4>
			<p>Descripcion del articulo.</p>
		</div>
	</div>
    </div><!-- 2nd Slide -->
    <div data-thumb="img/resource/banner3-thumb.jpg" data-src="img/resource/banner3.jpg">
	<div class="camera_caption slide3 fadeFromLeft"> 
		<div class="slide3-style">
			<h3>Titulo de articulo 3</h3>
			<p>Descripcion del articulo.</p>
			<!-- <span>on the main page to put impression.</span> -->
		</div>
	</div>
    </div><!-- 3rd Slide -->
    <div data-thumb="img/resource/banner4-thumb.jpg" data-src="img/resource/banner4.jpg">
	<div class="camera_caption slide4 fadeFromBottom"> 
		<!-- <div class="slide4-style">
			<h3><span>Do you <i>need</i> a New Health & </span> Medical HTML <i>Template</i></h3>
			<p>This template will be best suited for all the medical, doctors, health related website. It has all the features to be used for hospitals and clinics needs.  </p>
		</div> -->
	</div>
    </div><!-- 4th Slide -->
    <div data-thumb="img/resource/banner5-thumb.jpg" data-src="img/resource/banner5.jpg">
	<div class="camera_caption slide5 fadeFromLeft"> 
		<!-- <div class="slide5-style">
			<h3>Top <i>notch</i> <span>HTML5 Work</span></h3>
			<p>This newly designed HTML 5 template is going to be launched with pure coding of HTML5.</p>
		</div> -->
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

<!-- <section class="cols">
	<div class="container">
		<div class="left-cols span8">
			<div class="col-title">
				<h2>Our Staff</h2>
			</div>
			<div id="slider4">
				<a href="#" class="buttons next"></a>
				<a href="#" class="buttons prev"></a>
				<div class="viewport">
					<ul class="overview" style="">
						<li>
							<div class="staff">
								<img src="img/resource/staff1.jpg" alt="" />
								<div class="staff-intro">
									<h3>Mark Simkin</h3>
									<span>General Surgeon</span>
								</div>
								<p>Lorem ipsum dolor sit amet ne onsec tetuer adn tashin ips Aenean commodo ligula egt tashin dolor in tashn tyonsew piscing elit. Aenean commodo tashin..</p>
							</div>
							<div class="staff">
								<img src="img/resource/staff2.jpg" alt="" />
								<div class="staff-intro">
									<h3>Sophie Rani</h3>
									<span>Dermatologist</span>
								</div>
								<p>Lorem ipsum dolor sit amet ne onsec tetuer adn tashin ips Aenean commodo ligula egt tashin dolor in tashn tyonsew piscing elit. Aenean commodo tashin..</p>
							</div>

						</li>
						<li>
							<div class="staff">
								<img src="img/resource/staff1.jpg" alt="" />
								<div class="staff-intro">
									<h3>Mark Simkin</h3>
									<span>General Surgeon</span>
								</div>
								<p>Lorem ipsum dolor sit amet ne onsec tetuer adn tashin ips Aenean commodo ligula egt tashin dolor in tashn tyonsew piscing elit. Aenean commodo tashin..</p>
							</div>
							<div class="staff">
								<img src="img/resource/staff2.jpg" alt="" />
								<div class="staff-intro">
									<h3>Sophie Rani</h3>
									<span>Dermatologist</span>
								</div>
								<p>Lorem ipsum dolor sit amet ne onsec tetuer adn tashin ips Aenean commodo ligula egt tashin dolor in tashn tyonsew piscing elit. Aenean commodo tashin..</p>
							</div>

						</li>
						<li>
							<div class="staff">
								<img src="img/resource/staff1.jpg" alt="" />
								<div class="staff-intro">
									<h3>Mark Simkin</h3>
									<span>General Surgeon</span>
								</div>
								<p>Lorem ipsum dolor sit amet ne onsec tetuer adn tashin ips Aenean commodo ligula egt tashin dolor in tashn tyonsew piscing elit. Aenean commodo tashin..</p>
							</div>
							<div class="staff">
								<img src="img/resource/staff2.jpg" alt="" />
								<div class="staff-intro">
									<h3>Sophie Rani</h3>
									<span>Dermatologist</span>
								</div>
								<p>Lorem ipsum dolor sit amet ne onsec tetuer adn tashin ips Aenean commodo ligula egt tashin dolor in tashn tyonsew piscing elit. Aenean commodo tashin..</p>
							</div>

						</li>
					</ul>
				</div>
			</div>			
		</div>		
	</div>
</section> -->

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
                <h2><a href="" title="">Evento 1</a></h2>
				<div class="post-meta"> 
					<span>                 
						<span class="published-date"><i class="theme-icon calender"></i><span>3 de Mayo, 2013</span></span>  
						<!-- <span class="post-time"><i class="theme-icon clock"></i>10:48 pm</span> -->
					</span>
				</div>
                <article>
                  <p>Nam ultricies dolor elit varius sceisque. leonio estibulum in lacus lis pretium feugiat nonwin ed elit. Duis pretiurna Nam ultricies dolor elit varius sceisque. vgw estibulum in lacus listion pretium feugiat nonwi lacus lis pretiu feugiat nonwin ed elit</p>
                  <a class="readmore" href="" title="">Leer M&aacute;s</a> 
                </article>
              </div>
            </div><!-- First Event -->
            <div id="event2" class="tab-pane fade in">
              <div class="event-img"> 
                <img src="img/resource/events-img2.jpg" alt="" /> 
              </div>
              <div class="post-details">
                <h2><a href="" title="">Powerful ideas, technical creativity</a></h2>
				<div class="post-meta"> 
					<span>                 
						<span class="published-date"><i class="theme-icon calender"></i><span>May, 3, 2014</span></span>  
						<span class="post-time"><i class="theme-icon clock"></i>10:48 pm</span>
					</span>
				</div>
                <article>
                  <p>Nam ultricies dolor elit varius sceisque. leonio estibulum in lacus lis pretium feugiat nonwin ed elit. Duis pretiurna Nam ultricies dolor elit varius sceisque. vgw estibulum in lacus listion pretium feugiat nonwi lacus lis pretiu feugiat nonwin ed elit</p>
                  <a class="readmore" href="" title="">Read More</a> 
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
                <h2><a href="" title="">Evento 2</a></h2>
				<div class="post-meta"> 
					<span>                 
						<span class="published-date"><i class="theme-icon calender"></i><span>3 de Mayo, 2014</span></span>  
						<!-- <span class="post-time"><i class="theme-icon clock"></i>10:48 pm</span> -->
					</span>
				</div>
                <article>
                  <p>Nam ultricies dolor elit varius sceisque. leonio estibulum in lacus lis pretium feugiat nonwin ed elit. Duis pretiurna Nam ultricies dolor elit varius sceisque. vgw estibulum in lacus listion pretium feugiat nonwi lacus lis pretiu feugiat nonwin ed elit</p>
                  <a class="readmore" href="" title="">Read More</a> 
                </article>
              </div>
            </div><!-- Third Event -->
          </div>
          <ul class="nav nav-tabs">
            <li class="active"> 
              <a data-toggle="tab" href="#event1"> 
                <span class="events-thumb">
					<img src="img/resource/events1.jpg" alt="" /> 
					<h4>Evento 3<span>Nombre autor 1</span></h4>
                </span>
              </a>
            </li>
            <li class=""> 
              <a data-toggle="tab" href="#event2"> 
                <span class="events-thumb">
					<img src="img/resource/events2.jpg" alt="" /> 
					<h4>Evento 4<span>Nombre autor 2</span></h4>
                </span>
              </a>
            </li>
            <li class=""> 
              <a data-toggle="tab" href="#event3"> 
                <span class="events-thumb">
					<img src="img/resource/events3.jpg" alt="" /> 
					<h4>Evento 5<span>Nombre autor 3</span></h4>
                </span>
              </a>
            </li>
          </ul> <!-- Event Selector -->
        </div>
      </div><!-- Recent Events Section -->  
    </div>  	
	
    <div class="boxes-right">
      <div class="sidebox-head">
        <h2>TESTIMONIOS<!--<span>Personas satisfechas con nuestro servicio</span>--></h2>
      </div>    
			
      <div class="clients">
      	<p><i class="theme-icon comma-start"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<i class="theme-icon comma-end"></i></p>
        <div class="abt-client">
          	<!-- <span>3 days Ago</span> -->
           	<p>Nombre persona</p>
			<i>Ocupaci&oacute;n aqu&iacute;</i>
        </div>
        <img src="img/resource/client1.jpg" alt="" />
      </div><!-- Satisfied Client -->

      <div class="clients">
      	<p><i class="theme-icon comma-start"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <i class="theme-icon comma-end"></i></p>
        <div class="abt-client">
          	<!-- <span>3 days Ago</span> -->
           	<p>Nombre persona</p>
			<i>Ocupaci&oacute;n aqu&iacute;</i>
        </div>
        <img src="img/resource/client2.jpg" alt="" />
      </div><!-- Satisfied Client -->

    </div>
    
  </div>
</section>

</div>
@stop