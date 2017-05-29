<?php 
	require "../database/conexion.php";


	/**
	* 
	*/
	class ciudad extends Conexion
	{
		public function ciudad()
		{
			parent::__construct();
		}
                
        public function getCiudades(){
                    
			$sql="select nombre_ciudad, id_ciudad, id_departamento from ciudades";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;
		}

		public function getCiudadesXDepartamento($codigoDepartamento){
                    
			$sql="select nombre_ciudad, id_ciudad from ciudades where id_departamento='" . $codigoDepartamento ."'";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;
		}

	}
        
        $obj = new ciudad();
        $idDepartamento = $_GET["id_departamento"];
        $resultado = null;
        
        if ($idDepartamento=='') {
            $resultado = $obj->getCiudades();
        }else {
            $resultado = $obj->getCiudadesXDepartamento($idDepartamento);
        }
        
        echo json_encode($resultado);

?>
