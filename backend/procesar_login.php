<?php
require_once ("../database/conexion.php");

class login
{
	private $conexion_db;
	
	public function login()
	{
	$nueva_clase = new Conexion();
    $this->conexion_db=$nueva_clase->retorna_conexion();
	}

	public function get_rol_usuario($usuario, $password){
		$sql = "SELECT ROL FROM personas WHERE NOMBRE_USUARIO = :usuario AND CONTRASENA = :password";

		$sentencia=$this->conexion_db->prepare($sql);

		$sentencia->execute(array(":usuario"=>$usuario, ":password"=>$password));

		$registros=$sentencia->fetchAll (PDO::FETCH_ASSOC);

		$sentencia->closeCursor();

		return $registros;

		$this->conexion_db=null;

	}

	public function get_login($usuario, $password){
		$sql = "SELECT ROL from personas where NOMBRE_USUARIO = :usuario AND CONTRASENA = :password";

		$sentencia=$this->conexion_db->prepare($sql);

		$sentencia->bindValue(":usuario",htmlentities(addslashes($usuario)));

		$sentencia->bindValue(":password", $password);

		$sentencia->bindColumn('ROL',$rol);

		$sentencia->execute();

		$num_registro = $sentencia->rowCount();		

		$registros=$sentencia->fetchAll (PDO::FETCH_BOUND);
	

		if ($num_registro == 1) {	
					
			if ($rol=="superAdmin") {
				session_start();
				$_SESSION["USUARIO"]=$usuario;
				$_SESSION["ROL_USUARIO"]=$rol;	
				
				header("location:../frontend/index_super_admin.php");
			}
			if ($rol=="Administrador") {
				session_start();
				$_SESSION["USUARIO"]=$usuario;
				$_SESSION["ROL_USUARIO"]=$rol;

				header("location:../frontend/index_admin.php");
			}
			if($rol=="Secretaria"){
				session_start();
				$_SESSION["USUARIO"]=$usuario;
				$_SESSION["ROL_USUARIO"]=$rol;
				header("location:../frontend/index_secretaria.php");
			}
			
		}					
				//  &&  CODIGO COMPARACIÒN; $rol=="superAdmin"

		else
		{
         	echo "<script> alert (\"Usuario no existe.\"); </script>";         	
		}

		$sentencia->closeCursor();

		return $registros;

		$this->conexion_db=null;

	}

    
        

}


?>