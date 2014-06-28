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