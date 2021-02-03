 <?php
    include("model/connect.php");
    
	class DAOVehicle{
		function insert_vehicle($datos){

			 /* $data = 'hola function DAO user';
			 die('script>console.log('.json_encode($data).');<script>'); */ 

			$id_vehicle=$datos['id_vehicle'];
        	$marca=$datos['marca'];
        	$modelo=$datos['modelo'];
        	$HP=$datos['HP'];
        	$Km=$datos['Km'];
        	$Anyo_produccion=$datos['Anyo_produccion'];
			$color=$datos['color'];
			$precio=$datos['precio'];
			
        	/* foreach ($datos[idioma] as $indice) {
        	    $language=$language."$indice:";
        	} */
        	//$comment=$datos[observaciones];
        	
        	$sql = " INSERT INTO vehicles (id_vehicle, marca, modelo, HP, Km, Anyo_produccion, tipo, color, precio)"  //, '$comment'
        		. " VALUES ('$id_vehicle', '$marca', '$modelo', '$HP', '$Km', '$Anyo_produccion',  '$color', '$precio')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);

			/* $data = 'hola function DAO user';
			 die('script>console.log('.json_encode($data).');<script>'); */
			 
			return $res;
		}
		
		function select_all_vehicle(){
			
			$sql = "SELECT * FROM vehicles";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			
			
		 
            return $res;
		}
		
		function select_vehicle($vehicle){
			$sql = "SELECT * FROM vehicles WHERE vehicle='$id_vehicle'";
			
			$conexion = connect::con();
			$query = mysqli_query($conexion, $sql);
			$res = mysqli_fetch_object($query);
            connect::close($conexion);
            return $res;
		}
		
		function update_vehicle($datos){
			$id_vehicle=$datos[id_vehicle];
        	$marca=$datos[marca];
        	$modelo=$datos[modelo];
        	$HP=$datos[HP];
        	$Km=$datos[Km];
        	$Anyo_produccion=$datos[Anyo_produccion];
/*         	$tipo=$datos[tipo];
 */			$color=$datos[color];
			$precio=$datos[precio];

        	/* foreach ($datos[idioma] as $indice) {
        	    $language=$language."$indice:";
        	} */
        	//$comment=$datos[observaciones];
        	
        	
        	$sql = " UPDATE vehicles SET marca='$marca', modelo='$modelo', HP='$HP', Km='$Km', Anyo_produccion='$Anyo_produccion',"
        		. " color='$color', precio='$precio'   WHERE vehicle='$vehicle'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_Vehicle($Vehicle){
			$sql = "DELETE FROM vehicles WHERE Vehicle='$Vehicle'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}