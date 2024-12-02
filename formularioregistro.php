
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Registro</title>
</head>
<body>
    <section>
    <form action="usuario.php" method="post" id="signupForm">
        
            <label >Nombre</label>
            <input  type="text" placeholder="..." id="name" name="nombre" autocomplete="off" required>
            <label >Mail</label>
            <input type="email" placeholder="..." id="email" name="correo" autocomplete="off" required>
            <label>Contraseña</label>
            <input type="password" placeholder="..." id="password" name="pass"  required>
            <label>Confirmar contraseña</label>
            <input type="password" placeholder="..." id="password" required>
            <input type="submit" value="Registro" name="registro">
            
        </form>
        
    <p>Ya tienes una cuenta? <a href="formulario login.php">Login</a></p>
    <li class="volver"><a href="index.php">volver</a></li>
</section>

</body>
</html>