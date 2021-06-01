<?php

$miconexion = mysqli_connect("localhost", "root", "", "blog_posts");

    if(!$miconexion) 
    {

        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }

if(isset($_GET['id']))
{

    $id = $_GET['id'];
    $query = "DELETE FROM contenido WHERE id = $id";
    $result = mysqli_query($miconexion,$query);

    $query2 = "ALTER TABLE contenido AUTO_INCREMENT = 1";
    $result2 = mysqli_query($miconexion,$query2);

    if(!$result)
    {
        die("Query Failed");
    }

    if(!$result2){
        die("Query 2 Failed");
    }
}

?>

<script type="text/javascript">
	alert("Se ha eliminado la publicacion");
	window.location.href='admin_portada.php';
</script>