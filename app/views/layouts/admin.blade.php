<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>ICS Administration @if( $title ) - {{ $title }} @endif </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  {{ HTML::style('packages/webkit/css/bootstrap.css'); }}
  {{ HTML::style('packages/webkit/css/font-awesome.css'); }}
  {{ HTML::style('packages/webkit/css/admin/style.css'); }}

  <!-- If it need some extra styles -->
  @yield("styles")
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  {{ HTML::script('packages/webkit/js/html5shim.js'); }}
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>
<body>

<header>
<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="container">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
      <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
      <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
      <!-- Site name for smallar screens -->
      <a href="index.html" class="navbar-brand">Instituto de Ciencias de la Investigaci&oacute;n <span class="bold">ICS</span></a>
    </div>

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
        
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="{{ public_path() }}/webkit/img/user1.png"> John <span class="bold">Doe</span> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
              <li><a href="login.html"><i class="fa fa-key"></i> Logout</a></li>
            </ul>
          </li>
          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Photo Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete</span>
          </div>
          </div>

                <hr />

                <!-- Progress bar -->
                <p>Video Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete</span>
          </div>
          </div> 

                <hr />             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "fa fa-spin" class to rotate icon. -->
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Photos to Server</p>
                <hr />
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-big leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-comments"></i><span class="label label-info">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-comments"></i> Chats</h5>
                    <!-- Use hr tag to add border -->                   
                  </li>
                  <li>
                    <hr />
                    <!-- List item heading h6 -->
                    <h6><a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li>
            
            <!-- Message button with number of latest messages count-->
            <li class="dropdown dropdown-big messages-dd leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i> <span class="label label-primary">3</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-envelope-alt"></i> Messages</h5>
                    <!-- Use hr tag to add border -->
                    
                  </li>
                  <li>
                    <hr /><!-- List item heading h6 -->
                    <h6><a href="#">Hello how are you?</a></h6>
                    <!-- List item para -->
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Today is wonderful?</a></h6>
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-user"></i> <span class="label label-success">7</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-user"></i> Users</h5>
                    <!-- Use hr tag to add border -->                    
                  </li>
                  <li>
                    <hr />
                    <!-- List item heading h6-->
                    <h6><a href="#">John Doe</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Iron Man</a> <span class="label label-important pull-right">Premium</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Salamander</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li> 
        </ul>
      </nav>

    </div>
  </div>
</header>
<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
        <!-- Search form -->
        <form class="navbar-form" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar">
            <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li><a href="#"><i class="fa fa-home"></i> <span>Panel</span></a></li>
          <li class="has_sub"><a href="#" class="open"><i class="fa fa-list-alt"></i> <span>&Aacute;rticulos</span> <!--<span class="pull-right"><i class="fa fa-chevron-left"></i></span>--></a>
            <!-- <ul>
              <li><a href="widgets1.html">Widgets #1</a></li>
              <li><a href="widgets2.html">Widgets #2</a></li>
              <li><a href="widgets3.html">Widgets #3</a></li>
            </ul> -->
          </li>
          <li class="has_sub"><a href="#" ><i class="fa fa-file-text"></i> <span>P&aacute;ginas</span> <!--<span class="pull-right"><i class="fa fa-chevron-left"></i></span>--></a>
            <!-- <ul>
              <li><a href="media.html">Media</a></li>
              <li><a href="statement.html">Statement</a></li>
              <li><a href="error.html">Error</a></li>
              <li><a href="error-log.html">Error Log</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="grid.html">Grid</a></li>
            </ul> -->
          </li>
          <li><a href="#"><i class="fa fa-comments-o"></i> <span>Comentarios</span></a></li>
          <li class="has_sub"><a href="#"><i class="fa fa-camera"></i> <span>Galer&iacute;as</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
          <ul>
              <li><a href="#"><i class="fa fa-file-image-o"></i> Im&aacute;genes</a></li>
              <li><a href="#"> <i class="fa fa-youtube"></i> Videos</a></li>
            </ul>
          </li>                 
          <!-- <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a></li> 
          <li><a href="tables.html" class="open"><i class="fa fa-table"></i> <span>Tables</span></a></li>
          <li><a href="forms.html"><i class="fa fa-tasks"></i> <span>Forms</span></a></li>
          <li><a href="ui.html"><i class="fa fa-magic"></i> <span>User Interface</span></a></li>
          <li><a href="typography.html"><i class="fa fa-edit"></i> <span>Typography</span></a></li>
          <li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
          <li class="has_sub"><a href="#"><i class="fa fa-sitemap"></i> <span>Extra Pages #1</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="post.html">Post</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="support.html">Support</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </li> 
          
          <li class="has_sub"><a href="#"><i class="fa fa-heart"></i> <span>3 Level Menu</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#"><i class="fa fa-bookmark"></i> Subitem 1</a></li>
              <li class="has_sub"><a href="#"><i class="fa fa-glass"></i> Subitem 2 <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                  <ul>
                    <li><a href="#"><i class="fa fa-bell"></i> Subitem 1</a></li>
                    <li><a href="#"><i class="fa fa-camera"></i> Subitem 2</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li class="has_sub"><a href="#"><i class="fa fa-folder"></i> <span>4 Level Menu</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#"><i class="fa fa-thumb-tack"></i> Subitem 1</a></li>
              <li class="has_sub"><a href="#"><i class="fa fa-thumbs-up"></i> Subitem 2 <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                  <ul>
                    <li><a href="#"><i class="fa fa-trophy"></i> Subitem 1</a></li>
                    <li class="has_sub"><a href="#"><i class="fa fa-share"></i> Subitem 2 <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                          <li><a href="#"><i class="fa fa-microphone"></i> Subitem 1</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> Subitem 2</a></li>
                        </ul>
                    </li>
                  </ul>
              </li>
            </ul>
          </li> -->
        </ul>
    </div>
    <!-- Sidebar ends -->

@yield("content")

<!-- JS -->
{{ HTML::script('packages/webkit/js/jquery.js'); }}
{{ HTML::script('packages/webkit/js/bootstrap.js'); }}
@yield("scripts")
</body>
</html>