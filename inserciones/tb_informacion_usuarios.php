<?php
//como ambas tablas estan realcionadas decidimos hacer la insersion en el mismo archivo
include ("../ClasesTablas/tb_informacion_usuarios.php");
include ("../ClasesTablas/tb_usuarios.php");


    $tb_informacion_usuarios=new tb_informacion_usuarios();
    $tb_informacion_usuarios->ID_GENERO=$_POST['genero'];
    $tb_informacion_usuarios->NOMBRE1=$_POST['nombre1'];
    $tb_informacion_usuarios->NOMBRE2=$_POST['nombre2'];;
    $tb_informacion_usuarios->NOMBRE3=$_POST['nombre3'];;
    $tb_informacion_usuarios->APELLIDO1=$_POST['apellido1'];
    $tb_informacion_usuarios->APELLIDO2=$_POST['apellido2'];
    $tb_informacion_usuarios->APELLIDO3=$_POST['apellido3'];
    $tb_informacion_usuarios->CORREO_ELECTRONICO=$_POST['correo1'];
    $tb_informacion_usuarios->TELEFONO=$_POST['telefono1'];
    $tb_informacion_usuarios->create();



    $tb_usuarios=new tb_usuarios();
    $tb_usuarios->NOMBRE_USUARIO=$_POST['nameuser'];
    $tb_usuarios->ID_ROL=$_POST['roluser'];
    $tb_usuarios->ID_INFORMACION_USUARIO=1;
    $tb_usuarios->ID_UNIDAD_TRABAJO=$_POST['unidadtrabajo'];
    $tb_usuarios->ESTATUS=$_POST['estatus'];
    $tb_usuarios->CLAVE=password_hash($_POST['clave'],PASSWORD_BCRYPT,array('cost' => 12));
    $tb_usuarios->create();


            echo '<script type="text/javascript">
                alert("Exito");
                window.location.href="../Vistas/Administrador.php";
                </script>';






