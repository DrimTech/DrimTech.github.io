<?php
session_start();

header("location:index.php");

session_destroy();

?> <!--Script necesario para cerrar la sesión del admin-->