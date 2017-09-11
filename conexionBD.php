<?php  
$conexionBD = mysql_connect('localhost','root','asd') or die('No pudo conectarse al servidor BD:'.mysql_error());
  mysql_select_db('kardex') or die('No encontro la bd:'.mysql_error());
?>

