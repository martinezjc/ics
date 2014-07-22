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
    	<a href="index.html" title=""><img src="img/resource/logo-ics.png" width="130" alt="Logo Instituto de Ciencias de la Salud ICS" /></a>
    	<br/><p class="logo-title">Instituto de Ciencias de la Salud</p>
    </div><!-- Logo --> 
    
	<div id="menu">
		<ul>
			<li><a href="{{ action('HomeController@showHome'); }}" title="">INICIO</a></li>
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
					<li><a href="elements.html#toggles" title="">Auto-evaluaci&oacute;n</a></li>
					<li><a href="elements.html#pricing" title="">El pensamiento de Paulo Freire</a></li>
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="contact-us.html" title="">CONTACTENOS</a></li>
		</ul>
	</div><!-- Menu -->
	<select class="ipadMenu">
		<option value="{{ action('HomeController@showHome'); }}">INICIO</option>
		<option value="">VINCULOS CON LA COMUNIDAD</option>
		<option value="">Clinica universitaria integral</option>
		<option value="">Clinica m&oacute;vil comunitaria</option>
		<option value="">Programas de promoci&oacute;n y educaci&oacute;n para la salud</option>
		<option value="">Social y seguridad en el trabajo</option>
		<option value="">Salud y bienestar en la tercera edad</option>
		<option value="">Salud y actividad f&iacute;sica</option>
		<option value="">Salud y discapacidad</option>
		<option value="">Club de vida saludable</option>
		<option value="">Laboratorio de habilidades clinicas</option>
		<option value="">Programa de fortalecimiento del autoestudio y aprendizaje (PFAA)</option>
		<option value="">Unidades especiales</option>
		<option value="">Programa de "Turismo cientifico"</option>
		<option value="">ICS INTERNACIONAL</option>
		<option value="">Programa de Cooperaci&oacute;n en Educaci&oacute;n Superior Cuba - Nicaragua</option>
		<option value="">Congreso Internacional de Educaci&oacute;n Superior "Universidad 2014"</option>
		<option value="">ACERCA DE LA UPF</option>
		<option value="">Breve Historia</option>
		<option value="">Misi&oaccute;n, visi&oacute;n y objetivos estrategicos</option>
		<option value="">Organizaci&oacute;n y autoridades</option>
		<option value="">Modelos institucionales</option>
		<option value="">Proyecci&oacute;n social</option>
		<option value="">Auto-evaluaci&oacute;n</option>
		<option value="">El pensamiento de Paulo Freire</option>
		<option value="">CONTACTENOS</option>
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
      <h3 class="footer-title">D&oacute;nde encontrarnos</h3>
      <div class="location">
        <!-- <iframe width="100" height="150" src="http://maps.google.com/@ie=UTF8&ll=10.487812,-22.675781&spn=45.061776,86.572266&t=m&z=4&output=embed"></iframe> -->
        <span class="map-shadow"></span>
        <ul>
          <li><i class="theme-icon email"></i><span class="source">E-mail:</span> <span class="detail">ics@upf.edu.ni</span> </li>
          <li><i class="theme-icon phone"></i><span class="source">Telefono;</span> <span class="detail">+900-78601</span> </li>
          <li><i class="theme-icon home"></i><span class="source">Direcci&oacute;n:</span> <span class="detail">Lorem ipsum text</span> </li>
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

