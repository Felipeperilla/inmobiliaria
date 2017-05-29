<?php

include '../../database/conexion.php';
/*
  $conexion=$conexion_db->query("select * from departamentos");

  $registros=$conexion->fetchAll(PDO::FETCH_OBJ); */

class personas extends Conexion {

    public function personas() {
        parent::__construct();
    }

    public function get_personas() {

        $sql = "select ID_PERSONA,DOCUMENTO,NOMBRE_USUARIO,ROL,TELEFONO, CONTRASENA from personas where ROL='Administrador'";  /* where nombre='" . $condicion ."'" */

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $registros = $sentencia->fetchAll(PDO::FETCH_OBJ);

        $sentencia->closeCursor();

        return $registros;

        $this->conexion_db = null;
    }

    public function set_eliminacion_administrador($id) {

        $sql = "DELETE from personas where ID_PERSONA=:id";

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array(":id" => $id));

        $sentencia->closeCursor();

        header("Location:VerAdministrador.php");
    }

    public function set_actualizar_administrador($ID_PERSONA, $NOMBRE_USUARIO, $DOCUMENTO, $TELEFONO)
       	{
       		
  			$sql="UPDATE personas SET NOMBRE_USUARIO=:NOMBRE_USUARIO, DOCUMENTO=:DOCUMENTO, TELEFONO=:TELEFONO where ID_PERSONA=:ID_PERSONA";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array(":ID_PERSONA"=>$ID_PERSONA, ":NOMBRE_USUARIO"=>$NOMBRE_USUARIO,":DOCUMENTO"=>$DOCUMENTO,":TELEFONO"=>$TELEFONO));

			$sentencia->closeCursor();

			header("Location:VerAdministrador.php");
		}

    public function set_insertar_administrador($NOMBRE_USUARIO, $ROL, $DOCUMENTO,$TELEFONO, $CONTRASENA)
    {
        try
        { 

        $sql = "INSERT INTO personas (NOMBRE_USUARIO,ROL,DOCUMENTO,TELEFONO, CONTRASENA) VALUES (:NOMBRE_USUARIO,:ROL, :DOCUMENTO,:TELEFONO, :CONTRASENA)";

        $sentencia = $this->conexion_db->prepare($sql);

        $sentencia->execute(array(":NOMBRE_USUARIO" => $NOMBRE_USUARIO, ":ROL" => $ROL, ":DOCUMENTO" => $DOCUMENTO, ":TELEFONO"=> $TELEFONO,":CONTRASENA" => $CONTRASENA
        ));

        header("Location:VerAdministrador.php");
        }
        catch(PDOException $e){
            echo("<script>alert('Este usuario esta intentando utilizar la misma información de otro usuario!')</script>");
        }

    }

   
    
 public function set_actualizar_contrasena_administrador($ID_PERSONA, $CONTRASENA)
 
     	{
       		
  			$sql="UPDATE personas SET CONTRASENA=:CONTRASENA where ID_PERSONA=:ID_PERSONA";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array(":ID_PERSONA"=>$ID_PERSONA, ":CONTRASENA"=>$CONTRASENA));

			$sentencia->closeCursor();

			header("Location:VerAdministrador.php");
                        
                        if(!$row[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{ 
echo '<script language = javascript>
alert("Usuario o Password incorrectos, por favor verifique.")
self.location = "index.html"
</script>';
}
		}
 
}

?>
