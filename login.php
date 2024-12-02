<?php 

session_start();
include 'conexion.php';


$correo = $_POST['correo'];
$pass = md5($_POST['pass']);

$validar_login = mysqli_query($conexi, "SELECT * FROM usuario WHERE email = '$correo' and password = '$pass'");
if (mysqli_num_rows($validar_login) >0) {
    $_SESSION['usuario'] = $correo;
    header("location: seccion2.php");
    exit;
} else{
    echo'
    <script>
    alert("usuario no existe intente de nuevo");
    window.location = "formularioregistro.php";
    </script>
    ';
    exit;
}

?>
