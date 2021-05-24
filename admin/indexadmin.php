<!DOCTYPE html>
<html lang="en" style="color: var(--blue);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DrimTech - Blog de Tecnologia</title>

    <link rel="icon" href="../browser.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboardadmin.css">
</head><!--Título de pestaña, importaciones y conexiones-->

<body style="color: var(--blue);background: var(--gray-dark);">

                <?php
                session_start();

                if(!isset($_SESSION['admin_login']))    
                {
                    header("location: ../index.php");  
                }
                
                if(isset($_SESSION['admin_login']))
                {
                ?>

    <div style="margin-top: 0px; background-color: #6c757d; border-bottom-left-radius: 25px; border-bottom-right-radius: 25px; padding-bottom: 10px">
    <h4 class="center" style="color: white; text-align: center; margin-bottom: -15px;">
                    Bienvenidos, Equipo
                <?php 
                        echo "DrimTech";
                }
                ?>
    </h4>

    <center><hr style="color: white;" width=40%></center>
    <h4 style="border-right-style: none;text-align: center;color: var(--light);">Dashboard</h4>

    </div>

    <br>
    <section class="container mt-5 w-75">
    <div class="row">
     <div class="col">
       <div class="p-3 pb-5 bg-secondary text-light">
         <h4>Nueva publicación</h4>
         <small>Hacer nueva publicacion para el blog</small><br>
         <a href="Entrada.php" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
      <div class="col">
       <div class="p-3 pb-5 bg-secondary text-light">
         <h4>Ver Blog</h4>
         <small>Vista de el blog en modo usuario</small><br>
         <a href="../index.html" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
    </div>
 </section>
 <section class="container mt-5 w-75">
 <div class="col">
    <div class="row">
       <div class="p-3 pb-5 bg-secondary text-light">
         <h4>Lista de publicacion</h4>
         <small>Table administradora de las publicaciones</small><br>
         <a href="#" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
 </section>
<!--<section class="container mt-5 w-75">
 <div class="col">
    <div class="row">
       <div class="p-3 pb-5 bg-secondary text-light">
         <h4>Listas de usuario</h4>
         <small>Tabla administradora de usuarios </small><br>
         <a href="" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
 </section>-->
 <br>
 <br>

 <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button" ><a href="../cerrar_sesion.php">Cerrar Sesión</button></a> 
</div> 
	
    <!--Cuerpo del blog, publicaciones más recientes, redes sociales, footer, etc.-->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>

</body><!--Cuerpo de la página-->
</html>