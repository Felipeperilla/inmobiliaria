<?php 
	require "../database/conexion.php";


	/**
	* 
	*/
	class departamento extends Conexion
	{
		public function mostrar_departamentos()
		{
			parent::__construct();
		}

		public function getDepartamentos(){

			$sql="select nombre_departamento,id_departamento from departamentos";  /*where nombre='" . $condicion ."'"*/

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;
		}

	}
        
        $resultado = new departamento();
        echo json_encode($resultado->getDepartamentos());

?>