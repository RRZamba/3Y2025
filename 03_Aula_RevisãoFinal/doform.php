<?php
	// 1) Incluindo o script conexao.php
	include("conexao.php");

	// 2) Recebendo valores
	$nome = $_POST['nome']; 
	$sobrenome = $_POST['snome'];
	$nomemae  = $_POST['nmae']; 	

	// 3) Montando a QUERY
	$querySQL = 
	"INSERT INTO migo(nome_migo,sobrenome_Migo,mae_do_migo)VALUES  ('$nome','$sobrenome','$nomemae')";


	// 4) Executando a QUERY
	$resultado = mysqli_query($con,$querySQL);

	// 5) Verificando se funcionou
	if($resultado)
	{
		echo "Dados Inseridos com sucesso!";
	}
	else
	{
		echo $querySQL;
	}


	
	


 ?>