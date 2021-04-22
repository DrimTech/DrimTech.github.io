<?php

$enlace = mysqli_connect("127.0.0.1", "root", "root", "blog");
//Aquí se establece conexión con la base de datos: ("host", "usuario_bd", "password_bd", "base_de_datos")


if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}	//Si el enlace no se establece, aquí se dará aviso en la página el tipo de error por medio de echos de alerta con el tipo de error.


$nombre = $_POST["usuario"]; 	//Se recibe de NOMBRE (etiqueta usuario en login.html) el usuario.

$pass = $_POST["password"];		//Se recibe de PASS (etiqueta passwor en login.html) el password.

$query = mysqli_query($enlace,"SELECT * FROM `blog` WHERE `usuario` = '".$nombre."' and password = '".$pass."'");	//Se corrobora que el usuario y el password coincidan con las filas y columnas respectivas en la base de datos.

$nr = mysqli_num_rows($query);	//Arroja si la información coinicide retornando boolean (true (1) si coincide, false (0) si no coinicide)


if ($nr == 1)	//Si coinicide, redirigirá a la página que está en la función header.
{
	header("Location: Entrada.html");	//Redirige a la página asignada
	//echo "Bienvenido:  " .$nombre; //Mensaje en php con echo para probar si el usuario y password coinciden 
}

else
{
	echo "Nambre parce', ni tu user ni tu password dan UwU";	//Si el usuario o la contraseña no coiniciden, arrojará ese error a manera de echo en la página php.
}

?>