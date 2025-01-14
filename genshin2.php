
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
    <link rel="stylesheet" href="genshin_impact.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>novedades de genshin impact</title>
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
                <li class="patron"><a href="#"id="patron">genshin impact</a> 
                    <div class="submenu" id="submenu">
                        <ul class="despliegue">
                        
                    </ul>
                    </div>
                </li>
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        </nav>
   
    </header>
    <section>
        <div class="container">
            <h1 class="titulo">Banners de la version 3.7 de genshin impact</h1>
            <h2 class="segundo-titulo">Kazuja</h2>
            <p class="parrafo1">Personaje de espada ligera que contiene el elemento anemo(viento). <br>
            Se puede conseguir por medio de protogemas y deseos.</p>
            <img class="imagen1" src="images/kazuha_genshin_impact_.png" alt="">
        <h3 class="tercer-titulo">alhaitham</h3>
        <p class="parrafo2">Personaje de espada ligera que contiene el elemento dendro(naturaleza). <br>
        Se puede conseguir por medio de protogemas y deseos. </p>
        <img class="imagen2" src="images/alhaitham_genshin_impact.png" alt="">
        
    </section>
    </div>
    <section>
        <h1 class="titulo2">Personajes legendarios  de la version 3.8</h1>
        <h2 class="kokomi">kokomi</h2>
        <p class="descripcionk">Personaje de libro, contiene el elemento hydro(agua).  <br> Es un personaje healer que permite curar a todo el equipo.  <br>  Solo se puede conseguir por medio de protogemas y deseos.</p>
        <img class="imgk" src="images/kokomi_genshin_impact_character_render_by_deg5270_derxa2v.png" alt="">
        <h3 class="trotamundos">Trotamundos</h3>
        <p class="descripcionc">Personaje de libro, contiene el elemento Anemo(viento).  <br>Solo se puede conseguir por medio de protogemas y deseos.</p>
        <img class="wander" src="images/trotamundos.png" alt="">
    </section>
  
    <script src="menu.js"></script>
    <script src="contenido.js"></script>
    <script src="user.js"></script>
</body>
</html>