<!DOCTYPE html>
<html lang="en" style="color: var(--blue);">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>DrimTech - Blog de Tecnologia</title>

        <link rel="icon" href="../browser.png">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="../assets/css/Entrada.css">
    </head><!--Título de pestaña, importaciones y conexiones-->

<body style="color: var(--blue);background: var(--gray-dark);">
                <?php
                session_start();

                if(!isset($_SESSION['admin_login']))    
                {
                    header("location: ../logadmin.php");  
                } #Comprueba que el admin esté logueado, si no lo está lo manda a iniciar sesión

                ?>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container">
            <a class="navbar-brand" href="indexadmin.php">Volver al Dashboard</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav><!--Barra de navegación sencilla que retorna al dashboard-->
    
    <br><br>
    
<h2>Nueva entrada</h2><br>

<form action="Insertar Contenido.php" method="post" enctype="multipart/form-data" name="form1">
    <hr color= white width= 40%><br>
        <table>
            <tr>
              <td>Título:
                <label for="campo_titulo"></label></td>
              <td><input type="text" name="campo_titulo" id="campo_titulo" style="width: 105%; position: relative; right: 60px;"></td> 
            </tr> <!-- Area de texto para el título del post -->

            <tr><td>Cuerpo:
                <label for="area_comentarios"></label></td>
                <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50" style="width: 105%; position: relative; right: 60px;"></textarea></td> <!-- Area de texto para el cuerpo del post -->
            </tr>

        <tr><td>
            <select name="seleccion" id="seleccion" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 100%; text-align: center; position: relative; left: 170px;">
                  <option selected>--Seleccione categoría--</option>
                  <option value="noticias">Noticias</option>
                  <option value="hardware">Hardware</option>
                  <option value="software">Software</option>
                  <option value="otros">Otros</option>
            </select> <!-- Selecciona la categoría por medio de un select -->
        </td></tr>

        <input type="hidden" name="MAX_TAM" value="2097152">
          <tr><td colspan="2">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
        <tr> <!-- Input de imagen -->
            <td colspan="2" align="left"><input type="file" class="btn btn-light action-button" name="imagen" id="imagen"></td>
        </tr>
            <tr><td colspan="2">  
            <input type="submit" class="btn btn-light action-button" name="btn_enviar" id="btn_enviar" value="Enviar"> <!-- Boton que envía la info -->
        </td></tr>
        </table>
</form>

<p>&nbsp;</p>

</body>
</html>