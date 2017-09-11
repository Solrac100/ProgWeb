<?php
	session_start();
	if(empty($_SESSION['usr'])){
		echo "Debe autentificarse";
	}
?>
<style type="text/css">
	.fondo{
                        background-color:#a9a9a9;
                }
        .wideimage {
			margin: auto auto;			

	}
</style>

<html>
<frameset rows="30%,*" class="wideimage">
	<frame src="bannerITS.jpg" noresize="noresize" scrolling="no" style="text-align:center;">

	<frameset cols="15%,60%" class="fondo">
		<frame src="opcionesmenu.php" noresize="noresize" scrolling="no" class="fondo">
		<frame src="nada.html" noresize="noresize" scrolling="no" class="fondo">
	</frameset>
</frameset>
</html>
