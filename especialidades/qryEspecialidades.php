<?php
  //variable de session
  $conexcionBD = mysql_connect('localhost','root','asd') or die('No pudo conectarse al servidor BD:'.mysql_error());
  mysql_select_db('kardex') or die('No encontro la bd:'.mysql_error());

  $opcion = $_POST['hdnOpc'];
  
  switch ($opcion) {
  	case 'agregar':
  		$clave = $_POST['txtClave'];
  		$nombre = $_POST['txtNombre'];
  		$qry = "INSERT INTO especialidad (clave,nombre) VALUES ('$clave','$nombre')";
  		$resultado = mysql_query($qry)or die("******** Error al insertar registro:".mysql_error());
  		echo "
  		 <script type='text/javascript'>
  		 window.location='updEspecialidades.php?id=noId'
  		 </script>
  		";
  		break;
  		
  		case('modificar'):
  		$id =$_POST['hdnId'];
  		$clave = $_POST['txtClave'];
  		$nombre = $_POST['txtNombre'];
  		$qry = "UPDATE especialidad SET clave='$clave',nombre='$nombre' WHERE id='$id'";
		
  		$resultado = mysql_query($qry)or die("******** Error al modificar registro:".mysql_error());

  		echo "
  		 <script type='text/javascript'>
  		 window.location='shwEspecialidades.php'
  		 </script>
  		";
  		break;
		
		case('eliminar'):
		$id =$_POST['hdnId'];
  		$qry = "DELETE FROM especialidad WHERE id='$id'";
  		$resultado = mysql_query($qry)or die("******** Error al eliminar registro:".mysql_error());

  		echo "
  		 <script type='text/javascript'>
  		 window.location='shwEspecialidades.php'
  		 </script>
  		";
  		break;
  }
?>
