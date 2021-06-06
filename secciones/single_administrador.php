<?php
$miconexion = mysqli_connect("localhost", "root", "", "blog_posts");

$imagen     = '';
$titulo     = '';
$fecha      = '';
$comentario = '';
$categoria  = '';

  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $query = "SELECT * FROM contenido WHERE id = $id";
    $result = mysqli_query($miconexion,$query);
    if(mysqli_num_rows($result)== 1)
    {
      $row=mysqli_fetch_array($result);
      $imagen       = $row['Imagen'];
      $titulo       = $row['Titulo'];
      $fecha        = $row['Fecha'];
      $comentario   = $row['Comentario'];
      $categoria    = $row['categoria'];

    }
  }
?> <!-- Aqui comienza el contenedor donde se proyecta la publicación individual -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="browser.png">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Article-List.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title><?php echo $row['Titulo'] ?></title>
</head> <!-- Importa estilos -->

<body style="color: black;background: var(--gray-dark);">
    <nav class="navbar sticky-top navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container"><a class="navbar-brand" href="/index.php">DrimTech Blog</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">

                    <li class="nav-item"><a class="nav-link" href="/secciones/noticias.php">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="/secciones/hardware.php">Hardware</a></li>
                    <li class="nav-item"><a class="nav-link" href="/secciones/software.php">Software<br></a></li>
                    <li class="nav-item"><a class="nav-link" href="/secciones/otros.php">Otros<br></a></li>
                    <br>
                    <li class="nav-item"><a class="btn btn-success" href="/admin/admin_portada.php">Regresar al panel de publicaciones<br></a></li>
                </ul><!--Lista de elementos de la Navigation Bar (Barra de navegación)-->
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
            </div>
        </div>
    </nav><!--Barra de navegación/elementos enlazables-->
<br><br>

    <h1 style="border-right-style: none;text-align: center;color: white;" class="fw-bold"><?php echo $row['Titulo'] ?></h1>
    <center><br><hr style="color: var(--gray); background: var(--gray);" width=40%></center>

<body>

<?php 

if($result = mysqli_query($miconexion, $query)){
    while($row = mysqli_fetch_assoc($result)){
        if($row['Imagen']!=""){
                echo "

            <div class='container text-light' >
                <font size = 2><p class='text-right' style=' padding-top: 0px;padding-bottom: 0px; padding-right: 0px; width: 850px; border-top-left-radius: 15px; border-bottom-left-radius: 15px;'>Publicado el " . substr($row['Fecha'], 0, 10) . " a las " . substr($row['Fecha'], 10, 18) . "<p></font>
                    <div class='row'>
                        <img src='/secciones/imagenes/" . $row['Imagen'] . "' class='img-responsive center-block d-block mx-auto' style='width: 100%; height: 400px; object-fit: scale-down;'/>
                    </div>
                    <br>
                    
                    <div style='padding-top: 0px;padding-bottom: 20px; padding-right: 0px; padding-left: 40px; width: 1100px;'> 
                    <font size = 3><p class ='text-justify'  style='background: var(--gray); padding-top: 15px; padding-bottom: 15px; padding-right: 10px; padding-left: 10px; '>". $row['Comentario'] . "</p></font>
                    </div>
            </div>
            <br>

                    ";
        }
    }
}

?>

<?php require_once("../footer.php"); ?> <!-- Llama al footer -->


</body>
</html>