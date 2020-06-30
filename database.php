<?php
function database (){
	$host = "sql205.epizy.com";
	$username = "epiz_26133364";
	$password = "AYZHIFPrg5DBK";
	$database = "epiz_26133364_phishing";

	$conn = new mysqli($host, $username, $password, $database);
	if($conn->error){
		echo $conn_error;
	}
	else {
		return $conn;
	}
}
?>