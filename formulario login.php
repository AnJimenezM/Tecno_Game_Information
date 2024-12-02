

<?php 


session_start();

if (isset($_SESSION['usuario'])) {
   header("location: seccion2.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="formulario.css">
    <title>Login</title>
</head>
<body>
    <section>
        <h2>Login</h2>
        <form  action="login.php" method="post" id="loginForm">
            <label>usuario</label>
            <input type="email" placeholder="..." id="email" required autofocus name="correo">
            <label>Contraseña</label>
            <input type="password" placeholder="..." id="password" required name="pass">
            <input type="submit" value="Ingresar">
        </form>
        <p>No tienes una cuenta? <a href="formularioregistro.php">Registro</a></p>
    </section>
    
</body>
</html>