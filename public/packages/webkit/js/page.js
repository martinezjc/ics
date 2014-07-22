$('#savePage').click(function(){
    var parameters = {
    	pagina : $('#pagina').val(),
    	slug : $('#slug').val(),
    	texto : $('#texto').val(),
    	estado : $('#estado').val(),
    	etiquetas : $('#tags').val(),
    	idUsuario : 1
    };

    ajaxBuilder('savePage', parameters, function( response ){
        if ( response != '0' )
        {
            window.location.href = 'edit/' + response;
        }
    });
});

function deletePage(idPage)
{
    ajaxBuilder('deletePage', { idPage: idPage }, function( response ){
        if ( response === '1' )
        {
            window.location.href = 'admin/paginas';
        } else {
            alert('La pagina no ha sido eliminada');
        }
    });
}
