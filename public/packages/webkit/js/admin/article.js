$('#saveArticle').click(function(){
    var parameters = {
    	titulo : $('#titulo').val(),
    	introduccion : $('#introduccion').val(),
    	resumen : $('#resumen').val(),
    	texto : $('#texto').val(),
    	idCategoria : $('#idCategoria').val(),
    	posicion : $('#posicion').val(),
    	estado : $('#estado').val(),
    	etiquetas : $('#tags').val(),
    	idUsuario : 1
    };

    ajaxBuilder('saveArticle', parameters, function(){
        
    });
});

//Route::get('admin/articulos/updateArticle', 'ArticleController@update');

$('#updateArticle').click( function() {
    var parameters = {
        idArticulo : $('#idArticulo').val(),
        titulo : $('#titulo').val(),
        introduccion : $('#introduccion').val(),
        resumen : $('#resumen').val(),
        texto : $('#texto').val(),
        idCategoria : $('#idCategoria').val(),
        posicion : $('#posicion').val(),
        estado : $('#estado').val(),
        etiquetas : $('#tags').val(),
        idUsuario : 1
    };

    ajaxBuilder('updateArticle', parameters, function(msg){
        alert(msg);
    });
});