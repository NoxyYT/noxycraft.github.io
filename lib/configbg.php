<?php 
	$nameDB = "u-world";
	$nameSERVER = "localhost";
	$nameUSER = "root";
	$passUSER = "56eu-world.sudsiuKbb779";

	$conDB = mysqli_connect($nameSERVER, $nameUSER, $passUSER, $nameDB) 
	or die("ERROR".mysqli_error($nameDB));

	mysqli_query($conDB, "SET NAMES utf8");
?>