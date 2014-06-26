@extends('layouts.admin')

@section('styles')
{{ HTML::style('packages/webkit/css/jquery-ui-1.9.2.custom.min.css'); }}
{{ HTML::style('packages/webkit/css/fullcalendar.css'); }}
{{ HTML::style('packages/webkit/css/prettyPhoto.css'); }}
{{ HTML::style('packages/webkit/css/rateit.css'); }}
{{ HTML::style('packages/webkit/css/bootstrap-datetimepicker.min.css'); }}
{{ HTML::style('packages/webkit/css/jquery.cleditor.css'); }}
{{ HTML::style('packages/webkit/css/uniform.default.css'); }}
{{ HTML::style('packages/webkit/css/daterangepicker-bs3.css'); }}
{{ HTML::style('packages/webkit/css/bootstrap-switch.css'); }}
{{ HTML::style('packages/webkit/js/datatables/css/dataTables.bootstrap.css'); }}
{{ HTML::style('packages/webkit/css/widgets.css'); }}
{{ HTML::style('packages/webkit/css/jquery.gritter.css'); }}
@stop

@section('content')
<header>
<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="container">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
      <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
		  <!-- Site name for smallar screens -->
		  <a href="index.html" class="navbar-brand">Mood<span class="bold">Strap</span></a>
		</div>

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
        
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="/webkit/img/user1.png"> John <span class="bold">Doe</span> <b class="caret"></b>              
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
    				<input type="text" class="form-control" placeholder="Search">
            <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
    			</div>
    		</form>
        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
          <li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> <span>Widgets</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="widgets1.html">Widgets #1</a></li>
              <li><a href="widgets2.html">Widgets #2</a></li>
              <li><a href="widgets3.html">Widgets #3</a></li>
            </ul>
          </li>                             
          <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a></li> 
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
          <li class="has_sub"><a href="#"><i class="fa fa-file-text"></i> <span>Extra Pages #2</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="media.html">Media</a></li>
              <li><a href="statement.html">Statement</a></li>
              <li><a href="error.html">Error</a></li>
              <li><a href="error-log.html">Error Log</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="grid.html">Grid</a></li>
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
          </li>
        </ul>
    </div>
    <!-- Sidebar ends -->

  	  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left">Tables</h2>
        <div class="clearfix"></div>
        <!-- Breadcrumb -->
        <div class="bread-crumb">
          <a href="index.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Tables</a>
        </div>
        
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->

	    <!-- Matter -->

	    <div class="matter">
        <div class="container">

          <!-- Table -->

            <div class="row">

              <div class="col-md-12">

                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Location</th>
                          <th>Age</th>
                          <th>Education</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Ashok</td>
                          <td>Norway</td>
                          <td>23</td>
                          <td>B.Tech</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Kumarasamy</td>
                          <td>USA</td>
                          <td>22</td>
                          <td>BE</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Babura</td>
                          <td>UK</td>
                          <td>43</td>
                          <td>PhD</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>John Doe</td>
                          <td>China</td>
                          <td>73</td>
                          <td>PUC</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Santhosh</td>
                          <td>Japan</td>
                          <td>43</td>
                          <td>M.Tech</td>
                        </tr>                                                                        
                      </tbody>
                    </table>

                    <div class="widget-foot">

                      
                        <ul class="pagination pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      
                      <div class="clearfix"></div> 

                    </div>

                  </div>
                </div>



                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Location</th>
                          <th>Date</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>1</td>
                          <td>John Doe</td>
                          <td>Norway</td>
                          <td>23/12/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                          
                          </td>
                        </tr>


                        <tr>
                          <td>2</td>
                          <td>Jane Doe</td>
                          <td>USA</td>
                          <td>13/02/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

                          </td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Yoshi Morimoto</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Chuck Bartowski</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Cody Federer</td>
                          <td>Singapore</td>
                          <td>13/32/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>                                                            

                      </tbody>
                    </table>

                    <div class="widget-foot">

                     
                        <ul class="pagination pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                     
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>

             <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Dynamic Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

                    <table id="datatable" class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Location</th>
                          <th>Date</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>1</td>
                          <td>John Doe</td>
                          <td>Norway</td>
                          <td>23/12/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                          
                          </td>
                        </tr>


                        <tr>
                          <td>2</td>
                          <td>Jane Doe</td>
                          <td>USA</td>
                          <td>13/02/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

                          </td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Yoshi Morimoto</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Chuck Bartowski</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Cody Federer</td>
                          <td>Singapore</td>
                          <td>13/32/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>
                        <tr>
                          <td>1123</td>
                          <td>Alves Buraya</td>
                          <td>Norway</td>
                          <td>17/12/2011</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                          
                          </td>
                        </tr>


                        <tr>
                          <td>42</td>
                          <td>Carlos Santana</td>
                          <td>Spain</td>
                          <td>13/02/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

                          </td>
                        </tr>

                        <tr>
                          <td>34</td>
                          <td>John Lennon</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>14</td>
                          <td>Lana Del Rey</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>
                        
                        <tr>
                          <td>34</td>
                          <td>John Lennon</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>14</td>
                          <td>Lana Del Rey</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>54</td>
                          <td>Tom Jones</td>
                          <td>Singapore</td>
                          <td>13/32/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr> 
                        <tr>
                          <td>1</td>
                          <td>John Doe</td>
                          <td>Norway</td>
                          <td>23/12/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                          
                          </td>
                        </tr>


                        <tr>
                          <td>2</td>
                          <td>Jane Doe</td>
                          <td>USA</td>
                          <td>13/02/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

                          </td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Yoshi Morimoto</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Chuck Bartowski</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Cody Federer</td>
                          <td>Singapore</td>
                          <td>13/32/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>
                        <tr>
                          <td>1123</td>
                          <td>Alves Buraya</td>
                          <td>Norway</td>
                          <td>17/12/2011</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                          
                          </td>
                        </tr>


                        <tr>
                          <td>42</td>
                          <td>Carlos Santana</td>
                          <td>Spain</td>
                          <td>13/02/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

                          </td>
                        </tr>

                        <tr>
                          <td>34</td>
                          <td>John Lennon</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>14</td>
                          <td>Lana Del Rey</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>
                        
                        <tr>
                          <td>34</td>
                          <td>John Lennon</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>14</td>
                          <td>Lana Del Rey</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>54</td>
                          <td>Tom Jones</td>
                          <td>Singapore</td>
                          <td>13/32/2012</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>                                                            

                      </tbody>
                    </table>

                    <div class="widget-foot">
                      <br><br>
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>


              </div>

            </div>


            <div class="row">

              <div class="col-md-6">
                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Location</th>
                          <th>Type</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>1</td>
                          <td>John Doe</td>
                          <td>Norway</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>

                        </tr>


                        <tr>
                          <td>2</td>
                          <td>Jane Doe</td>
                          <td>USA</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>

                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Yoshi Morimoto</td>
                          <td>Japan</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>

                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Chuck Bartowski</td>
                          <td>Bangkok</td>
                          <td>Paid</td>
                          <td><span class="label label-success">Active</span></td>

                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Cody Federer</td>
                          <td>Singapore</td>
                          <td>Free</td>
                          <td><span class="label label-danger">Banned</span></td>
      
                        </tr>                                                            

                      </tbody>
                    </table>

                    <div class="widget-foot">

                     
                        <ul class="pagination pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                     
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>
              </div>

              <div class="col-md-6">

                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Location</th>
                          <th>Date</th>
                          <th>Type</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>1</td>
                          <td>John Doe</td>
                          <td>Norway</td>
                          <td>23/12/2012</td>
                          <td>Paid</td>
                        </tr>


                        <tr>
                          <td>2</td>
                          <td>Jane Doe</td>
                          <td>USA</td>
                          <td>13/02/2012</td>
                          <td>Free</td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Yoshi Morimoto</td>
                          <td>Japan</td>
                          <td>12/03/2012</td>
                          <td>Paid</td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Chuck Bartowski</td>
                          <td>Bangkok</td>
                          <td>03/11/2012</td>
                          <td>Paid</td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Cody Federer</td>
                          <td>Singapore</td>
                          <td>13/32/2012</td>
                          <td>Free</td>
                        </tr>                                                            

                      </tbody>
                    </table>

                    <div class="widget-foot">

                      
                        <ul class="pagination pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>

              </div>

            </div>

        </div>
		  </div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
@stop

@section('scripts')
{{ HTML::script('packages/webkit/js/jquery-ui-1.9.2.custom.min.js'); }} <!-- jQuery UI -->
{{ HTML::script('packages/webkit/js/fullcalendar.min.js'); }} <!-- Full Google Calendar - Calendar -->
{{ HTML::script('packages/webkit/js/jquery.rateit.min.js'); }} <!-- RateIt - Star rating -->
{{ HTML::script('packages/webkit/js/jquery.prettyPhoto.js'); }} <!-- prettyPhoto -->

<!-- jQuery Flot -->
{{ HTML::script('packages/webkit/js/excanvas.min.js'); }}
{{ HTML::script('packages/webkit/js/jquery.flot.js'); }}
{{ HTML::script('packages/webkit/js/jquery.flot.resize.js'); }}
{{ HTML::script('packages/webkit/js/jquery.flot.pie.js'); }}
{{ HTML::script('packages/webkit/js/jquery.flot.stack.js'); }}

<!-- jQuery Notification - Noty -->
{{ HTML::script('packages/webkit/js/jquery.noty.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/themes/default.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/layouts/bottom.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/layouts/topRight.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/layouts/top.js'); }} <!-- jQuery Notify -->

{{ HTML::script('packages/webkit/js/datatables/js/jquery.dataTables.js'); }}

{{ HTML::script('packages/webkit/js/sparklines.js'); }} <!-- Sparklines -->
{{ HTML::script('packages/webkit/js/jquery.cleditor.min.js'); }} <!-- CLEditor -->
{{ HTML::script('packages/webkit/js/bootstrap-datetimepicker.min.js'); }} <!-- Date picker -->
{{ HTML::script('packages/webkit/js/jquery.uniform.min.js'); }} <!-- jQuery Uniform -->
{{ HTML::script('packages/webkit/js/jquery.slimscroll.min.js'); }} <!-- jQuery SlimScroll -->
{{ HTML::script('packages/webkit/js/bootstrap-switch.min.js'); }} <!-- Bootstrap Toggle -->
{{ HTML::script('packages/webkit/js/filter.js'); }} <!-- Filter for support page -->
{{ HTML::script('packages/webkit/js/custom.js'); }} <!-- Custom codes -->
{{ HTML::script('packages/webkit/js/charts.js'); }} <!-- Charts & Graphs -->

<script>
$(document).ready(function() {
	$('#datatable').dataTable({"sPaginationType": "full_numbers"});
});
</script>
@stop