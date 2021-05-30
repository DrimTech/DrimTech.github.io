<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DrimTech - Blog de Tecnologia</title>

    <link rel="icon" href="browser.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../asets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head><!--Título de pestaña, importaciones y conexiones-->
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container"><a class="navbar-brand" href="../index.html">DrimTech Blog</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="noticias.php" style="color: #509AC9;">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="hardware.php">Hardware</a></li>
                    <li class="nav-item"><a class="nav-link" href="software.php">Software<br></a></li>
                    <li class="nav-item"><a class="nav-link" href="otros.php">Otros<br></a></li>
                </ul><!--Lista de elementos de la Navigation Bar (Barra de navegación)-->
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                
            </div>
        </div>
    </nav><!--Barra de navegación/elementos enlazables-->
<body style="color: var(--blue);background: var(--gray-dark);">
 
    <br>
    <h1 style="border-right-style: none;text-align: center;color: white;" class="fw-bold">SOFTWARE</h1>
    <center><hr style="color: var(--gray); background: var(--gray);" width=40%></center>
    <br>
    <?php 

        $miconexion = mysqli_connect("localhost", "root", "", "blog_posts");

        if(!$miconexion) {

            echo "La conexion ha fallado: " . mysqli_error();
            exit();
        }

        $miconsulta = "SELECT * FROM `contenido` WHERE 'software' = categoria ORDER BY FECHA DESC";

        if($resultado = mysqli_query($miconexion, $miconsulta)) {

            while($registro = mysqli_fetch_assoc($resultado)) {

                if($registro['Imagen']!=""){

                        echo "

                        <section align: 'center' style='color: black; background: var(--gray-dark); padding-top: 10px; padding-bottom: 10px; ''>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-7 bg-secondary text-light'>
                                        <div class='intro'>
                                            <h2>" . $registro['Titulo'] . "</h2>
                                            <p style='border-left-color: var(--blue)''>" . $registro['Fecha'] . "</p>
                                            <p style='border-left-color: var(--blue)''>" . substr($registro['Comentario'], 0, 70) . "...</p>
                                            <br>
                                            <a class='btn btn-primary float-end' role='button' href=''>Ver más</a>
                                        </div>

                                    </div>
                                    <div class='col-sm-4 ' >
                                        <div class='d-none d-md-block ' >
                                        <img src='imagenes/" . $registro['Imagen'] . "' style= 'width: 100%; height: 250px; '>

                                            <div class='screen'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br><br>";
                }


                echo "<hr>";

            }




        }




    ?>



        <footer class="footer-basic" style="background: var(--gray);border-color: var(--orange);">
                      
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" >Home</a></li>
                <li class="list-inline-item"><a href="#" >Servicios</a></li>
                <li class="list-inline-item"><a href="#" >Sobre nosotros</a></li>
                <li class="list-inline-item"><a href="#" >Términos</a></li>
                <li class="list-inline-item"><a href="#" >Política de privacidad</a></li>
            </ul><!--Términos y condiciones, servicios, sobre nosotros, privacidad-->
            
            <div class="text-center">
            <br>
            <p class="copyright" style="display:inline; margin-left: 0px; text-align: center;"><a href="./index.php" style="color: #aaa; text-decoration: none;">D</p></a><p class="copyright" style="display: inline; margin-right:0px">rimTeam Technlogies© 2021, All Rights Reserved</p>
            <div>

        </footer><!--Footer, pie de página, redes sociales y contacto-->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Sidebar-Menu.js"></script>
    
</body>
</html>