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
  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left">&Aacute;rticulos</h2>
        <div class="clearfix"></div>
        <!-- Breadcrumb -->
        <div class="bread-crumb">
          <a href="index.html"><i class="fa fa-home"></i> Panel</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">&Aacute;rticulos</a>
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
              <a href="{{action('ArticleController@create')}}" class="btn btn-primary">Crear un nuevo &aacute;rticulo</a>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-12">
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left"></div>
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
                          <th>Titulo</th>
                          <th>Categor&iacute;a</th>
                          <th>Fecha Creaci&oacute;n</th>
                          <th>Estado</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      @if ( $articles )
                        @foreach($articles as $article => $articleInfo)
                          <tr>
                            <td>{{ ++ $article }}</td>
                            <td>{{ $articleInfo->Titulo }}</td>
                            <td>{{ $articleInfo->Categoria }}</td>
                            <td>{{ $articleInfo->FechaCreacion }}</td>
                            <td><span class="label label-success">Publicado</span></td>
                            <td>

                                <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                                <a class="btn btn-xs btn-warning" href="{{ action('ArticleController@edit', array('id' => $articleInfo->IdArticulo) ); }}"><i class="fa fa-pencil"></i> </a>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            
                            </td>
                          </tr>
                          @endforeach
                        @else
                          <tr>
                            <td colspan="6" style="text-align:center">No hay articulos por mostrar</td>
                          </tr>
                        @endif

                        <!-- <tr>
                          <td>2</td>
                          <td>Jane Doe</td>
                          <td>USA</td>
                          <td>13/02/2012</td>
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
                          <td><span class="label label-danger">Banned</span></td>
                          <td>

                            <div class="btn-group">
                              <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                              <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                              <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                            </div>

                          </td>
                        </tr>  -->                                                          

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
            <p class="copy">Copyright &copy; 2014 | <a href="#">Instituto de Ciencias de la Salud</a> </p>
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