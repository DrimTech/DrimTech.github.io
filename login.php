<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Iniciar sesión</title>
</head>
<body>

<h1>Iniciar sesi&oacute;n</h1>

<form action="redireccionar_home_admin.php" method="post">

	<table>
		<tr>
		<td class="izq">Usuario</td>	
		<td class="der"><input type="text" name="login"></td>
		</tr>

		<tr>
		<td class="izq">Contraseña</td>	
		<td class="der"><input type="password" name="password"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
		</tr>
	</table>

</body>
</html>