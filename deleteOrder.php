<?php

	$id = $_GET["id"];


echo $id;
	require_once('db_connect.php');




	mysqli_query( $conn, "DELETE FROM order_data WHERE o_id=$id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=action_page.php>READ all records</a>";

?>