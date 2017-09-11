<?php
	$conexionBD = mysql_connect('localhost','root','asd') or die('No pudo conectarse al servidor BD:'.mysql_error());
  mysql_select_db('kardex') or die('No encontro la bd:'.mysql_error());
        

	$accion =$_GET['id'];
	
	if ($accion=='noId') {
		echo "
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<script type='text/javascript'>
				function enviar(opc) {
					switch(opc){
						case 'agregar':
						document.getElementById('hdnOpc').value = 'agregar';
						document.getElementById('frmMaterias').submit();
						break;
						case 'regresar':
						window.location='shwMaterias.php'
						break;
					}
				}
			</script>
		</head>
		<body onload='javascript: document.getElementById(\"txtClave\").focus()'>
			<form name='frmUpdMaterias' id='frmUpdMaterias' action='qryMaterias.php' method='POST'>
				<table align='center' width='430' border='1'>
				<tr heigth='100'><td colspan='2' align='center'>
					<b>Agregando Materias</b>
					<input type='hidden' name='hdnOpc' id='hdnOpc'>
				</td></tr>
				<!--
				<tr>
					<td>ID</td>
					<td><input type='text' name='txtId' id='txtId'></td>
				</tr>
				-->
				<tr>
					<td>Clave</td>
					<td><input type='text' name='txtClave' id='txtClave'></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input type='text' name='txtNombre' id='txtNombre'></td>
				</tr>	
				<tr>
					<td colspan='2' align='center'>
						<input type='button' name='btnGrabar' id='btnGrabar' value='Guardar' style='width: 100px' onclick='enviar(\"agregar\")'>
					</td>
				</tr>
				<!--
				<tr>
					<td colspan='2' align='center'>
						<input type='button' name='btnEliminar' id='btnEliminar' value='Eliminar' style='width: 100px' onclick='enviar(\"eliminar\")'>
					</td>
				</tr>
				-->
				<tr>
					<td colspan='2' align='center'>
						<input type='button' name='btnRegresar' id='btnRegresar' value='Regresar' style='width: 100px' onclick='enviar(\"regresar\")'>
					</td>
				</tr>
				</table>
			</form>
		</body>
		</html>
		";
	}else{
		$id = $_GET['id'];
		$qry = "SELECT * FROM materia WHERE id=$id";
		
		$tablaDB = mysql_query($qry);
		
		$registro = mysql_fetch_array($tablaDB);
		$clave = $registro['clave'];
		$nombre = $registro['nombre'];


		echo "
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<script type='text/javascript'>
				function enviar(opc){
					switch(opc){
					case 'modificar':
					document.getElementById('hdnOpc').value = 'modificar';
					document.getElementById('hdnId').value = '$id';
					document.getElementById('frmUpdMaterias').submit();
					break;
					case 'eliminar':
					document.getElementById('hdnOpc').value = 'eliminar';
					document.getElementById('hdnId').value = '$id';
					document.getElementById('frmUpdMaterias').submit();
					break;
					case 'regresar':
					window.location='shwMaterias.php'
					break;			
				}
			}
			</script>
		</head>
		<body onload='javascript: document.getElementById(\"txtNombre\").focus()'>
		
		<form name='frmUpdMaterias' id='frmUpdMaterias' action='qryMaterias.php' method='POST'>
		
		<table align='center' width='430'>
			<tr height='100'>
				<td colspan='2' align='center'>
					<b>Modificando Materias</b>
					<input type='hidden' name='hdnOpc' id='hdnOpc'>
					<input type='hidden' name='hdnId' id='hdnId'>
				</td>
			</tr>
			<!--
			<tr>
                                <td>ID</td>
                                <td>$id</td>
                        </tr>
			-->
			<tr>
				<td>Clave</td>
				<td><input type='text' name='txtClave' id='txtClave' value='$clave'></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type='text' name='txtNombre' id='txtNombre' value='$nombre'></td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
					<input type='button' name='btnGrabar' id='btnGrabar' value='Guardar' style='width: 100px' onclick='enviar(\"modificar\")'>
				</td>
			</tr>
			<tr>
                                <td colspan='2' align='center'>
                                        <input type='button' name='btnEliminar' id='btnEliminar' value='Eliminar' style='width: 100px' onclick='enviar(\"eliminar\")'>
                                </td>
                        </tr>
			<tr>
				<td colspan='2' align='center'>
					<input type='button' name='btnRegresar' id='btnRegresar' value='Regresar' style='width: 100px' onclick='enviar(\"regresar\")'>
				</td>
			</tr>
		</table>
			
		</form>
		
		</body>
		</html>
		";

	}
?>
