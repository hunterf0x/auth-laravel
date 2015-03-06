/**
 * Created by hvaras on 25-02-15.
 */
$(function() {

    loadFormAjax();



});


function loadFormAjax() {
    //Formulario Login submit con ajax
    $(document).on("submit", ".ajaxFormLogin", function () {
        var form = this;
        if (!form.submitting) {
            form.submitting = true;
            var boton = $(this).find('button[type="submit"]');
            boton.attr("disabled", "disabled");
            if (boton.attr('data-loading-text'))
                boton.button('loading');

            $.ajax({
                url: form.action,
                data: $(form).serialize(),
                type: form.method,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    if (response.validacion) {
                        if (response.redirect) {

                            window.location = response.redirect;
                        } else {

                            $(form).html(response.mensaje);
                        }
                    }
                    else {


                        var $validacion = $(form).find(".validacion");
                        var errors ='';
                        $.each(response.errores, function(index, value) {
                            errors = errors+'<div class="alert alert-block" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert">×</button>' + value +

                            '</div>';
                        });
                        $validacion.html(errors);
                        $('html, body').animate({
                            scrollTop: $validacion.offset().top-10
                        });
                    }
                },
                complete: function () {
                    boton.removeAttr("disabled").button('reset');
                    //$(ajaxLoader).hide();
                    form.submitting = false;
                }
            });
        }
        return false;
    });




}





