$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;


        if($('#id').val() != ""){
            if($('#nombre').val() != ""){
                if($('#password').val() != ""){
                    if($('#celular').val()!= ""){
                        if($('#correo').val()!= ""){
                            formulario.submit();

                        }else{
                            swal.fire({
                                icon: 'warning',
                                title: 'Error',
                                text: 'No ha ingresado el correo',
                                });
                                $('#correo').focus().addClass("is-invalid");
                        }

                    }else{
                        swal.fire({
                            icon: 'warning',
                            title: 'Error',
                            text: 'No ha ingresado el número celular',
                            });
                            $('#celular').focus().addClass("is-invalid");
                    }

                }else{
                    swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        text: 'No ha ingresado la contraseña',
                        });
                        $('#password').focus().addClass("is-invalid");
                }

            }else{
                swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado el nombre',
                    });
                    $('#nombre').focus().addClass("is-invalid");
            }

        }else{
            swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado la identificación',
                    });
                    $('#id').focus().addClass("is-invalid");
        }

    });
});