<?php
$miconexion = mysqli_connect("localhost", "root", "", "blog_posts");
$title = '';
$description= '';


if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['Titulo'];
  $description = $_POST['Comentario'];

  $query = "UPDATE contenido set Titulo = '$title', Comentario = '$description' WHERE id=$id";
  mysqli_query($miconexion, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: admin_potada.php');
}
 
?>
