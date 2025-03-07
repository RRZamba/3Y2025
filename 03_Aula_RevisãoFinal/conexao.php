<?php 
	//Conectando com o 
    //Server e o DB
	$con =mysqli_connect('localhost',
				   'root','','migo');

	//Verificando status da conexao
	if(!$con)	
	{
		die('Erro ao conectar!!!');
	}
?>

