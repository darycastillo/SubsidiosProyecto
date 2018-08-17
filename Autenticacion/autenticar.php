<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

include 'conexionBD.php';

try {
    // Seleccionar los datos de usuario
    $stmt = $conn->prepare("SELECT NOMBRE_USUARIO, ID_USUARIO, CLAVE, ID_ROL FROM tb_usuarios WHERE NOMBRE_USUARIO = ?");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();


    // Loguear el usuario
    $stmt->bind_result($nombre_usuario, $id_usuario, $pass_usuario,$Rol);
    $stmt->fetch();
    if($nombre_usuario){
        // El usuario existe, verificar el password
        if(password_verify($password,$pass_usuario )){
            // Iniciar la sesion
            session_start();
            $_SESSION['nombre'] = $usuario;
            $_SESSION['id'] = $id_usuario;
            $_SESSION['login'] = true;
            //$_SESSION['rol']=$Rol;
           /* // Login correcto
            $respuesta = array(
                'respuesta' => 'correcto',
                'nombre' => $nombre_usuario,
                'rol'=>$Rol
            );*/

            //se redirecciona segun el rol
            switch ($Rol) {
                case 1:
                    header('Location: ../Vistas/Administrador.php');
                    break;
                case 2:
                    header('Location: ../Vistas/Usuarios.php');
                    break;
                default :
                    break;
            }


        } else {
            // Login incorrecto, enviar error
            $respuesta = array(
                'resultado' => 'Password Incorrecto'
            );
            echo '<script type="text/javascript">
                alert("Error Password Incorrecto");
                window.location.href="../index.php";
                </script>';
        }

    } else {
        $respuesta = array(
            'error' => 'Usuario no existe'
        );
        echo '<script type="text/javascript">
                alert("Error El Usuario No existe");
                window.location.href="../index.php";
                </script>';
    }
    $stmt->close();
    $conn->close();
} catch(Exception $e) {
    // En caso de un error, tomar la exepcion
    $respuesta = array(
        'pass' => $e->getMessage()
    );
}

echo json_encode($respuesta);
