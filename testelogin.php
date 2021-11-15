<?php
session_start();
	//print_r($_REQUEST);
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
	{
		
		//ACESSAR
		include_once('conexao.php');
		//print_r('email: ' . $email);
		//print_r('<br>');
		//print_r('senha: ' . $senha);
		//print_r('<br>');
		
		$sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
		$result = $conexao->query($sql);
		
		//print_r($result);
		if(mysqli_num_rows($result) < 1)
		{
			unset($_SESSION['email']);
			unset($_SESSION['senha']);
			header('Location: login.php');
		}
		else
		{
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha;
			header('Location: sistema.php');
		}
	}
	else
	{
		//não acessa
		header('Location: login.php');
	}
	
?>