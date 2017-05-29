<?php
include '../../database/conexion.php';
class personas extends Conexion {

    public function personas() {
        parent::__construct();
    }
    public function get_personas() {

        $sql = "select ID_PERSONA,DOCUMENTO,NOMBRE_USUARIO,ROL,TELEFONO, CONTRASENA from personas where ROL='Secretaria'";  /* where nombre='" . $condicion ."'" */

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $registros = $sentencia->fetchAll(PDO::FETCH_OBJ);

        $sentencia->closeCursor();

        return $registros;

        $this->conexion_db = null;
    }

    public function set_eliminacion_secretaria($id) {

        $sql = "DELETE from personas where ID_PERSONA=:id";

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array(":id" => $id));

        $sentencia->closeCursor();

        header("Location:VerSecretaria.php");
    }

    public function set_actualizar_Secretaria($ID_PERSONA, $NOMBRE_USUARIO, $DOCUMENTO, $TELEFONO)
       	{
       		
  			$sql="UPDATE personas SET NOMBRE_USUARIO=:NOMBRE_USUARIO, DOCUMENTO=:DOCUMENTO, TELEFONO=:TELEFONO where ID_PERSONA=:ID_PERSONA";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array(":ID_PERSONA"=>$ID_PERSONA, ":NOMBRE_USUARIO"=>$NOMBRE_USUARIO,":DOCUMENTO"=>$DOCUMENTO,":TELEFONO"=>$TELEFONO));

			$sentencia->closeCursor();

			header("Location:VerSecretaria.php");
		}

    public function set_insertar_secretaria($NOMBRE_USUARIO, $ROL, $DOCUMENTO,$TELEFONO, $CONTRASENA) {

        $sql = "INSERT INTO personas (NOMBRE_USUARIO,ROL,DOCUMENTO,TELEFONO, CONTRASENA) VALUES (:NOMBRE_USUARIO,:ROL, :DOCUMENTO,:TELEFONO, :CONTRASENA)";

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array(":NOMBRE_USUARIO" => $NOMBRE_USUARIO, ":ROL" => $ROL, ":DOCUMENTO" => $DOCUMENTO, ":TELEFONO"=> $TELEFONO,":CONTRASENA" => $CONTRASENA
        ));

        header("Location:CrearSecretaria.php");
    }

    public function set_validar_secretaria($NOMBRE_USUARIO) {

        $sql = "Select * from personas  where NOMBRE_USUARIO=:NOMBRE_USUARIO";

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array(":NOMBRE_USUARIO" => $NOMBRE_USUARIO
        ));

       
    }
    
 public function set_actualizar_contrasena_secretaria($ID_PERSONA, $CONTRASENA)
 
     	{
       		
  			$sql="UPDATE personas SET CONTRASENA=:CONTRASENA where ID_PERSONA=:ID_PERSONA";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array(":ID_PERSONA"=>$ID_PERSONA, ":CONTRASENA"=>$CONTRASENA));

			$sentencia->closeCursor();

			header("Location:VerSecretaria.php");    

		}
 
}

?>
