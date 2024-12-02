
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
    <link rel="stylesheet" href="tecnologia.css">
    <link rel="stylesheet" href="estilos2.css">
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
                <li><a href="seccion2.php">Inicio</a></li>
                        <li class="despliegue"><a href="tecno2.php">Dispositivos tecnologicos</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
      
        </nav>
    </header>

    <section>
        <h1 class="titulo1">Tecno pova 4 pro</h1>
        <p class="parrafo">El dispositivo tecnologico de marca tecno fue anunciado en octubre de 2022 tiene unas especificaciones excelentes en rendimiento. <br> Este dispositivo cuenta con las siguientes caracteristicas: <br> pantalla amoled de 6.66 pulgadas,  maneja una taza de refresco de 90 hz(hercios). <br> Su bateria esta compuesta por 6000 Mah con un cargador de 32 Watts y su procesador es Mediatek G99 Octa core</p>
        <div class="carousel">
            <ul class="type-img">
              <img src="images/tecno pova 4 1.jpeg" alt="">
               <img src="images/tecno pova 4.jpg" alt="">
          </ul>
       </div>
      <section>
        <script src="menu.js"></script>
        <script src="contenido.js"></script>
        <script src="user.js"></script>

</body>
</html>
            
        