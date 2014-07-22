@extends('layouts.master')

@section('content')

@if ($page->Slug == 'mision-vision-y-objetivos')

<section>
	<div class="full-page-head">
		<div class="full-page-title">
			<h1>Nuestra Misi&oacute;n</h1>
			<p>Promover la investigación básica y aplicada de alta calidad, estimulando la búsqueda de nuevos conocimientos, a través de la promoción de enfoques innovadores, creativos y el establecimiento de alianzas claves que permitan contribuir a dar respuesta a los problemas de salud prioritarios que afectan a nuestra comunidad, en especial a los grupos de población con menos recursos.</p>
            <p>Ofrecer programas académicos de grado y posgrado, acreditados y reconocidos nacional e internacionalmente, utilizando innovadoras técnicas pedagógicas y didácticas, con los más altos estándares en la educación en ciencias de la salud, conducentes a formar profesionales con elevado nivel técnico y científico y con gran vocación de servicios, y sentido ético, que sobresalgan en la práctica profesional, en la investigación en ciencias de la salud y en su fuerte compromiso social, capaces de abordar al objeto de la salud-enfermedad como un proceso integral y multideterminado en los diferentes campos que integran las Ciencias de la Salud.</p>
			
			<p>Brindar servicios de salud con calidad, calidez y accesibles, enfatizando la prevención, el diagnóstico temprano, el manejo multidisciplinario de los problemas de salud y la promoción de estilos de vida saludable.</p>
			<p>Conformar un espacio académico en el que la interacción multidisciplinar e interdisciplinar y la gestión del conocimiento, sean ejes fundamentales del modelo del ICS de producción y difusión de conocimiento científico, de formación de profesionales, y de vinculación con los sectores poblacionales y de salud.
            </p>
		</div>        
	</div><!-- Full Width Page Title -->
        	
	<div class="intro">
		<div class="container">
			<div class="intro-box">
				<div class="intro-box-title third">
					<h2>Nuestra visi&oacute;n</h2>
				</div>
				<p>Desde el instituto aspiramos a contribuir continuamente al mejoramiento de la salud y calidad de vida de las personas, especialmente de los grupos de población con menos recursos, a través de la investigación, educación y prestación de servicios de salud. Y no queremos hacerlo solos. Creemos en el trabajo colaborativo y en la suma de talentos y voluntades para alcanzar los mejores resultados. </p>
				<p>Nuestro instituto será visto como un modelo exitoso de integración de la investigación, educación y prestación de servicios de salud, y de la gestión del conocimiento, enmarcado en un constante proceso de crecimiento e innovación. No nos conformamos con nada menos que la excelencia. Excelencia medida a través de evidencias objetivas</p>
				<p>Seremos reconocidos nacional e internacionalmente por la calidad, relevancia y el impacto de nuestra producción científica, de los profesionales de la salud que formamos, y de los servicios que prestamos a la comunidad. También seremos reconocidos por contar con un grupo de colaboradores altamente calificados, emprendedores, entusiastas, solidarios y socialmente responsables. Los mejores estudiantes querrán aprovechar nuestra oferta educativa y los profesionales más calificados desearán colaborar en las distintas iniciativas impulsadas por nuestro instituto.</p>
			</div> <!-- Our Company -->
			<div class="intro-box">
				<div class="intro-box-title">
					<h2>Nuestros objetivos</h2>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis nisi sed turpis mattis a ornaire nisl iaculis. Praesent interdum tristique nibh vitae eleifend. Sed ut lectus ut odio vehicula ultrices. Etiam eget odio urna. Fusce placerat, eros a lobortis faucibus, lacus orci scelerisque justo, nec aliquam dolor ligula id ipsum.</p>
			</div> <!-- Our Mission -->
		</div>
	</div> <!-- Introduction Section -->


                
</section>

@else

<section id="inner-page">
  <div class="container">
    <div class="left-side-content span8">
      <h1>{{$page->Pagina}}</h1>
      <!-- <div class="post-image">
        <img src="img/resource/banner2.jpg" alt="" />
      </div>--><!-- Post Image -->
       
      
        <div class="post-intro">
	       <div class="single-post-meta">
	          <!-- <span><i class="theme-icon user-small"></i>Posted By; <a href="#" title="">Admin</a></span> -->
	          <div class="single-post-social">
	            <ul>
	                <li><a href="#" title=""><i class="theme-icon twitter"></i></a></li>
	                <li><a href="#" title=""><i class="theme-icon facebook"></i></a></li>
	                <li><a href="#" title=""><i class="theme-icon gplus"></i></a></li>
	              </ul>
	          </div>
	        </div><!-- Post Meta -->
        </div>
              
        <p class="single-post-desc">{{$page->Texto}}</p>
        <div class="tag-clouds">
          <h4>Etiquetas: </h4>
          <?php $tags = explode(',', $page->Etiquetas) ?>
          @foreach($tags as $tag)
            <a title="Etiquetas ICS {{ $tag }}" href="{{ action('TagController@show', array('tag' => $tag )); }}">{{ $tag }}</a>
          @endforeach
        </div><!-- Tags -->  
        <div class="comment-box">
          <h5>3 Comments</h5>        
          <ul>
            <li>
            <img class="avatar" src="img/resource/avatar1.jpg" alt="" />
            <div class="comment-details">
              <h6>DDSTUDIOS <span>7 july 2013</span></h6>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligulea, eget lacinia odio sem nec elit. Cras mattis consectetv
              purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
              <a href="#" class="reply" title="">Reply</a>
            <span class="replies">Replies</span>
            </div>
            <ul>
              <li>
                <img class="avatar" src="img/resource/avatar2.jpg" alt="" />
                <div class="comment-details">
                  <h6>GAZETTE <span>7 july 2013</span></h6>
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligulea, eget lacinia odio sem nec elit. Cras mattis consectetv
      purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                  <a href="#" class="reply" title="">Reply</a>
                </div>
              </li><!-- Reply -->
            </ul>
          </li><!-- Comment -->
          <li>
            <img class="avatar" src="img/resource/avatar3.jpg" alt="" />
            <div class="comment-details">
              <h6>DDSTUDIOS <span>7 july 2013</span></h6>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligulea, eget lacinia odio sem nec elit. Cras mattis consectetv
              purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
              <a href="#" class="reply" title="">Reply</a>
            </div>
          </li><!-- Comment -->
          <li>
            <img class="avatar" src="img/resource/avatar1.jpg" alt="" />
            <div class="comment-details">
              <h6>DDSTUDIOS <span>7 july 2013</span></h6>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligulea, eget lacinia odio sem nec elit. Cras mattis consectetv
              purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
              <a href="#" class="reply" title="">Reply</a>
            </div>
          </li><!-- Comment -->
        </ul>
                      
        <div class="message">
          <h4><i class="theme-icon big comment-icon"></i>Deje su comentario</h4>
          <p>Your email address will not be published. Required fields are marked. <span class="star">*</span></p>
        
          <form class="row-fluid">
            <div class="span4">
              <label class="control-label">Nombre<span class="star"> *</span></label>
              <input class="input-block-level" type="text">
            </div>
            <div class="span4">
              <label class="control-label">Correo<span class="star"> *</span></label>
              <input class="input-block-level" type="text">
            </div>
            <div class="span12">
              <label class="control-label">Comentario<span class="star"> *</span></label>
              <textarea class="input-block-level" rows="10"></textarea>
            </div>
            <button type="button" class="submit-btn">Enviar comentario</button>
          </form>
        </div><!-- Message Box --> 
      </div>
    </div><!-- Left Side Content -->

<aside class="span4">
		<form id="search-form" action="search-results.html">
			<input class="search-input" type="text" placeholder="search">
			<input class="search-submit" type="submit" value="">            
		</form><!-- Search Form -->
      
		<div class="tabbable sidebar-tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#popular">Popular Posts</a></li>
				<li class=""><a data-toggle="tab" href="#latest">Latest Posts</a></li>
				<li class=""><a data-toggle="tab" href="#comments">Comments</a></li>
			</ul>
			<div class="tab-content">
				<div id="popular" class="tab-pane fade active in">
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs1.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>65 views</span>
						</div>
					</div>
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs2.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>43 views</span>
						</div>
					</div>
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs3.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>25 views</span>
						</div>
					</div>
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs4.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>8 views</span>
						</div>
					</div>
				</div> <!-- Popular Posts -->
				<div id="latest" class="tab-pane fade in">
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs3.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>20 views</span>
						</div>
					</div>
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs4.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>16 views</span>
						</div>
					</div>
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs1.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>13 views</span>
						</div>
					</div>
					<div class="tab-post">
						<img src="img/resource/sidebar-tabs2.jpg" alt="" />
						<div class="tabpost-detail">
							<p><a href="#" title="">Duis mollis, est non commodo luctus, nisi erat porttitor...</a></p>
							<span><i class="theme-icon calender"></i>September 5, 2012</span>
							<span><i class="theme-icon views"></i>5 views</span>
						</div>
					</div>
				</div> <!-- Latest Posts -->
				<div id="comments" class="tab-pane fade in">
					<div class="tab-post">
						<div class="tabpost-detail">
							<p><a title="" href="#">"New styles on just reduced mercdise! save on hue reds of just reduced items and sign up with nike."</a></p>
							<span><i class="theme-icon user-small"></i>By: <a href="#" title="">Alan Bond</a><i class="theme-icon post-cat"></i><a href="#" title="">New</a></span>
						</div>
					</div>
					<div class="tab-post">
						<div class="tabpost-detail">
							<p><a title="" href="#">"New styles on just reduced mercdise! save on hue reds of just reduced items and sign up with nike."</a></p>
							<span><i class="theme-icon user-small"></i>By: <a href="#" title="">Alan Bond</a><i class="theme-icon post-cat"></i><a href="#" title="">New</a></span>
						</div>
					</div>
					<div class="tab-post">
						<div class="tabpost-detail">
							<p><a title="" href="#">"New styles on just reduced mercdise! save on hue reds of just reduced items and sign up with nike."</a></p>
							<span><i class="theme-icon user-small"></i>By: <a href="#" title="">Alan Bond</a><i class="theme-icon post-cat"></i><a href="#" title="">New</a></span>
						</div>
					</div>
					<div class="tab-post">
						<div class="tabpost-detail">
							<p><a title="" href="#">"New styles on just reduced mercdise! save on hue reds of just reduced items and sign up with nike."</a></p>
							<span><i class="theme-icon user-small"></i>By: <a href="#" title="">Alan Bond</a><i class="theme-icon post-cat"></i><a href="#" title="">New</a></span>
						</div>
					</div>
				</div> <!-- Posts Comments -->
			</div>

		</div><!--  Sidebar Tabs -->
      
		<div class="sidebar-widget">
			<div class="sidebar-widget-title">
				<h4>Popular <span>Video</span></h4>
			</div>
			<div class="sidebar-video">
				<img src="img/resource/sidebar-video-image.jpg" alt="" />
				<a class="html5lightbox" href="http://player.vimeo.com/video/33741794" title="">
					<span class="play-icon"></span>
				</a>
				<a class="html5lightbox" data-group="sidebar-video" title="" href="http://player.vimeo.com/video/33741794">
					<div class="video-title">A New Way To Buy</div>
				</a> 
			</div>
		</div><!-- Video Widget -->
            
		<div class="sidebar-widget">
			<div class="sidebar-widget-title">
				<h4>Gallery <span>Items</span></h4>
			</div>
			<div class="sidebar-gallery">
				<div class="gallery-item">
					<a class="html5lightbox" data-group="side-gallery" title="" href="img/resource/gallery-item1.jpg">
						<img src="img/resource/gallery-item1.jpg" alt="" />
					</a>
				</div>
				<div class="gallery-item">
					<a class="html5lightbox" data-group="side-gallery" title="" href="img/resource/gallery-item2.jpg">
						<img src="img/resource/gallery-item2.jpg" alt="" />
					</a>
				</div>
				<div class="gallery-item">
					<a class="html5lightbox" data-group="side-gallery" title="" href="img/resource/gallery-item3.jpg">
						<img src="img/resource/gallery-item3.jpg" alt="" />
					</a>
				</div>
				<div class="gallery-item">
					<a class="html5lightbox" data-group="side-gallery" title="" href="img/resource/gallery-item4.jpg">
						<img src="img/resource/gallery-item4.jpg" alt="" />
					</a>
				</div>
				<div class="gallery-item">
					<a class="html5lightbox" data-group="side-gallery" title="" href="img/resource/gallery-item5.jpg">
						<img src="img/resource/gallery-item5.jpg" alt="" />
					</a>
				</div>
				<div class="gallery-item">
					<a class="html5lightbox" data-group="side-gallery" title="" href="img/resource/gallery-item6.jpg">
						<img src="img/resource/gallery-item6.jpg" alt="" />
					</a>
				</div>
			</div>
		</div><!-- Siedbar Gallery -->
      
      
		<div class="sidebar-widget">
			<div class="sidebar-widget-title">
				<h4>Like <span>Us</span></h4>
			</div>
			<a href="#" title="" class="likes">
				<img src="img/resource/fb-likes.png" alt="" />
				10, 345
				<span>Likes</span>
			</a> 
			<a href="#" title="" class="likes">
				<img src="img/resource/gplus-likes.png" alt="" />                    
				10, 345
				<span>Likes</span>
			</a> 
			<a href="#" title="" class="likes">
				<img src="img/resource/tweet-likes.png" alt="" />                    
				10, 345
				<span>Likes</span>
			</a> 
		</div><!-- Like Us -->
      
	</aside><!-- Side Bar -->
    
  </div>  
</section>
</div>

@endif

@stop