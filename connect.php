<?php
	echo "test";
	$host = "localhost";
	$user = "cc5401g2";
	$pwd = addslashes("/buX1USo;!97");
	$dbname = "5401_1402_g2";
	$puerto = "3306";
	echo "test";
	$link = mysqli_connect( $host, $user, $pwd ) or die( "Error de conexión: " . mysql_error() );
	mysqli_select_db($link, $dbname);
	
	if (!mysqli_set_charset($link, "utf8")) {
			echo "Error: Unable to set the character set.\n";
			exit;
	}
	$sql = "SELECT * FROM tpr_rol";
	$resultado = mysqli_query($link, $sql) or die('La consulta fallo: ' . mysql_error());
	while(($res = mysqli_fetch_assoc($resultado)) != null){
		print_r($res);
	}
	
	mysqli_close($link);
?>