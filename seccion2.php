<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
    exit(0);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
   <link rel="stylesheet" href="estilos2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Tecno game the information</title>
</head>
<body class="gradient">
   
    <header>
        <nav class="logotipo">
            <ul>
            <strong class="cuenta2" id="cono">  <?php echo $_SESSION['usuario'];?> <span><i class='bx bx-chevron-down'></i></span>
            <div class="flecha" id="flecha">
                <ul class="configuracion">
                            <li class="configuracion"><a href="cerrar.php">Cerrar sesion</a></li>
                </ul>
            </div>
          
            </strong>
            </ul>
            
            <ul class="menu1" id="menu1">
                <li><a href="seccion2.php">Inicio<span><i class='bx bxs-home'></i></span></a></li>
                <li><a href="descripcion2.php">tema<span><i class='bx bxs-bookmarks' ></i></span></a></li>
                <li class="patron"><a href="#"id="patron">Contenido<span><i class='bx bx-chevron-down' ></i></span></a> 
                    <div class="submenu" id="submenu">
                        <ul class="despliegue">
                        <li class="despliegue"><a href="video juegos2.php">Video_Juegos</a></li>
                        <li class="despliegue"><a href="tecno2.php">Dispositivos <br>tecnologicos</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
      
        </nav>
    </header>
    
    <section class="titulo">
        <h1>Tecno game  the information</h1>
    <div class="imagen-logo">
        <img src="images/logo.png" alt=".">
    </div>
  </section>
      <script src="menu.js"></script>
    <script src="contenido.js"></script>
    <script src="user.js"></script>
   
   
</body>
</html>