<?php
	
	session_start();
	//conexion
	$conexionBD = mysql_connect('localhost','root','asd')
		or die('No se pudo conectar al servidor:'.mysql_error());
	//Seleccionar BD
	mysql_select_db('kardex') or die ('No se puede abrir la bd:'.mysql_error());
	$usr = $_POST['txtUser'];
	$pwd = $_POST['txtPwd'];
	$consulta = "SELECT * FROM usuario WHERE usr='".$usr."' and pwd='".$pwd."';";
        //echo $consulta; exit;
	$tablaDB = mysql_query($consulta);
	//echo mysql_num_rows($tablaDB); exit;
	
	if( mysql_num_rows($tablaDB) > 0 ){
		$_SESSION['usr'] = $usr;
		header("Location: menu.php");
	//	echo "Login correcto";
	}else{
		echo "Error en usuario o contraseña";
	}
	
?>
