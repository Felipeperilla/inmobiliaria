<?php 
	require "../database/conexion.php";


	/**
	* 
	*/
	class imagenes extends Conexion
	{
		public function imagenes()
		{
			parent::__construct();
		}
                
       /* public function get_casas(){
                    
			$sql="SELECT ciudades.NOMBRE_CIUDAD,inmuebles.TIPO_OFERTA, inmuebles.AREA , nombre_imagen FROM imagenes
            INNER join inmuebles 
            on imagenes.id_inmueble = inmuebles.ID_INMUEBLE
            INNER JOIN ciudades
            ON inmuebles.ID_CIUDAD = ciudades.ID_CIUDAD
            ORDER BY AREA DESC";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;
		}
*/
		public function getInmuebleXCiudades($codigoCiudad){

            $sql="SELECT i.PRECIO, i.AREA, i.ID_INMUEBLE, i.TIPO_OFERTA, ciudades.NOMBRE_CIUDAD
                  FROM inmuebles i
                  INNER JOIN ciudades ON i.ID_CIUDAD = ciudades.ID_CIUDAD
                  WHERE i.ID_CIUDAD ='" . $codigoCiudad . "'";  

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll (PDO::FETCH_ASSOC);

            $sentencia->closeCursor();
            
            foreach($resultado as $indice=>$item)
            {
                
                $sql1 = "SELECT nombre_imagen FROM imagenes WHERE ID_INMUEBLE = ". $item["ID_INMUEBLE"]; 

                $sentencia2=$this->conexion_db->prepare($sql1);

			    $sentencia2->execute(array());

                $resultado[$indice]["fotos"] = $sentencia2->fetchAll (PDO::FETCH_ASSOC);

                $sentencia2->closeCursor();
            }

			return $resultado;
        }


	}
		$obj = new imagenes();
		
		$idCiudad = "";
        $idCiudad = $_GET["id_ciudad"];
        $resultado = "";
        
        if ($idCiudad=='') {
            $resultado = $obj->getInmuebleXCiudades($idCiudad);
        }else {
            $resultado = $obj->getInmuebleXCiudades($idCiudad);
        }
        
        echo json_encode($resultado);
        /*
        $obj = new imagenes();
		
        $idCiudad = $_GET["id_ciudad"];
        $resultado = "";
        
        if ($idCiudad == '') {
            $resultado = $obj->get_casas();
        }else {
            $resultado = $obj->get_casas();
            //$resultado = $obj->getInmuebleXCiudades($idCiudad);
        }
        
        echo json_encode($resultado);
*/

?>
