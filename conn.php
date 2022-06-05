<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "sb";
	
	//Conexao com a base de dados
	$mysqli = mysqli_connect($servidor, $usuario, $senha, $dbname);

	//configuracao de caracteres
	mysqli_set_charset( $mysqli, "UTF8");

	//configuracao do timezone
	date_default_timezone_set("Africa/Maputo");

	//modelos de tempo;
	$data_pt = date("d-m-Y");
	$data_eng = date("Y-m-d");
	$data_time_pt = date("d-m-Y h:i");
	$data_time_eng = date("d-m-Y h:i");
?>