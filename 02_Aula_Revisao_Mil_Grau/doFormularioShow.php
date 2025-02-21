<?php
	//Incluindo o arquivo conexao
	include 'conexao.php';

	//Recebendo os dados do form
	$nominho = $_POST['nome'];
	$sobrenominho = $_POST['sobrenome'];
	$nomemae = $_POST['mae'];

	//Criando a query de insert
	$query = "INSERT INTO migo(nome,sobrenome,nomemae)
	          VALUES ('$nominho','$sobrenominho','$nomemae')";

    //Executando a query
    $resultado = mysqli_query($con,$query);  

    if($resultado)
    {
    	echo "Amigo inserido com sucesso!!! <br>";
    }
    else
    {
    	echo "Erro ao inserir!!! <br> Agora MORRA!!!";
    	echo $query;
    }


?>