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
                    header("location: ../index.php");  
                }

                if(isset($_SESSION['personal_login']))  
                {
                    header("location: ../personal/personal_portada.php");   
                }

                if(isset($_SESSION['usuarios_login']))  
                {
                    header("location: ../usuarios/usuarios_portada.php");
                }
                
                if(isset($_SESSION['admin_login']))
                {
                ?>

    <h1>DrimTech</h1><!--Título-->

    <h4 class="center" style="color: white; text-align: center; margin-bottom: -15px;">
                    Bienvenidos, equipo
                <?php
                        echo $_SESSION['admin_login'];
                }
                ?>
    </h4>
    <br>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container"><a class="navbar-brand" href="indexadmin.php">Volver al Dashboard</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Vista Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ver publicaciones</a></li>
                    
                </ul><!--Lista de elementos de la Navigation Bar (Barra de navegación)-->
                
            </div> 
        </div>
    </nav><!--Barra de navegación/elementos enlazables-->
    <br>
    <br>
    <h2>Nueva entrada</h2>

<form action="Insertar Contenido.php" method="post" enctype="multipart/form-data" name="form1">
<hr color= white width= 40%>
<table>

<tr>
  <td>Título:
    <label for="campo_titulo"></label></td>
  <td><input type="text" name="campo_titulo" id="campo_titulo" style="width: 105%; position: relative; right: 60px;"></td> 
</tr>

<tr><td>Cuerpo:
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50" style="width: 105%; position: relative; right: 60px;"></textarea></td>
</tr>

<tr><td>
<select name="seleccion" id="seleccion" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 100%; text-align: center; position: relative; left: 170px;">
  <option selected>--Seleccione categoría--</option>
  <option value="noticias">Noticias</option>
  <option value="hardware">Hardware</option>
  <option value="software">Software</option>
  <option value="otros">Otros</option>
</select>

</td></tr>

    <input type="hidden" name="MAX_TAM" value="2097152">
  <tr>
  <td colspan="2">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" class="btn btn-light action-button" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2">  
    <input type="submit" class="btn btn-light action-button" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>
  
  </table>
</form>

<p>&nbsp;</p>


</section><!--Cuerpo del blog, publicaciones más recientes, redes sociales, footer, etc.-->
</body>
</html>