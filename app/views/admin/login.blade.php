@extends('layouts.admin')

@section('content')

<!-- Form area -->
<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Administraci&oacute;n ICS 
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <form class="form-horizontal" action=''>
                    <!-- Email -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputEmail">Usuario</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Usuario">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputPassword">Password</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Recordarme
                        </label>
						</div>
					</div>
					</div>
                        <div class="col-lg-9 col-lg-offset-3">
							<button type="submit" class="btn btn-danger">Entrar</button>
						</div>
                    <br />
                  </form>
				  
				</div>
                </div>
              
                <div class="widget-foot">
                  Olvido su contrase&ntilde;a? Recuperela<a href="#resetPasswordModal" data-dismiss="modal" data-toggle="modal"> aqui</a>
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>

<div style="color:#333;" class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Recordar contrase&ntilde;a</h4>
        </div>
        <div class="modal-body row-fluid">
          <div class="span6">
            <div class="control-group">
                <label for="Email">Email</label>
                <div class="controls">
                  <input type="text" name="Email" id="Email" class="form-control" style="width:40%" placeholder="correo@ejemplo.com" required>
                </div>
                <span class="help-block"><small>Ingrese el correo con el que se registro.</small></span>
                <span id="errorMessage" style="color:#F00"></span>
            </div>
          </div>
        </div>
         
        <div class="modal-footer pull-center">
          <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
          <button type="button" id="resetPassword" class="btn btn-success">Reset Password</button>
        </div>
      </div>
    </div>
  </div>

@stop

@section('scripts')
@stop