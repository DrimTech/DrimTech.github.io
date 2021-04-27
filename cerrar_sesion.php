<?php
session_start();

header("location:index.html");

session_destroy();

?> <!--Script necesario para cerrar la sesión del usuario-->