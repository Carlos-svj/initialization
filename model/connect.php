<?php
	class connect{
		public static function con(){
			$host = 'localhost';  
    		$user = "root";         //root   pass = "" passes la variable pero contrasenya buida         
    		$pass = "";                             
    		$db = "crud_egovehicles";   	 //nomdelabasededatos                  
    		$port = 3306;                           
    		$tabla="vehicles"; 			//nomtabla
    		
			$conexion = mysqli_connect($host, $user, $pass, $db, $port);
			
			/* if(!$conexion){

				echo '<script language="javascript">alert("error conexion")</script>';

			} */

			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}