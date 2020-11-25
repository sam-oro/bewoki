$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;


        if($('#nombre').val() != ""){
            if($('#apellido').val() != ""){
                if($('#id').val() != ""){
                    if($('#celular').val()!= ""){
                        if($('#contacto').val()!= ""){
                            if($('#correo').val()!= ""){
                                if($('#direccion').val()!= ""){
                                    if($('#profesion').val()!= ""){
                                        if($('#experiencia').val()!= ""){
                                            if($('#edad').val()!= ""){
                                                if($('#sexo').val()!= ""){
                                                    if($('#ciudad').val()!= ""){
                                                        formulario.submit();
                                                    }else{
                                                        swal.fire({
                                                            icon: 'warning',
                                                            title: 'Error',
                                                            text: 'No ha ingresado la ciudad origen del trabajador',
                                                            });
                                                            $('#ciudad').focus().addClass("is-invalid");
                                                    }
    
                                                }else{
                                                    swal.fire({
                                                        icon: 'warning',
                                                        title: 'Error',
                                                        text: 'No ha ingresado el sexo : del trabajador',
                                                        });
                                                        $('#sexo').focus().addClass("is-invalid");
                                                }
    
                                            }else{
                                                swal.fire({
                                                    icon: 'warning',
                                                    title: 'Error',
                                                    text: 'No ha ingresado edad del empleado',
                                                    });
                                                    $('#edad').focus().addClass("is-invalid");
                                            }
                                            
                                        }else{
                                            swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                text: 'No ha ingresado la experiencia del empleado',
                                                });
                                                $('#experiencia').focus().addClass("is-invalid");
                                        }
    
                                    }else{
                                        swal.fire({
                                            icon: 'warning',
                                            title: 'Error',
                                            text: 'No ha ingresado la profesion',
                                            });
                                            $('#profesion').focus().addClass("is-invalid");
                                    }
                                    
                                }else{
                                    swal.fire({
                                        icon: 'warning',
                                        title: 'Error',
                                        text: 'No ha ingresado la direccion',
                                        });
                                        $('#direccion').focus().addClass("is-invalid");
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
                                text: 'No ha ingresado contacto en caso de emergencia',
                                });
                                $('#contacto').focus().addClass("is-invalid");
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
                        text: 'No ha ingresado la identificacion',
                        });
                        $('#id').focus().addClass("is-invalid");
                }

            }else{
                swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado apellido',
                    });
                    $('#apellido').focus().addClass("is-invalid");
            }

        }else{
            swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado el nombre',
                    });
                    $('#nombre').focus().addClass("is-invalid");
        }

    });
});