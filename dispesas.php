<?php
session_start();
	//print_r($_SESSION);
	if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
	{
		header('Location: login.php');
	}
	
	$logado = $_SESSION['email'];
	
if(isset($_POST['submit'])){
	
	//print_r($_POST['datadispesa']);
	//print_r('<br>');
	//print_r($_POST['usuario']);
	//print_r('<br>');
	//print_r($_POST['dispesas']);
	//print_r('<br>');
	//print_r($_POST['valor']);
	//print_r('<br>');
	//print_r( $_POST['obsevacao']);
	//print_r('<br>');
	//print_r( $_POST['erro']);
	//print_r('<br>');
	//print_r( $_POST['descerro']);
	//print_r('<br>');
	//print_r( $_POST['tipooperacao']);
	//print_r('<br>');
	//print_r( $_POST['valor']);
	//print_r('<br>');
	//print_r( $_POST['obsevacao']);
	
	$datadis = $_POST['datadispesa'];
	$usuario = $_POST['usuario'];
	$dispesas = $_POST['dispesas'];
	$valor = $_POST['valor'];
	$observacao = $_POST['obsevacao'];
	//$tipo_erro = $_POST['erro'];
	//$desc_erro = $_POST['descerro'];
	//$tipo_operacao = $_POST['tipooperacao'];
	//$valor_operacao = $_POST['valor'];
	//$obs = $_POST['obsevacao'];
	
	include_once('conexao.php');
	
	$sql = mysqli_query($conexao, "INSERT INTO dispesas VALUES (default,'$datadis', '$usuario', '$dispesas', $valor, '$observacao')");
	$linhas = mysqli_affected_rows($conexao);
	
	if($linhas == 1)
	{
		echo "registro gravado com sucesso<br/>";
	}
	else
	{
		echo "falha na gravacão do registro<br/>";
	}
	
	mysqli_close($conexao);
}
?>
<!DOCTYPE html>
<html long="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-comptible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>dispesas</title>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			background-image: linear-gradient(45deg, orchid, mediumorchid);
		}
		.box{
			color: white;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background-color: rgba(0, 0, 0, 0.6);
			padding: 15px;
			border-radius: 15px;
			width: %;
		}
		fieldset{
		border: 3px solid dodgerblue;
		}
		legend{
			border:1px solid dodgerblue;
			padding: 10px;
			text-align: center;
			background-color: dodgerblue;
			border-radius: 8px;
		}
		.inputbox{
			position: relative;
			right: 0%;
		}
		.inputUser{
			background: none;
			border: none;
			border-bottom: 1px solid white;
			outline: none;
			color: white;
			font-size: 15px;
			width: 100%;
			letter-spacing: 2px;
		}
		.labelinput{
			position: absolute;
			top: 0px;
			left: 0px;
			pointer-events: none;
			transition: .5s;
		}
		.data{
			background: none;
			border: none;
			border-bottom: 1px solid white;
			outline: none;
			color: white;
			font-size: 15px;
			width: 100%;
			letter-spacing: 2px;
		}
		.listsuspece{
			background: none;
			border: none;
			border-bottom: 1px solid white;
			outline: none;
			color: white;
			font-size: 15px;
			width: 100%;
			letter-spacing: 2px;
		}
		.lista{
			color: black;
		}
		.inputUser:focus ~ .labelinput,
		.inputUser:valid ~ .labelinput{
			top: -20px;
			font-size: 12px;
			color: dodgerblue;
		}
		#submit{
			background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
			width: 100%;
			border: none;
			padding: 15px;
			color: white;
			font-size: 15px;
			cursor: pointer;
			border-radius: 10px;
		}
		#submit:hover{
			background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
		}
	</style>
</head>
	<body>
		<a href="home.php">volta</a>
			<div class="box">
				<form action="dispesas.php" method="POST">
					<fieldset>
						<legend><b>dispesas mensais</b></legend>
								<br>
							<div class="inputbox">
								<label for="data" class="data" id="data"><b>data</b></label>
								<input type="date" class="data" name="datadispesa" id="data" required>
							</div>
								<br><br>	
							<select type="text" class="listsuspece" name="usuario" id="usuario">
								<option class="lista" value="claudio">claudio</option>
								<option class="lista" value="ricardo">ricardo</option>
							</select>
								<label for="nome" class="labelin">usuario</label>
								<br><br>
							<select type="text" class="listsuspece" name="dispesas" id="dispesas">
								<option class="lista" value="copel">copel</option>
								<option class="lista" value="sanepar">sanepar</option>
								<option class="lista" value="aluguel">aluguel</option>
								<option class="lista" value="limpesa">limpesa</option>
								<option class="lista" value="combustive">combustive</option>
								<option class="lista" value="estacionemento">estacionemento</option>
								<option class="lista" value="manutençao">manutençao</option>
								<option class="lista" value="contabilidade">contabilidade</option>
								<option class="lista" value="mat. escritorio">mat. p/ escritorio</option>
								<option class="lista" value="folha de pagamento">folha de pagamento</option>
								<option class="lista" value="pagamento bonus">pagamento bonus</option>
								<option class="lista" value="outros">outros</option>
							</select>
								<label for="nome" class="labelin">dispesas</label>
								<br><br>	
							<div class="inputbox">					
								<input type="text" name="valor" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">valor</label>
							</div>	
								<br>
							<div class="inputbox">					
								<input type="text" name="obsevacao" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">observacões</label>
							</div>
								<br>
								<input type="submit" name="submit" id="submit">
					</fieldset>
				</form>
			</div>
	</body>
</html>
