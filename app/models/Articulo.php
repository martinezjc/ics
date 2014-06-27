<?php 
class Articulo extends Eloquent {
	protected $table = 'articulo';
    protected $guarded = array();    
    
    public static $rules = array(
    	'IdCategoria' => 'required',
    	'Texto' => 'required',
    	'FechaCreacion' => 'required',
    	'Posicion' => 'required',
    	'IdUsuario' => 'required'
    );
}
?>