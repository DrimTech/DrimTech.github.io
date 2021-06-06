<!DOCTYPE html>
<html lang="en" style=" scroll-behavior: smooth; color: var(--blue);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DrimTech - Blog de Tecnologia</title>
    
    <link rel="icon" href="browser.png">
    <link rel="stylesheet" href="assets/css/scroll-animations.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Article-List.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head><!--Título de pestaña, importaciones y conexiones-->

<body style="color: var(--blue);background: var(--gray-dark);">
    
    <center><img src="/assets/img/Logo_DrimTech.png"  width="600px" height="90px"></center><!--Título-->
    <nav class="navbar sticky-top navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container"><a class="navbar-brand" href="index.php">DrimTech Blog</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">

                    <li class="nav-item"><a class="nav-link" href="/secciones/noticias.php">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="/secciones/hardware.php">Hardware</a></li>
                    <li class="nav-item"><a class="nav-link" href="/secciones/software.php">Software<br></a></li>
                    <li class="nav-item"><a class="nav-link" href="/secciones/otros.php">Otros<br></a></li>
                </ul><!--Lista de elementos de la Navigation Bar (Barra de navegación)-->
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
            </div>
        </div>
    </nav><!--Barra de navegación/elementos enlazables-->
    <?php 
    $miconexion = mysqli_connect("localhost", "root", "", "blog_posts");

    if(!$miconexion) {

        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }

    $miconsulta = "SELECT * FROM `contenido` WHERE 'noticias' = categoria ORDER BY FECHA DESC LIMIT 1"; # Esta consulta ordena la página para que se muestre por categoría y fecha más reciente de publicación
    if($resultado = mysqli_query($miconexion, $miconsulta)) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            if($registro['Imagen']!=""){
                    echo "
                        <center>
                        <section class='highlight-phone' style='background: var(--gray-dark); position: relative; right: 60px;'>
                        <div class='container'>
                            <div class='row'>
                             <div class='col-md-8  text-light'>
                                <div class='intro'>
                                 <h2>Highlight</h2>
                                 <br>
                                 <h3>" . substr($registro['Titulo'], 0, 100) . "...</h3>
                                 <p style='border-left-color: var(--blue)''>" . substr($registro['Comentario'], 0, 60) . "...</p><a class='btn btn-primary' role='button' href='secciones/single.php/ ". $registro['categoria'] .  "?id= ". $registro['id'] . "'; style='background: var(--gray);color: var(--light);border-left-color: var(--light);''>Ver más</a>
                                <br>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='d-none d-md-block item' >
                       <img class='image-fluid' src='/secciones/imagenes/" . $registro['Imagen'] . "'style= 'width: 140%; height: 280px; object-fit: scale-down; background: none;'>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </center>"; 
    }
echo "<hr>";
}
}

?><!--highlights  -->
<?php
$miconsulta = "SELECT * FROM `contenido` WHERE 'hardware' = categoria ORDER BY FECHA DESC LIMIT 1";
$resultado = mysqli_query($miconexion, $miconsulta);

$miconsulta2 = "SELECT * FROM `contenido` WHERE 'software' = categoria ORDER BY FECHA DESC LIMIT 1";
$resultado2 = mysqli_query($miconexion, $miconsulta2);

$miconsulta3 = "SELECT * FROM `contenido` WHERE 'otros' = categoria ORDER BY FECHA DESC LIMIT 1";
$resultado3 = mysqli_query($miconexion, $miconsulta3);

$registro = mysqli_fetch_assoc($resultado); # Esta consulta ordena el primer container donde se proyecta la sección de hardware
$registro2 = mysqli_fetch_assoc($resultado2); # Esta consulta ordena el primer container donde se proyecta la sección de software
$registro3 = mysqli_fetch_assoc($resultado3); # Esta consulta ordena el primer container donde se proyecta la sección de otros

if($registro['Imagen']!="" and $registro2['Imagen']!="" and $registro3['Imagen']!=""){
echo "
    <section class='article-list' style='border-color: var(--secondary);background: var(--gray-dark);'>
        
        <div class='container scroll-element js-scroll fade-in-bottom'>
            
            <div class='intro'>
                <h2 class='text-center'>Publicaciones más recientes</h2>
            </div><!--Título para las publicaciones recientes-->
            
            <div class='row articles'>
                <div class='col-sm-6 col-md-4 item text-light'><a href='#'><img class='image-fluid' src='/secciones/imagenes/" . $registro['Imagen'] . "'style= 'width: 100%; height: 233px; object-fit: scale-down; background: none; '></a>
                    <h3 class='name'>Recientes Hardware</h3>
                    <h5>" . substr($registro['Titulo'], 0, 51) . "...</h3>
                    <p style='border-left-color: var(--blue)''>" . substr($registro['Comentario'], 0, 60) . "...<a class='action' href='/secciones/hardware.php'><i class='fa fa-arrow-circle-right'></i></a></p>
                </div>
                <div class='col-sm-6 col-md-4 item text-light'><a href='#'><img class='image-fluid' src='/secciones/imagenes/" . $registro2['Imagen'] . "'style= 'width: 100%; height: 233px; object-fit: scale-down; background: none; '></a>
                    <h3 class='name'>Recientes Software</h3>
                    <h5>" . substr($registro2['Titulo'], 0, 51) . "...</h3>
                    <p style='border-left-color: var(--blue)''>" . substr($registro2['Comentario'], 0, 60) . "...<a class='action' href='/secciones/hardware.php'><i class='fa fa-arrow-circle-right'></i></a></p>
                </div>
                <div class='col-sm-6 col-md-4 item text-light'><a href='#'><img class='image-fluid' src='/secciones/imagenes/" . $registro3['Imagen'] . "'style= 'width: 100%; height: 233px; object-fit: scale-down; background: none; '></a>
                    <h3 class='name'>Recientes Otros</h3>
                    <h5>" . substr($registro3['Titulo'], 0, 51) . "...</h3>
                    <p style='border-left-color: var(--blue)''>" . substr($registro3['Comentario'], 0, 60) . "...<a class='action' href='/secciones/hardware.php'><i class='fa fa-arrow-circle-right'></i></a></p>
                </div>
            </div><!--Organización en grupo de 3 para las últimas publicaciones(recientes)-->

        </div><!--Últimas 3 actualizaciones de publicaciones(recientes)-->
    </section>"; 
    }

?> <!--Cuerpo del blog, publicaciones más recientes,-->  

<footer class="footer-basic" style="padding-top:  10px; padding-bottom:  20px; background: var(--gray);border-color: var(--orange);">

              <div class="text-center">
              <h2></h2>
              <p class="copyright" style="display: inline; margin-right:0px">DrimTeam Technlogies© 2021, All Rights Reserved</p><br>
              <p class="copyright" style="display: inline; margin-right:0px"><a href="../admin/indexadmin.php" style="color: #aaa; text-decoration: none;">¿Eres Administrador?</p></a>
              <div>
          </footer><!--Footer, pie de página, redes sociales y contacto-->
          
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/scroll.js"></script>
    
</body><!--Cuerpo de la página-->
</html>