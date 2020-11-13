<?php

include '../../admin/conexion/conexion.php';

session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['password'];


                $baseDeDatos = obtenerBaseDeDatos();    
                $coleccion = $baseDeDatos->Cliente_Natural;
                // $Query = array('Corr_usuario' => $usuario );
                // $query2 = array('contraseña' => $clave);
                // $cursor = $coleccion->find($Query, $query2);
                

                // foreach ( $cursor as $doc )
                // { 
                // $row=json_decode(json_encode($Query,$query2),true);
                
                // echo ($row['Corr_usuario']);


                // }

                //echo "<script> var ola=".$usuario." </script>";

                $js = "function() {
                    return this.Corr_usuario == '$usuario'  && this.Contraseña == '$clave';
                }";
                $cursor = $coleccion->find(array('$where' => $js));
                foreach ($cursor as $doc) {
                    $row=json_decode(json_encode($doc),true);
                
                    //echo ($row['Corr_usuario']);
                    //echo ($row['Rol_usuario']);
                }

                if (!isset ($row)){
                    echo "<script> 	alert('datos incorrectos'); </script>";
                    echo "<script>  location.href='iniciar_sesion.php'; </script>";
                }else{
                    $_SESSION['rol']=$row['Rol_usuario'];
                    echo "<script> 	alert('Bienvenidos'); </script>";
                    echo "<script>  location.href='../../index.php'; </script>";
                }

?>