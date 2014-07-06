/* General AJAX Builder */
function ajaxBuilder(url, parameters, callback_function)
{
    $.ajax({
        type: "GET",
        url: url,
        data: parameters,
        success: callback_function,
        failure: function (msg) {
            showErrorMessage(null, msg);
        }
    });
}