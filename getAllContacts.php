<?php 
	$db_host = "u3y93bv513l7zv6o.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
	$db_name = "sdgyyornas45yphd";
	$db_user = "tt503l2sp3jm2ktv";
	$db_pass = "byzixi8now75ua6t";

	$connection = mysql_connect($db_host, $db_user, $db_pass) or die ("Connection Error: ".mysql_error());

	mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
		@mysql_query("SET NAMES'utf8'");

	$sql_query = "SELECT * FROM contactos;";
	$result = mysql_query($sql_query);
	$rows = array();
	
	while($r = mysql_fetch_assoc($result)) {
  		$rows[] = $r;
	}

	print json_encode($rows);

?>
