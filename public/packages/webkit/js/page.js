$('#savePage').click(function(){
    var parameters = {
    	pagina : $('#pagina').val(),
    	slug : $('#slug').val(),
    	texto : $('#texto').val(),
    	estado : $('#estado').val(),
    	etiquetas : $('#tags').val(),
    	idUsuario : 1
    };

    ajaxBuilder('savePage', parameters, function(){
        
    });
});