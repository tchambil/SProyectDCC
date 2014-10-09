<?php
	$host = "anakena.dcc.uchile.cl";
	$user = "cc5401g2";
	$pwd = "/buX1USo;!97";
	$dbname = "5401_1402_g2";
	$puerto='3306';
	$link = mysql_connect( $host, $user, $pwd ) or die( "Error de conexión: " . mysql_error() );
	mysql_select_db($dbname,$link);
	
	if (!mysql_set_charset('utf8', $link)) {
			echo "Error: Unable to set the character set.\n";
			exit;
	}
	
	$sql = "SELECT *
			FROM tpr_rol";
	$resultado = mysql_query($sql) or die('La consulta fallo: ' . mysql_error());
	while($res = mysql_fetch_array($resultado)){
		echo $res[0]." ".$res[1];
	}
	
	mysql_close($link);
?>