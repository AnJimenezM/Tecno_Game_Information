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
    <link rel="stylesheet" href="estilo video juegos.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Video juegos</title>
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
                <li class="patron"><a href="#"id="patron">video juegos</a> 
                   
                </li>
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        </nav>
   
    </header>
    <section>
        <div class="container">
            <h1><a class="titulo" href="genshin2.php">Genshin impact</a></h1>
            <p class="parrafo">video juego compatible para dispositivos moviles, pc, y consolas de video juegos</p>
           
            <img class="imagen1" src="images/portada genshin.webp" alt="">
    </section>
    </div>
    <section>
    <h2><a class="titulo2">minecraft</a></h2>
    <img class="imagenm" src="images/minecraft.avif" alt="">
    <p class="descripcion">Video juego compatible para todas las plataformas como PC, Android, IOS, Play Station y xbox</p>
    <h3 class="titulo3">si deseas descargar el juego de click aqui</h3>
    
        <a class="descarga" href="https://www.mediafire.com/file/t735dq46ddyabd5/Minecraft-1-20-60-25+Beta+Apk+By+Gamer+Boy+Vizag.apk/file" target="_blank">descargar</a>
        <h4>Nota: esta descarga solo se puede realizar en dispositivos moviles</h4>

    
</section>
    <script src="menu.js"></script>
    <script src="user.js"></script>
</body>
</html>