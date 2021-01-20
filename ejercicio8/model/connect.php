<?php
	class connect{
		public static function con(){
			$host = 'localhost';  
    		$user = "root";         //root   pass = "" passes la variable pero contrasenya buida         
    		$pass = "";                             
    		$db = "crud_prova";   	 //nomdelatabla                  
    		$port = 3306;                           
    		$tabla="usuario"; 			//nomdelabasededatos
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}