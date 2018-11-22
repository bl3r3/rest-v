<?php
if(!isset($_SESSION)){
    session_start();
}

class orden
{
  	private $nombre;	
        private $apellido;
	private $direccion;
	private $cantidad;
 

   
    public function agregar($nombre,$apellido,$direccion,$cantidad)
	{
		$query = "insert into orden (af_nombre_orden, af_contrasena_orden, af_direccion_orden, nu_cantidad_orden) 
		values('$nombre','$apellido','$direccion','$cantidad', CURRENT_DATE,1)"; 

	
    }

   
	}


?> 
