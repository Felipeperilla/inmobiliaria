<?php 
	require_once( 'conexion.php');
	/**
	* 
	*/
	class personas
	{
		private $nueva_conexion;
		public static $id_ciudad;
		public function personas()
		{
			$nueva_clase = new Conexion();
			$this->nueva_conexion=$nueva_clase->retorna_conexion();
		}



		public function get_personas(){
            
			$sql_persona="SELECT ID_PERSONA, NOMBRE,APELLIDO from personas where ROL='cliente'";  /*where nombre='" . $condicion ."'"*/

			$sentencia=$this->nueva_conexion->prepare($sql_persona);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			$this->nueva_conexion=null;

			return $resultado;
		}

	}

?>