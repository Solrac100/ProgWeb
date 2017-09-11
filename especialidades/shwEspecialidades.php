<?php
	session_start();
	if (empty($_SESSION['usr'])) {
		echo "Debe autentificarse";
		exit();
	}
	
	$conexionBD = mysql_connect('localhost','root','asd') or die('No pudo conectarse al servidor BD:'.mysql_error());
  mysql_select_db('kardex') or die('No encontro la bd:'.mysql_error());


	$qry = "SELECT * FROM especialidad ORDER BY nombre";
	$tablaBD = mysql_query($qry);

	if (mysql_num_rows($tablaBD)>0) {
		echo "
		<html>
		<title></title>
		<head>
			<script type='text/javascript'>
				function enviar() {
					window.location='updEspecialidades.php?id=noId';
				}
			</script>
		</head>
		<body>
			<table align='center' width='430' border='1'>
				<tr>
					<td colspan='2' align='right'>
						<input type='button' name='btnAgregar' id='btnAgregar' value='Agregar' onclick='enviar()'>
					</td>
				</tr>
			</table>
			<table id='idTabla' border='1' align='center' width='430'>
				<tr><td>
					<thead>
						
						<tr style='background-color: #BAB7B7'>
						<!--
						<th width='30' height='20'>ID</th>
						-->
						<th width='30' height='20'>Clave</th>
						<th width='400' height='20'>Nombre</th>
						</tr>
					</thead>
				</td></tr>
				";

				while ($registro = mysql_fetch_array($tablaBD)) {
					$id = $registro['id'];
					$clave = $registro['clave'];
					$nombre = $registro['nombre'];
					echo "
					<tr>
						<!--
						<script type='text/javascript'>
							document.getElementById(\"hdnId\").value=$id;
						</script>
						-->
						<!--
						<td><a href='updEspecialidades.php?id=$id'>".$id."</a></td>
						-->
						<td><a href='updEspecialidades.php?id=$id'>".$clave."</td>
						<td>".$nombre."</td>
					</tr>
					";
				}

			echo"</table>";

		}
		else {
			echo "
			<table border='0' align='center' bordercolor='#FF333'>
				<tr>
					<td>
					</td>
				</tr>
				<tr align='center'>
					<td width='1000' align='center'><font color='#FF333'>No existen registros en la tabla de Especialidades!!</font></td>
				</tr>
			</table>
			";
		

		echo "
		</body>
		";
		
	}

	mysql_free_result($tablaBD);
	mysql_close($conexionBD);
		
	echo "
	</html>
	";		
?>
