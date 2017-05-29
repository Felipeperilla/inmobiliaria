<?php 
require_once ("conexion.php");

class inmueble {

public $conexion_db;
public function inmueble()
  { 
    $nueva_clase = new Conexion();
    $this->conexion_db=$nueva_clase->retorna_conexion();
  }
  	public function get_inmuebles()
		{

			$sql="SELECT id_inmueble,ciudades.id_ciudad,NOMBRE_CIUDAD,personas.ID_PERSONA,NOMBRE, personas.APELLIDO,tipo_oferta,tipo_de_inmueble,barrio,direccion,precio,estrato,area,numero_de_habitaciones,numero_de_banos,estado_del_inmueble,especificacion from inmuebles 
			inner JOIN personas on personas.ID_PERSONA=inmuebles.ID_PERSONA INNER JOIN ciudades on ciudades.ID_CIUDAD=inmuebles.ID_CIUDAD where ID_INMUEBLE not in (SELECT ID_INMUEBLE from facturas) ORDER BY personas.NOMBRE ASC"; 

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$registros=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			return $registros;

			$this->conexion_db=null;

		}

	public function get_id_telefono($celular,$nombre,$apellido)
	{

			$sql_persona="SELECT  id_persona,telefono,nombre,apellido from personas where telefono=:celular";  /*where nombre='" . $condicion ."'"*/

			$sentencia=$this->conexion_db->prepare($sql_persona);

			$sentencia->execute(array(":celular"=>$celular));

			$resultado=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			$this->conexion_db=null;

			return $resultado;
	}



 public function set_insertar_inmueble($ID_CIUDAD, $ID_PERSONA, $TIPO_OFERTA, $TIPO_DE_INMUEBLE, $BARRIO, $DIRECCION, $PRECIO, $ESTRATO, $AREA, $NUMERO_DE_HABITACIONES, $NUMERO_DE_BANOS, $ESTADO_DEL_INMUEBLE, $ESPECIFICACION)
{

	$sql="INSERT INTO inmuebles (ID_CIUDAD,ID_PERSONA,TIPO_OFERTA,TIPO_DE_INMUEBLE,BARRIO,DIRECCION,PRECIO,ESTRATO,AREA,NUMERO_DE_HABITACIONES,NUMERO_DE_BANOS,ESTADO_DEL_INMUEBLE,ESPECIFICACION) VALUES (:ID_CIUDAD, :ID_PERSONA, :TIPO_OFERTA, :TIPO_DE_INMUEBLE, :BARRIO, :DIRECCION, :PRECIO, :ESTRATO, :AREA, :NUMERO_DE_HABITACIONES, :NUMERO_DE_BANOS, :ESTADO_DEL_INMUEBLE, :ESPECIFICACION)" ;

	  $sentencia=$this->conexion_db->prepare($sql);

	      $sentencia->execute(array(":ID_CIUDAD" => $ID_CIUDAD, ":ID_PERSONA"=>$ID_PERSONA, ":TIPO_OFERTA"=>$TIPO_OFERTA, ":TIPO_DE_INMUEBLE"=>$TIPO_DE_INMUEBLE, ":BARRIO"=>$BARRIO, 
	      	":DIRECCION"=>$DIRECCION,":PRECIO"=>$PRECIO, ":ESTRATO"=>$ESTRATO, ":AREA"=>$AREA, ":NUMERO_DE_HABITACIONES"=>$NUMERO_DE_HABITACIONES, ":NUMERO_DE_BANOS"=>$NUMERO_DE_BANOS, ":ESTADO_DEL_INMUEBLE"=>$ESTADO_DEL_INMUEBLE, ":ESPECIFICACION"=>$ESPECIFICACION));

	      $sentencia->closeCursor();

	     
}

public function set_insertar_imagen($id_inmueble, $nombre_imagen){

		$sql="INSERT INTO imagenes (nombre_imagen,id_inmueble) VALUES (:nombre_imagen, :id_inmueble)";

	  	$sentencia=$this->conexion_db->prepare($sql);

		$sentencia->execute(array(":nombre_imagen" => $nombre_imagen, ":id_inmueble"=>$id_inmueble));

		$sentencia->closeCursor();

}

public function set_actualizar_inmueble($id, $tipo_oferta, $tipo_de_inmueble, $barrio, $direccion, $precio, $estrato, $area, $numero_de_habitaciones, $numero_de_banos, $estado_del_inmueble, $especificacion)
       	{
       		
  			$sql="UPDATE inmuebles SET tipo_oferta=:tipo_oferta, tipo_de_inmueble=:tipo_de_inmueble, barrio=:barrio, direccion=:direccion, precio=:precio, estrato=:estrato, area=:area, numero_de_habitaciones=:numero_de_habitaciones, numero_de_banos=:numero_de_banos, estado_del_inmueble=:estado_del_inmueble, especificacion=:especificacion where id_inmueble=:id";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array(":id"=>$id, ":tipo_oferta"=>$tipo_oferta,":tipo_de_inmueble"=>$tipo_de_inmueble,":barrio"=>$barrio,":direccion"=>$direccion,":precio"=>$precio,":estrato"=>$estrato,":area"=>$area,":numero_de_habitaciones"=>$numero_de_habitaciones,":numero_de_banos"=>$numero_de_banos,":estado_del_inmueble"=>$estado_del_inmueble,":especificacion"=>$especificacion));

			$sentencia->closeCursor();

			header("Location:Listar_Inmueble.php");
		}


public function set_eliminacion_inmueble($id)
		{
				
				$sql="DELETE from inmuebles where id_inmueble=:id";

				$sentencia=$this->conexion_db->prepare($sql);

				$sentencia->execute(array(":id"=>$id));

				$sentencia->closeCursor();

				header("Location:Listar_Inmueble.php");
		}

public function obtener_imagenes()
{
			$sql="SELECT nombre_imagen from inmuebles where "; 

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$registros=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			return $registros;

			$this->conexion_db=null;	
}		

}


?>