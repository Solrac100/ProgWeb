<?php
	session_start();
	if (empty($_SESSION['usr'])) {
		echo "Debe autentificarse";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<script type="text/javascript">
		function opcion(opc) {
				switch (opc){
					case 'Especialidades': top.frames['2'].location.href = "especialidades/shwEspecialidades.php";
					break;
					case 'Materias': top.frames['2'].location.href = "materias/shwMaterias.php";
					break;
					case 'Alumnos': top.frames['2'].location.href = "alumnos.html";
					break;
					case 'Calificacion': top.frames['2'].location.href = "calificaciones.html";
					break;
					case 'Terminar': window.top.location.href = "http://www.its2.com";
					break;
				}
				opc="";
			}	
	</script>
	<style type="text/css">
		.tamaoBoton{
			width: 150px;
			height: 40px;
			color:#ffffff;
			background-color:#8b1228;
			border-radius: 10px 10px 10px 10px;
			-moz-border-radius: 10px 10px 10px 10px;
			-webkit-border-radius: 10px 10px 10px 10px;
			border: 4px solid #000000;
		}
	</style>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<input type="button" value="Especialidades" class="tamaoBoton" onclick="opcion('Especialidades');">
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" value="Materias" class="tamaoBoton" onclick="opcion('Materias');">
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" value="Alumnos" style="width: 150px height:40px;" class="tamaoBoton" onclick="opcion('Alumnos');">
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" value="Calificacion" style="width: 150px height:40px;" class="tamaoBoton" onclick="opcion('Calificacion');">
			</td>
		</tr>
		<tr style="height: 200px">
			<td>
				<input type="button" value="Terminar" style="width: 150px height:40px;" class="tamaoBoton" onclick="opcion('Terminar');">
			</td>
		</tr>
</table>
</body>
</html>
