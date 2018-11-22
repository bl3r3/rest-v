<?php

if(!isset($_SESSION)){
    session_start();
}

if ($nombre == '')
	{
		$mensaje  = ("Ingresar Nombre");
		$ruta2    = ("../rest/peido.php");
	}
	else
	{
		if ($apellido == '')
		{
			$mensaje  = ("Ingresar el Apellido");
			$ruta2    = ("../rest/peido.php");
		}
		else
		{
			if ($direccion == '')
			{
				$mensaje  = ("Ingresar la Contraseña");
				$ruta2    = ("../rest/peido.php");
			}
			else
			{ 	
				if ($cantidad =="")
				{
					$mensaje  = ("Ingrese cantidad");
					$ruta2    = ("../rest/peido.php");
				}

							else
						
									{
										$instanciar = new orden();
										$columna = $instanciar->agregar($nombre,$apellido,$direccion,$cantidad);	
										if($columna)
										{
											$proceso="Agregar Orden";
											$accion="orden	";
											include('../modelo/mod_agregar.php');
											
											
										}
									}		
								}	
							}
						}
					}
				}
			}
		}
	}
}
else
{
?>
	<script>
			alert('Usuario no autenticado')
	</script>		
<?php 
}
?>