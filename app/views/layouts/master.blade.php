<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Instituto de Ciencias de la Investigaci&oacute;n - ICS</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<meta name="viewport" content="width=device-width, maximum-scale=1">

<meta name="description" content="">
{{ HTML::style('packages/webkit/css/common.css'); }}
{{ HTML::style('packages/webkit/css/style.css'); }}
{{ HTML::style('packages/webkit/css/blue.css'); }}
{{ HTML::style('packages/webkit/css/font-awesome.min.css'); }}
{{ HTML::style('packages/webkit/css/notosans.css'); }}
{{-- HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Noto+Sans:400,400italic,700,700italic|PT+Sans+Caption:400,700'); --}}
{{ HTML::style('packages/webkit/css/responsive.css'); }}
@yield('styles')
<!--[if lt IE 9]>
{{ HTML::style('packages/webkit/css/ie.css'); }}
{{ HTML::script('packages/webkit/js/html5shiv.js'); }}
<![endif]-->
</head>
<!-- Head Ends -->

<div class="donate">
	<div class="container">
    <div class="donate-updown">
    </div>
  </div>
</div><!-- Top Donation Bar -->

<div class="theme-layout">
<header>
	<div class="container">
  	<div class="logo">
    	<a href="index.html" title=""><img src="img/resource/logo-ics.png" alt="" /></a>
    </div><!-- Logo --> 
    
	<div id="menu">
		<ul>
			<li><a href="/" title="">INICIO</a></li>
			<li><a href="#" title="">VINCULOS CON LA COMUNIDAD</a>
				<ul class="drop-down">
					<li><a href="gallery-two-column-wos.html" title="">Clinica universitaria integral</a></li>
					<li><a href="gallery-three-column-wos.html" title="">Clinica m&oacute;vil comunitaria</a></li>
					<li class="double-drop"><a href="#" title="">Programas de promoci&oacute;n y educaci&oacute;n para la salud</a>
						<ul class="second drop-down">
							<li><a href="gallery-one-column-left-sidebar.html" title="">Social y seguridad en el trabajo</a></li>
							<li><a href="gallery-two-column-left-sidebar.html" title="">Salud y bienestar en la tercera edad</a></li>
							<li><a href="">Salud y actividad f&iacute;sica</a></li>
							<li><a href="">Salud y discapacidad</a></li>
							<li><a href="">Club de vida saludable</a></li>
						</ul> <!-- Double Drop Down Menu -->
					</li><!-- Gallery With Left Sidebar -->
					<li><a href="">Laboratorio de habilidades clinicas</a></li>
					<li><a href="">Programa de fortalecimiento del autoestudio y aprendizaje (PFAA)</a></li>
					<li class="double-drop"><a href="#" title="">Unidades especiales</a></li><!-- Gallery With Right Sidebar -->
					<li><a href="">Programa de "Turismo cientifico"</a></li>
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="default.htm" title="">ICS INTERNACIONAL</a> 
				<ul class="drop-down">
					<li class="double-drop"><a href="#" title="">Programa de Cooperaci&oacute;n en Educaci&oacute;n Superior Cuba - Nicaragua</a></li>
					<li><a href="doctors-timetable.html" title="">Congreso Internacional de Educaci&oacute;n Superior "Universidad 2014"</a></li>
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="#" title="">ACERCA DE LA UPF</a>
				<ul class="drop-down">
					<li><a href="elements.html#alignment" title="">Breve Historia</a></li>
					<li><a href="elements.html#buttons" title="">Misi&oaccute;n, visi&oacute;n y objetivos estrategicos</a></li>
					<li><a href="elements.html#alertboxes" title="">Organizaci&oacute;n y autoridades</a></li>
					<li><a href="elements.html#skills" title="">Modelos institucionales</a></li>
					<li><a href="elements.html#tabs" title="">Proyecci&oacute;n social</a></li>
					<li><a href="elements.html#toggles" title="">Auto-evaluaci&oacute;n </a></li>
					<li><a href="elements.html#pricing" title="">El pensamiento de Paulo Freire</a></li>
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="contact-us.html" title="">CONTACTENOS</a></li>
		</ul>
	</div><!-- Menu -->
	<select class="ipadMenu">
		<option value="index.html">home</option>
		<option value="index2.html">home2</option>
		<option value="gallery-two-column-wos.html">Gallery Two Column Without Sidebar</option>
		<option value="gallery-three-column-wos.html">Gallery Three Column Without Sidebar</option>
		<option value="gallery-four-column-wos.html">Gallery Four Column Without Sidebar</option>
		<option value="gallery-one-column-left-sidebar.html">Gallery One Column With Left Sidebar</option>
		<option value="gallery-two-column-left-sidebar.html">Gallery Two Column With Left Sidebar</option>
		<option value="gallery-one-column.html">Gallery One Column With Right Sidebar</option>
		<option value="gallery-two-column.html">Gallery Two Column With Right Sidebar</option>
		<option value="recent-events.html">Recent Events</option>
		<option value="event-single-page.html">Single Event Page</option>
		<option value="doctors-timetable.html">Doctor's Timetable</option>
		<option value="our-team.html">Our Team With Sidebar</option>
		<option value="our-team-wos.html">Our Team Without Sidebar</option>
		<option value="faqs.html">Faqs</option>
		<option value="404.html">Error404</option>
		<option value="search-results.html">Search Result Not Found</option>
		<option value="search-results-found.html">Search Result Found</option>
		<option value="service.html">Service With Sidebar</option>
		<option value="service-wos.html">Service Without Sidebar</option>
		<option value="elements.html">Features</option>
		<option value="column-page.html">Column Page</option>
		<option value="blog-page.html">Blog</option>
		<option value="single-post-image.html">Single Page With Image</option>
		<option value="single-post-video.html">Single Page With Video</option>
		<option value="single-post-gallery.html">Single Page With Gallery</option>
		<option value="about-us.html">About Us</option>
		<option value="contact-us.html">Contact Us</option>
	</select><!-- Select Navigation On Responsive Version -->
  </div>
</header><!-- Header -->

@yield('content')


<footer>
  <div class="container">
    <div class="widget">
      <h3 class="footer-title">Siguenos</h3>
      <div class="follow">
        <ul>
          <li><a href="default.htm" title=""><i class="theme-icon twitter"></i></a></li>
          <li><a href="default.htm" title=""><i class="theme-icon facebook"></i></a></li>
          <li><a href="default.htm" title=""><i class="theme-icon youtube"></i></a></li>
          <li><a href="default.htm" title=""><i class="theme-icon rss"></i></a></li>
        </ul>
        <p>Lorem Ipsum is simply dummy text of the prinwng and typesetting industry.</p>
      </div>
    </div> <!-- Follow Us -->
    <div class="widget">
      <h3 class="footer-title">D&oacute;nde nos encontramos</h3>
      <div class="location">
        <!-- <iframe width="100" height="150" src="http://maps.google.com/@ie=UTF8&ll=10.487812,-22.675781&spn=45.061776,86.572266&t=m&z=4&output=embed"></iframe> -->
        <span class="map-shadow"></span>
        <ul>
          <li><i class="theme-icon email"></i><span class="source">by e-mail;</span> <span class="detail">info@yoursite.com</span> </li>
          <li><i class="theme-icon phone"></i><span class="source">by phone;</span> <span class="detail">+900-78601</span> </li>
          <li><i class="theme-icon home"></i><span class="source">Address;</span> <span class="detail">123, Seward Street, Os kla Home City, USA</span> </li>
        </ul>
      </div>
    </div> <!-- Location -->
    <div class="widget">
      <h3 class="footer-title">Contactenos</h3>
      <div class="contact-form">
        <form>
          <input type="text" placeholder="Nombre">
          <input type="email" placeholder="Email">
          <textarea rows="4" placeholder="Mensaje"></textarea>
          <input type="Submit" value="Enviar" class="submit">
        </form>
      </div>
    </div> <!-- Contact Us Form -->
    <div class="widget">
      <h3 class="footer-title">Galer&iacute;a</h3>
		<div class="flickr-images">
			<a href="#"><img src="img/resource/flickr1.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr2.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr3.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr4.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr5.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr6.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr7.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr8.jpg" alt="" /></a>
			<a href="#"><img src="img/resource/flickr9.jpg" alt="" /></a>
		</div>
	</div>
  </div>
</footer><!-- Footer -->

<div class="bottom-footer">
  <div class="container">
    <p>Todos los derechos reservados @ 2014 <a href="http://www.ics.com.ni" title="">Instituto de Ciencias de la Investigaci&oacute;n (ICS)</a></p>
    <ul>
      <li><a href="/" title="">Inicio</a></li>
      <li><a href="doctors-timetable.html" title="">Preguntas frecuentes</a></li>
      <li><a href="service.html" title="">Mapa del sitio</a></li>
      <li><a href="#" title="">Contactenos</a></li>
    </ul>
  </div>
</div><!-- Bottom Footer Strip -->
</div>

<!-- SCRIPTS -->
{{ HTML::script('packages/webkit/js/jquery.min.js'); }}
{{ HTML::script('packages/webkit/js/script.js'); }}
{{ HTML::script('packages/webkit/js/bootstrap.min.js'); }}

<!-- Camera Slider -->
{{ HTML::script('packages/webkit/js/camera/jquery.easing.1.3.js'); }}
{{ HTML::script('packages/webkit/js/camera/camera.min.js'); }}

<!-- Round About Carousel -->
{{ HTML::script('packages/webkit/js/jquery.roundabout.min.js'); }}
<!-- tiny carousel script -->
{{ HTML::script('packages/webkit/js/jquery.tinycarousel.min.js'); }}
<!-- lightbox Script -->
{{ HTML::script('packages/webkit/js/html5lightbox.js'); }}
@yield('scripts')
<body>

