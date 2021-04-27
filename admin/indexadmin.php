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
                <h3>
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
                    Bienvenido,
                <?php
                        echo $_SESSION['admin_login'];
                }
                ?>
                </h3>
    <h1 style="border-right-style: none;text-align: center;color: var(--light);">DrimTech</h1><!--Título-->
    <h2 style="border-right-style: none;text-align: center;color: var(--light);">Dashboard</h2>
    
	<table>
		<br>

        <tr>
            <td><button style="color: white"><a href="Entrada.php" style="color = white">Nueva publicación</button></td></a>
		</tr>
		<tr>
           <td><button style="color: white"><a href="../index.html">Ver Blog</button></td></a>
		</tr>

		<tr>
            <td><button style="color: white">Lista de publicaciones</button></td>
		</tr>

        <tr>
            <td><button style="color: white"><a href="admin_portada.php">Administrar usuarios</button></td></a>
        </tr>

        <br>
        <br>
        <br>
	</table>
        

        <br><br><br><br><br><br>
        <footer class="footer-basic" style="background: var(--gray);border-color: var(--orange);">
            
            
            
            <p class="copyright">DrimTeam Technlogies© 2021, All Rights Reserved</p>
        </footer><!--Footer, pie de página, redes sociales y contacto-->
    </section><!--Cuerpo del blog, publicaciones más recientes, redes sociales, footer, etc.-->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>

</body><!--Cuerpo de la página-->
</html>