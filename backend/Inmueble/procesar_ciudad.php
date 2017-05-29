<?php 
	require_once'conexion.php';
	/**
	* 
	*/
	class ciudades 
	{
		private $nueva_conexion;
		public static $id_ciudad;
		public function ciudades()
		{
			$nueva_clase = new Conexion();
			$this->nueva_conexion=$nueva_clase->retorna_conexion();
		}



		public function get_ciudades(){
            
			$sql_ciudad="SELECT id_ciudad,nombre_ciudad, departamentos.ID_DEPARTAMENTO, departamentos.NOMBRE_DEPARTAMENTO from ciudades
			
			 INNER JOIN departamentos ON departamentos.ID_DEPARTAMENTO=ciudades.ID_DEPARTAMENTO 
			 WHERE departamentos.id_departamento = 15 or departamentos.id_departamento = 11
			  order by NOMBRE_DEPARTAMENTO  ";  /*where nombre='" . $condicion ."'"*/

			$sentencia=$this->nueva_conexion->prepare($sql_ciudad);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			$this->nueva_conexion=null;

			return $resultado;
		}

	}

?>