<?php 
	require "../database/conexion.php";


	/**
	* 
	*/
	class imagenes extends Conexion
	{
		public function imagenes()
		{
			parent::__construct();
		}
                
        public function get_casas(){
                    
			$sql="SELECT inmuebles.AREA , nombre_imagen FROM imagenes
            INNER join inmuebles 
            on imagenes.id_inmueble = inmuebles.ID_INMUEBLE
            INNER JOIN ciudades
            ON inmuebles.ID_CIUDAD = ciudades.ID_CIUDAD
            ORDER BY AREA DESC";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;
		}

		public function getImagenesXCiudades($codigoInmueble){

            $sql="SELECT inmuebles.AREA , nombre_imagen FROM imagenes
            INNER join inmuebles 
            on imagenes.id_inmueble = inmuebles.ID_INMUEBLE            
            WHERE inmuebles.ID_INMUEBLE ='" . $codigoInmueble . "'";  

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;
		}



	}
		$obj = new imagenes();
		
		//$idInmueble = "";
        $idInmueble = $_GET["id_inmueble"];
        $resultado = "";
        
        if ($idInmueble == '') {
            $resultado = $obj->get_casas();
        }
        else {
            $resultado = $obj->getImagenesXCiudades($idInmueble);
            //$resultado = $obj->getInmuebleXCiudades($idCiudad);
        }
        
        echo json_encode($resultado);
        /*
        $obj = new imagenes();
		
        $idCiudad = $_GET["id_ciudad"];
        $resultado = "";
        
        if ($idCiudad == '') {
            $resultado = $obj->get_casas();
        }else {
            $resultado = $obj->get_casas();
            //$resultado = $obj->getInmuebleXCiudades($idCiudad);
        }
        
        echo json_encode($resultado);
*/

?>
