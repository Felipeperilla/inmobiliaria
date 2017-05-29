<?php 

	
	class Conexion 
	{
		protected $conexion_db;

		public function Conexion()
		{

			try {

				$this->conexion_db=new PDO('mysql:host=localhost; dbname=inmobiliaria','root','');

				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->conexion_db->exec("set character set utf8");

				return $this->conexion_db;
				
				} catch (Exception $e) {

				echo "La linea del error". $e->getLine();
				
				}
		}
		public function retorna_conexion(){
			return $this->conexion_db;
		}
	}

?>