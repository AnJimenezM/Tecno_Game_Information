<?php 

include 'conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass = md5($_POST['pass']);

$query = "INSERT INTO usuario (nombre, email, password) VALUES ('$nombre','$correo','$pass')";

$eje = mysqli_query( $conexi, $query);

    if ($eje) {
        echo '
        <script>
        alert("Usuario registrado");
        window.location = "formulario login.php";
        </script>';
    } else{
        echo '
        <script>
        alert("intente denuevo");
        window.location = "formulario login.php";
        </script>';
    }


    mysqli_close($conexi);
?>