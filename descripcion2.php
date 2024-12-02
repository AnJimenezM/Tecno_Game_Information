<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
    exit(0);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="descripcion.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Press+Start+2P&display=swap" rel="stylesheet">
    
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
            </ul>
 <div class="bx bx-menu" id="menu-icon"></div>
      
        </nav>
    </header>
    <div class="wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(247, 172, 10, 0.788)" fill-opacity="1" d="M0,192L80,160C160,128,320,64,480,74.7C640,85,800,171,960,170.7C1120,171,1280,85,1360,42.7L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</div>
    <section class="texto">
        <h1 class="info">Informacion sobre la pagina</h1>
        <p class="parrafo">La pagina tiene como principal objetivo en  demostrar informacion sobre las novedades de  video juegos y dispositivos tecnologicos, interactuando con el menu de navegacion</p>
    <div class="carousel">
        <ul>
          <img src="images/game.jpg" alt="">
           <img src="images/celular.png" alt="">
      </ul>
   </div>

</section>

 
      <script src="menu.js"></script>
    <script src="contenido.js"></script>
    <script src="user.js"></script>
   
</body>
</html>