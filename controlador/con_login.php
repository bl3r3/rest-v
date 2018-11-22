<?php
session_start();

if(isset($_POST['menu1'])){
    $_SESSION["menu1"]= $_POST['menu1'];
}

if(isset($_POST['menu2'])){
    $_SESSION["menu2"]= $_POST['menu2'];
}

if(isset($_POST['menu3'])){
    $_SESSION["menu3"]= $_POST['menu3'];
}

if(isset($_POST['menu4'])){
    $_SESSION["menu4"]= $_POST['menu4'];
}

if(isset($_POST['menu5'])){
    $_SESSION["menu5"]= $_POST['menu5'];
}

if(isset($_POST['menu6'])){
    $_SESSION["menu6"]= $_POST['menu6'];
}

 

    $pgconn       = '';
	require('../modelo/mod_connex.php');
	$conexion = new Connex();
	
	$pgconn=$conexion->conectar();
	  require('../rest/pedido.php');


?>
