<?php
	//Criando a conexao
	$con = mysqli_connect('localhost',
						  'root',
						   '',
						   'alunosfofos');

	//Verificando se seu certo
	if (!$con) 
	{
		//Matando o script
		die("Erro ao conectar, otário!!!");

	}


?>