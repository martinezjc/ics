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
			<li><a href="index.html" title="">INICIO</a></li>
			<li><a href="#" title="">GALLERY</a>
				<ul class="drop-down">
					<li><a href="gallery-two-column-wos.html" title="">2 Column Without SideBar</a></li>
					<li><a href="gallery-three-column-wos.html" title="">3 Column Without Sidebar</a></li>
					<li><a href="gallery-four-column-wos.html" title="">4 Column Without Sidebar</a></li>
					<li class="double-drop"><a href="#" title="">Gallery With Left Sidebar</a>
						<ul class="second drop-down">
							<li><a href="gallery-one-column-left-sidebar.html" title="">1 Column</a></li>
							<li><a href="gallery-two-column-left-sidebar.html" title="">2 Column</a></li>
						</ul> <!-- Double Drop Down Menu -->
					</li><!-- Gallery With Left Sidebar -->
					<li class="double-drop"><a href="#" title="">Gallery With Right Sidebar</a>
						<ul class="second drop-down">
							<li><a href="gallery-one-column.html" title="">1 Column</a></li>
							<li><a href="gallery-two-column.html" title="">2 Column</a></li>
						</ul> <!-- Double Drop Down Menu -->
					</li><!-- Gallery With Right Sidebar -->
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="default.htm" title="">PAGES</a> 
				<ul class="drop-down">
					<li class="double-drop"><a href="#" title="">Events</a>
						<ul class="second drop-down">
							<li><a href="recent-events.html" title="">Recent Events</a></li>
							<li><a href="event-single-page.html" title="">Event Single Page</a></li>
						</ul> <!--Double Drop Down Menu -->
					</li>
					<li><a href="doctors-timetable.html" title="">Doctor's Time Table</a></li>
					<li class="double-drop"><a href="#" title="">Our Team</a>
						<ul class="second drop-down">
							<li><a href="our-team.html" title="">Our Team With Sidebar</a></li>
							<li><a href="our-team-wos.html" title="">Our Team Without Sidebar</a></li>
						</ul> <!-- Double Drop Down Menu -->
					</li>
					<li><a href="faqs.html" title="">FAQS</a></li>
					<li><a href="404.html" title="">Error 404 page</a></li>
					<li><a href="search-results.html" title="">Search Results Not Found</a></li>
					<li><a href="search-results-found.html" title="">Search Results Found</a></li>
					<li class="double-drop"><a href="#" title="">Services</a>
						<ul class="second drop-down">
							<li><a href="service.html" title="">Services With Sidebar</a></li>
							<li><a href="service-wos.html" title="">Services Without Sidebar</a></li>
						</ul> <!-- Double Drop Down Menu -->
					</li>
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="#" title="">FEATURES</a>
				<ul class="drop-down">
					<li><a href="elements.html#alignment" title="">Image Alignment</a></li>
					<li><a href="elements.html#buttons" title="">Buttons</a></li>
					<li><a href="elements.html#alertboxes" title="">Alertboxes</a></li>
					<li><a href="elements.html#skills" title="">Skills</a></li>
					<li><a href="elements.html#tabs" title="">Tabs</a></li>
					<li><a href="elements.html#toggles" title="">Toggles</a></li>
					<li><a href="elements.html#pricing" title="">Pricing Table</a></li>
					<li><a href="column-page.html" title="">Column Page</a></li>
				</ul><!-- Drop Down Menu -->
			</li>
			<li><a href="blog-page.html" title="">BLOG</a>
				<ul class="drop-down">
					<li><a href="single-post-image.html" title="">Single Post With Image</a></li>
					<li><a href="single-post-video.html" title="">Single Post With Video</a></li>
					<li><a href="single-post-gallery.html" title="">Single Post With Gallery</a></li>
					<li><a href="single-post-slider.html" title="">Single Post With Slider</a></li>
				</ul> <!--Double Drop Down Menu -->
			</li>
			<li><a href="about-us.html" title="">ABOUT US</a></li>
			<li><a href="contact-us.html" title="">CONTACT US</a></li>
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
      <li><a href="doctors-timetable.html" title=""></a></li>
      <li><a href="service.html" title=""></a></li>
      <li><a href="#" title=""></a></li>
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

