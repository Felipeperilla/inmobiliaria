<?php

include '../../database/conexion.php';
/*
$conexion=$conexion_db->query("select * from departamentos");

$registros=$conexion->fetchAll(PDO::FETCH_OBJ);*/

class personas extends Conexion
	{
		public function personas()
		{
			parent::__construct();
		}

		public function get_personas()
		{
			try {

				$sql="SELECT id_persona,nombre,apellido,direccion_persona,ROL,documento,telefono from personas where ROL='Cliente'";  /*where nombre='" . $condicion ."'"*/

				$sentencia=$this->conexion_db->prepare($sql);

				$sentencia->execute(array());

				$registros=$sentencia->fetchAll (PDO::FETCH_OBJ);

				$sentencia->closeCursor();

				return $registros;

				$this->conexion_db=null;
				
			} catch (Exception $e) {
				
			}
			

		}
  public function set_eliminacion_persona($id) {

	  	try
		{
        $sql = "DELETE from personas where ID_PERSONA=:id ";

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array(":id" => $id));

        $sentencia->closeCursor();

        header("Location:ListarClientes.php");
		}
		catch(PDOException $e){

		}

    }


		public function set_actualizar_persona($id, $nombre, $apellido, $direccion,$documento,$telefono)
       	{
			try
			{
				$sql="UPDATE personas SET nombre=:nom, apellido=:ape, direccion_persona=:dir, documento=:doc, telefono=:tel where id_persona=:id";

				$sentencia=$this->conexion_db->prepare($sql);

				$sentencia->execute(array(":id"=>$id, ":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion,":doc"=>$documento,":tel"=>$telefono));

				$sentencia->closeCursor();

				header("Location:ListarClientes.php");
			}
			catch(PDOException $e)
			{
				echo"<script>alert('El numero de telefono que intenta cambiar, ya se encuentra asignado.');</script>";
			}       		

		}
 
		public function set_insertar_persona($nombre, $apellido, $direccion,$documento,$ROL,$telefono)
		{

			try
			{
				$sql="INSERT INTO personas (nombre,apellido,direccion_persona,documento,rol,telefono) VALUES (:nom, :ape, :dir, :doc,:rol, :tel)";

				$sentencia=$this->conexion_db->prepare($sql);

				$sentencia->execute(array(":nom" => $nombre,":ape" => $apellido, ":dir" => $direccion, ":doc"=>$documento, ":rol"=>$ROL,
				":tel"=>$telefono));

				$sentencia->closeCursor();

				header("Location:ListarClientes.php");
			}
			catch(PDOException $e)
			{

			}
		}

	}


?>
