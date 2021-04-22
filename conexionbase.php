<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
   class conexion {
      private $host = "localhost";
      private $user = "root";
      private $pass = "root";
      private $database = "blog";

      //database handler
      private $dbh;
      //statement
      private $stmt;
      //errores
      private $error;

      public static function conectar() {
         //configurar la conexión
         $dsn = "mysql:host=".$this->host.";dbname=".$this->database;
         //opciones que se agregaran a la conexion mysql
         //PDO::ATTR_PERSISTENT - la conexion con pdo será persistente, optimizara los recursos del servidor

         $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
         );

         //creamos una instancia de PDO
         //lo insertamos en una excepcion
         try{

            $this->dbh = new PDO($dsn,$this->user,$this->pass,$options);
            //con la siguiente instrucción controlamos el return de caracteres extraños que no puede interpretar la db
            $this->dbh->exec('set names '.UTF8);
            echo "Conexion realizada con exito";
         }catch(PDOException $e){
             $this->error = $e->getMessage();
             echo "Excepcion: ".$this->error;
         }
      } 
   }

?>




</body>
</html>