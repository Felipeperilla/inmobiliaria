<?php 
include '../../database/conexion.php';

class factura extends Conexion {

   public function factura() {
   parent::__construct();}
  	public function get_facturas()
		{

			$sql="select REGISTRO_VENTA, personas.NOMBRE, personas.APELLIDO,inmuebles.TIPO_OFERTA,VALOR,NOMBRE_PERSONA,OBSERVACION,FECHA from facturas inner JOIN personas on personas.ID_PERSONA=facturas.ID_PERSONA INNER JOIN inmuebles ON inmuebles.ID_INMUEBLE=facturas.ID_INMUEBLE oRDER BY personas.NOMBRE ASC"; 

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$registros=$sentencia->fetchAll (PDO::FETCH_OBJ);

			$sentencia->closeCursor();

			return $registros;

			$this->conexion_db=null;

		}

	

 public function set_insertar_factura($ID_INMUEBLE,$ID_PERSONA, $VALOR, $NOMBRE_PERSONA, $OBSERVACION)
{

	$sql="INSERT INTO facturas (ID_INMUEBLE,ID_PERSONA,VALOR,NOMBRE_PERSONA,OBSERVACION) VALUES (:ID_INMUEBLE, :ID_PERSONA, :VALOR, :NOMBRE_PERSONA, :OBSERVACION)" ;

	  $sentencia=$this->conexion_db->prepare($sql);

	      $sentencia->execute(array(":ID_INMUEBLE"=>$ID_INMUEBLE,":ID_PERSONA"=>$ID_PERSONA, ":VALOR"=>$VALOR, ":NOMBRE_PERSONA"=>$NOMBRE_PERSONA, ":OBSERVACION"=>$OBSERVACION));

	      $sentencia->closeCursor();

	      header("Location:ListarFacturas.php");
}


public function set_actualizar_inmueble($id, $tipo_oferta, $tipo_de_inmueble, $barrio, $direccion, $precio, $estrato, $area, $numero_de_habitaciones, $numero_de_banos, $estado_del_inmueble, $especificacion)
       	{
       		
  			$sql="UPDATE inmuebles SET tipo_oferta=:tipo_oferta, tipo_de_inmueble=:tipo_de_inmueble, barrio=:barrio, direccion=:direccion, precio=:precio, estrato=:estrato, area=:area, numero_de_habitaciones=:numero_de_habitaciones, numero_de_banos=:numero_de_banos, estado_del_inmueble=:estado_del_inmueble, especificacion=:especificacion where id_inmueble=:id";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array(":id"=>$id, ":tipo_oferta"=>$tipo_oferta,":tipo_de_inmueble"=>$tipo_de_inmueble,":barrio"=>$barrio,":direccion"=>$direccion,":precio"=>$precio,":estrato"=>$estrato,":area"=>$area,":numero_de_habitaciones"=>$numero_de_habitaciones,":numero_de_banos"=>$numero_de_banos,":estado_del_inmueble"=>$estado_del_inmueble,":especificacion"=>$especificacion));

			$sentencia->closeCursor();

			header("Location:Listar_Inmueble.php");
		}


public function set_eliminacion_factura($id)
		{
				
				$sql="DELETE from facturas where REGISTRO_VENTA=:id";

				$sentencia=$this->conexion_db->prepare($sql);

				$sentencia->execute(array(":id"=>$id));

				$sentencia->closeCursor();

				header("Location:ListarFacturas.php");
		}

}


?>