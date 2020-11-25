$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;


        if($('#nombre').val() != ""){
            if($('#telefono').val() != ""){
                if($('#correo').val() != ""){
                    if($('#latitud').val()!= ""){
                        if($('#longitud').val()!= ""){
                            formulario.submit();

                        }else{
                            swal.fire({
                                icon: 'warning',
                                title: 'Error',
                                text: 'No ha ingresado longitud del sitio',
                                });
                                $('#longitud').focus().addClass("is-invalid");
                        }

                    }else{
                        swal.fire({
                            icon: 'warning',
                            title: 'Error',
                            text: 'No ha ingresado latitud del sitio',
                            });
                            $('#latitud').focus().addClass("is-invalid");
                    }

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
                    text: 'No ha ingresado el teléfono del sitio turístico',
                    });
                    $('#telefono').focus().addClass("is-invalid");
            }

        }else{
            swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado el nombre del sitio turístico',
                    });
                    $('#nombre').focus().addClass("is-invalid");
        }

    });
});