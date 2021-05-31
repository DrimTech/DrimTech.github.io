<?php
$db_host="localhost"; //localhost server 
$db_user="root";	// usuario de la base de datos
$db_password="";	// contraseña del usuario de la base de datos
$db_name="blog_posts";	// nombre de la base de datos que contiene los posts

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password); // Se establece la conexión con la database
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>