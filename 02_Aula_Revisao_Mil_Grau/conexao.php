<?php
    //Conectando com o server e o DB
	$con = mysqli_connect('localhost',
						  'root',
						  '',
						  'amigosdozamba'); 

	//Verificando status
	if(!$con)
	{
		die('Erro ao conectar!!! <br> Seu !@#$$#@!!!');
	}



?> 