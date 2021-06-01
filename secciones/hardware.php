<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DrimTech - Blog de Tecnologia</title>
</head><!--Título de pestaña, importaciones y conexiones-->

<?php require_once("../header.php"); ?> <!-- Llama al header/barra de nav -->

<body style="color: var(--blue);background: var(--gray-dark);">

<br>
    <h1 style="border-right-style: none;text-align: center;color: white;" class="fw-bold">HARDWARE</h1>
    <center><hr style="color: var(--gray); background: var(--gray);" width=40%></center>
<br>

<?php 
    $miconexion = mysqli_connect("localhost", "root", "", "blog_posts");

    if(!$miconexion) {

        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }

    $miconsulta = "SELECT * FROM `contenido` WHERE 'hardware' = categoria ORDER BY FECHA DESC"; # Esta consulta ordena la página para que se muestre por categoría y fecha más reciente de publicación
    if($resultado = mysqli_query($miconexion, $miconsulta)) {
            while($registro = mysqli_fetch_assoc($resultado)) {
                if($registro['Imagen']!=""){
                        echo "
                        <section align: 'center' style='color: black; background: var(--gray-dark); padding-top: 5px;'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-7 bg-secondary text-light'>
                                        <div>
                                            <br>
                                            <h3>" . substr($registro['Titulo'], 0, 100) . "...</h3>
                                            <p style='border-left-color: var(--blue)''>" . $registro['Fecha'] . "</p>
                                            <p style='border-left-color: var(--blue)''>" . substr($registro['Comentario'], 0, 65) . "...</p>
                                            <br>
                                            <a class='btn btn-primary float-end' role='button' href='''>Ver más</a>
                                        </div>
                                        <br>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='d-none d-md-block item' >
                                        <img class='image-fluid' src='imagenes/" . $registro['Imagen'] . "'style= 'width: 140%; height: 280px; object-fit: scale-down; background: none; border-style: solid double solid none;'>
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
    
?> <!-- Este es el formato que se le da al listado de publicaciones -->

<?php require_once("../footer.php"); ?> <!-- Llama al footer -->

</body>
</html>