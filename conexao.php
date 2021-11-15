<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'erros';
	
	$conexao = new Mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	
	if($conexao->connect_errno)
	{
		echo "erro";
	}
	else
	{
		echo "conexão efetuada com sucesso";
	}

?>