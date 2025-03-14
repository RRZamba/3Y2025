<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selecionandinho!!!</title>
</head>
<body>
	   <!-- selecionar.php -->
	   <h1>Dados dos aluno mongo!!!</h1>
	   
	   <?php
	   		// 1) Incluindo a conexao
	   		include('conexao.php');

	   		// 2) Montando a query
	   		$query = "SELECT * FROM alunos";

	   		// 3) Executando a query
	   		$result = mysqli_query($con,$query);


	   		// 4) Percorrendo linha por linha 
	   		// para recuperar os valores
	   		while($linha = mysqli_fetch_array($result)) 
	   		{
	   			//Enquanto houver linha
	   			echo "Id: ";
	   			echo $linha['id'];
	   			echo "<br>";

	   			echo "Nome: ";
	   			echo $linha['nome'];
	   			echo "<br>";

				echo "Sobrenome: ";	
				echo $linha['sobrenome'];
				echo "<br>";

				echo "Curso: ";	
				echo $linha['curso'];
				echo "<br>";

				echo "Endereço: ";
				echo $linha['endereco'];
				echo "<br>";



	   		}
	   ?>

</body>
</html>