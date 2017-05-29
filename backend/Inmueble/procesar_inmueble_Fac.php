<?php 
require_once ("conexion.php");

class inmueblefac {

public $conexion_db;
public function inmueblefac()
  { 
    $nueva_clase = new Conexion();
    $this->conexion_db=$nueva_clase->retorna_conexion();
  }
  	public function get_inmueblesFac()
		{

			$sql="select id_inmueble,ciudades.id_ciudad,NOMBRE_CIUDAD,personas.ID_PERSONA,NOMBRE, personas.APELLIDO,tipo_oferta,tipo_de_inmueble,barrio,direccion,precio,estrato,area,numero_de_habitaciones,numero_de_banos,estado_del_inmueble,especificacion from inmuebles inner JOIN personas on personas.ID_PERSONA=inmuebles.ID_PERSONA INNER JOIN ciudades on ciudades.ID_CIUDAD=inmuebles.ID_CIUDAD where ID_INMUEBLE  in (SELECT ID_INMUEBLE from facturas) ORDER BY personas.NOMBRE ASC"; 

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$registros=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			return $registros;

			$this->conexion_db=null;

		}

	

}


?>