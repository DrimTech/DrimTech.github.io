<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Iniciar sesión: administrador</title>

<link rel="icon" href="browser.png">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }

    body {
    	background-color: #313437;
    }
</style>

</head>
	<body>

<?php
require_once 'DBconect.php';
session_start();
if(isset($_SESSION["admin_login"]))	// Si la sesión del admin está abierta entonces:
{
	header("location: admin/indexadmin.php"); // El home del admin será este
}
if(isset($_REQUEST['btn_login']))	
{
	$email		=$_REQUEST["txt_email"];	//textbox nombre "txt_email"
	$password	=$_REQUEST["txt_password"];	//textbox nombre "txt_password"
	$role		=$_REQUEST["txt_role"];		//select opcion nombre "txt_role"
		
	if(empty($email)){						
		$errorMsg[]="Por favor ingrese un Email válido.";	//Revisar email
	}
	else if(empty($password)){
		$errorMsg[]="Por favor ingrese su contraseña.";	//Revisar password vacio
	}
	else if(empty($role)){
		$errorMsg[]="Por favor seleccione el rol que desempeña.";	//Revisar rol vacio
	}
	else if($email AND $password AND $role)
	{
		try
		{
			$select_stmt=$db->prepare("SELECT email,password,role FROM mainlogin
										WHERE
										email=:uemail AND password=:upassword AND role=:urole"); 
			$select_stmt->bindParam(":uemail",$email);
			$select_stmt->bindParam(":upassword",$password);
			$select_stmt->bindParam(":urole",$role);
			$select_stmt->execute();	//execute query
					
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	
			{
				$dbemail	=$row["email"];
				$dbpassword	=$row["password"];
				$dbrole		=$row["role"];
			}
			if($email!=null AND $password!=null AND $role!=null)	
			{
				if($select_stmt->rowCount()>0)
				{
					if($email==$dbemail and $password==$dbpassword and $role==$dbrole)
					{
						switch($dbrole)		//inicio de sesión de usuario base de roles
						{
							case "admin":
								$_SESSION["admin_login"]=$email;			
								$loginMsg="Administrador logeado con éxito.";	
								header("refresh:3;admin/indexadmin.php");	
								break;
								
							case "personal";
								$_SESSION["personal_login"]=$email;				
								$loginMsg="Personal: Inicio sesión con éxito";		
								header("refresh:3;personal/personal_portada.php");	
								break;
								
							case "usuarios":
								$_SESSION["usuarios_login"]=$email;				
								$loginMsg="Usuario: Inicio sesión con éxito";	
								header("refresh:3;usuarios/usuarios_portada.php");		
								break;
								
							default:
								$errorMsg[]="Correo electrónico, contraseña o rol incorrectos.";
						}
					}
					else
					{
						$errorMsg[]="Correo electrónico, contraseña o rol incorrectos.";
					}
				}
				else
				{
					$errorMsg[]="Correo electrónico, contraseña o rol incorrectos.";
				}
			}
			else
			{
				$errorMsg[]="Correo electrónico, contraseña o rol incorrectos.";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
	else
	{
		$errorMsg[]="Correo electrónico, contraseña o rol incorrectos.";
	}
}

?>

	<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Regresar al Blog</a>
        </div>
      </div>
    </nav>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong>¡Inicio de sesión exitoso! <?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?> 


<div class="login-form">
<center><h2 style="color: white;">Iniciar sesión</h2></center>
<form method="post" class="form-horizontal">
  <div class="form-group">
  <label class="col-sm-6 text-left">Email</label>
  <div class="col-sm-12">
  <input type="text" name="txt_email" class="form-control" placeholder="Ingrese su email" />
  </div>
  </div>
      
  <div class="form-group">
  <label class="col-sm-6 text-left">Contraseña</label>
  <div class="col-sm-12">
  <input type="password" name="txt_password" class="form-control" placeholder="Ingrese su contraseña" />
  </div>
  </div>
      
  <div class="form-group">
      <label class="col-sm-6 text-left">Rol</label>
      <div class="col-sm-12">
      <select class="form-control" name="txt_role">
          <option value="admin">Admin</option>

      </select>
      </div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-12">
  <input type="submit" name="btn_login" class="btn btn-success btn-block" value="Entrar">
  </div>
  </div>
  
</form>
</div>
<!--Cierra div login-->
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>