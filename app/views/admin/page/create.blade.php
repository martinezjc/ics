@extends('layouts.admin')

@section('styles')
{{ HTML::style('packages/webkit/css/admin/jquery-ui-1.9.2.custom.min.css'); }}
{{ HTML::style('packages/webkit/css/admin/fullcalendar.css'); }}
{{ HTML::style('packages/webkit/css/admin/prettyPhoto.css'); }}
{{ HTML::style('packages/webkit/css/admin/rateit.css'); }}
{{ HTML::style('packages/webkit/css/admin/bootstrap-datetimepicker.min.css'); }}
{{ HTML::style('packages/webkit/css/admin/jquery.cleditor.css'); }}
{{ HTML::style('packages/webkit/css/admin/uniform.default.css'); }}
{{ HTML::style('packages/webkit/css/admin/daterangepicker-bs3.css'); }}
{{ HTML::style('packages/webkit/css/admin/bootstrap-switch.css'); }}
{{ HTML::style('packages/webkit/js/admin/datatables/css/dataTables.bootstrap.css'); }}
{{ HTML::style('packages/webkit/css/admin/widgets.css'); }}
{{ HTML::style('packages/webkit/css/admin/jquery.gritter.css'); }}
@stop

@section('content')
<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left">Crear nueva P&aacute;gina</h2>
        <div class="clearfix"></div>
        <!-- Breadcrumb -->
        <div class="bread-crumb">
          <a href="index.html"><i class="fa fa-home"></i> Panel</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Crear nuevo &aacute;rticulo</a>
        </div>
        
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->


	    <!-- Matter -->

	    <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-8">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">General</div>
                  <!-- <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>-->  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
                    <div class="form-group">
                      <label for="titulo">T&iacute;tulo</label>
                      <input type="text" id="pagina" name="pagina" class="validate[required] form-control placeholder col-lg-8" placeholder="Ingrese el titulo de la pagina">
                    </div>
                    <br><br> 
                    <div class="clearfix"></div>
                    <button class="btn btn-default"><i class="fa fa-camera"></i> Agregar multimedia</button>
                    <div class="text-area">
                        <!-- Add the "cleditor" to textarea to add CLeditor -->
                        <textarea class="cleditor" name="texto" id="texto"></textarea>

                    </div>

                  </div>
                  <div class="widget-foot">
                    Word Count : 205
                  </div>
                </div>
              </div>  

              <!-- 
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Other Stuffs</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">

                    <h6>Excerpt</h6>
                    <p>You can add your experts here.</p>
                    <div class="text-area">
                        <textarea name="input" class="form-control col-lg-12"></textarea>

                    </div>

                    <hr />

                    <h6>Custom Field</h6>
                    <p>Add your custom fields here</p>
                    
                      <input class="form-control col-lg-12" type="text" placeholder="Name"><br />
                     <input class="form-control col-lg-12" type="text" placeholder="value">
                    

                  </div>
                </div>
              </div>  
              -->
            </div>

            <!-- post sidebar -->

            <div class="col-md-4">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Campos adicionales</div>
                  <!-- <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>-->  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">

                      <!-- <hr />
                      <div class="check-box">
							<label><input type='checkbox' value='check1' /> General</label>
						</div>
						<div class="check-box">
							<label><input type='checkbox' value='check2' /> Latest News</label>
						</div>
						<div class="check-box">
							<label><input type='checkbox' value='check3' /> Health</label>
						</div>

                      <hr />
                      <h6>Tags</h6>
                      <hr />
                      -->
                      <div class="form-group">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control">
                          <option value="D">Borrador</option>
                          <option value="P">Publicado</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="tags">Etiquetas</label>
                        <input class="form-control col-lg-12" id="tags" name="tags" type="text" placeholder="Etiquetas">
                      </div>
					            <div class="buttons">
                        <button id="saveArticle" class="btn btn-primary">Guardar</button> 
                        <button class="btn btn-default">Cancelar</button>
                        <!-- <button id="deleteArticle" class="btn btn-danger">Eliminar</button> -->
					            </div>

                  </div>
                </div>
              </div>  

            </div>

          </div>
        </div>
		  </div>

		<!-- Matter ends -->
@stop

@section('scripts')
{{ HTML::script('packages/webkit/js/admin/jquery-ui-1.9.2.custom.min.js'); }} <!-- jQuery UI -->
{{ HTML::script('packages/webkit/js/admin/fullcalendar.min.js'); }} <!-- Full Google Calendar - Calendar -->
{{ HTML::script('packages/webkit/js/admin/jquery.rateit.min.js'); }} <!-- RateIt - Star rating -->
{{ HTML::script('packages/webkit/js/admin/jquery.prettyPhoto.js'); }} <!-- prettyPhoto -->

<!-- jQuery Flot -->
{{ HTML::script('packages/webkit/js/admin/excanvas.min.js'); }}
{{ HTML::script('packages/webkit/js/admin/jquery.flot.js'); }}
{{ HTML::script('packages/webkit/js/admin/jquery.flot.resize.js'); }}
{{ HTML::script('packages/webkit/js/admin/jquery.flot.pie.js'); }}
{{ HTML::script('packages/webkit/js/admin/jquery.flot.stack.js'); }}

<!-- jQuery Notification - Noty -->
{{ HTML::script('packages/webkit/js/admin/jquery.noty.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/admin/themes/default.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/admin/layouts/bottom.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/admin/layouts/topRight.js'); }} <!-- jQuery Notify -->
{{ HTML::script('packages/webkit/js/admin/layouts/top.js'); }} <!-- jQuery Notify -->

{{ HTML::script('packages/webkit/js/admin/datatables/js/jquery.dataTables.js'); }}

{{ HTML::script('packages/webkit/js/admin/sparklines.js'); }} <!-- Sparklines -->
{{ HTML::script('packages/webkit/js/admin/jquery.cleditor.min.js'); }} <!-- CLEditor -->
{{ HTML::script('packages/webkit/js/admin/bootstrap-datetimepicker.min.js'); }} <!-- Date picker -->
{{ HTML::script('packages/webkit/js/admin/jquery.uniform.min.js'); }} <!-- jQuery Uniform -->
{{ HTML::script('packages/webkit/js/admin/jquery.slimscroll.min.js'); }} <!-- jQuery SlimScroll -->
{{ HTML::script('packages/webkit/js/admin/bootstrap-switch.min.js'); }} <!-- Bootstrap Toggle -->
{{ HTML::script('packages/webkit/js/admin/filter.js'); }} <!-- Filter for support page -->
{{ HTML::script('packages/webkit/js/admin/custom.js'); }} <!-- Custom codes -->
{{ HTML::script('packages/webkit/js/admin/charts.js'); }} <!-- Charts & Graphs -->
{{ HTML::script('packages/webkit/js/helper.js'); }}
{{ HTML::script('packages/webkit/js/article.js'); }}

<script>
$(document).ready(function() {
	$('#datatable').dataTable({"sPaginationType": "full_numbers"});
});
</script>
@stop