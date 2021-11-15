<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			background-image: linear-gradient(45deg, orchid, mediumorchid);
		}
		div{
			background-color: drackmagenta;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 80px;
			border-radius: 15px;
			color: white;	
		}
		input{
				padding: 15px;
				border: none;
				outline: none;
				font-size: 15px;
				border-radius: 5px;
		}
		.inputsubmit{
			background-color: dodgerblue;
			border: none;
			padding: 15px;
			width: 100%;
			border-radius: 10px;
			color: white;
			font-size: 15px;
		}
		.inputsubmit:hover{
			background-color: deepskyblue;
			cursor: pointer;
		}	
	</style>
</head>
<body>
	<a href="home.php">voltar</a>
	<div>
		<h1>login</h1>
		<form action="testelogin.php" method="POST">
			<input type="text" name="email" placeholder="email" required>
			<br><br>
			<input type="password" name="senha" placeholder="senha" required>
			<br><br>
			<input class="inputsubmit" type="submit" name="submit" value="enviar">
		</form>
	</div>
</body>
</html>