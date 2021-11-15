<?php
if(isset($_POST['submit'])){
	
	//print_r($_POST['codigo']);
	//print_r('<br>');
	//print_r($_POST['atendente']);
	//print_r('<br>');
	//print_r($_POST['conferente']);
	//print_r('<br>');
	//print_r($_POST['apptransacao']);
	//print_r('<br>');
	//print_r( $_POST['dataerro']);
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
	
	$codigo = $_POST['codigo'];
	$atendente = $_POST['atendente'];
	$conferente = $_POST['conferente'];
	$app_transacao = $_POST['apptransacao'];
	$data_transacao = $_POST['dataerro'];
	$tipo_erro = $_POST['erro'];
	$desc_erro = $_POST['descerro'];
	$tipo_operacao = $_POST['tipooperacao'];
	$valor_operacao = $_POST['valor'];
	$obs = $_POST['obsevacao'];
	
	include_once('conexao.php');
	
	$sql = mysqli_query($conexao, "INSERT INTO erros_todos VALUES ($codigo, '$atendente', '$conferente', '$app_transacao', '$data_transacao', '$tipo_erro', '$desc_erro', '$tipo_operacao', $valor_operacao, '$obs')");
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
	<title>localhost/cadas_erros/index.php</title>
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
			width: 50%;
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
			width: 40%;
			letter-spacing: 2px;
		}
		.inputerro{
			position: relative;
			left: 50%;
		}
		.inputerro{
			background: none;
			border: none;
			border-bottom: 1px solid white;
			outline: none;
			color: white;
			font-size: 15px;
			width: 50%;
			letter-spacing: 2px;
		}
		.labelinputerro{
			position: absolute;
			top: 0px;
			left: 50%;
			pointer-events: none;
			transition: .5s;
		}
		.labelinput{
			position: absolute;
			top: 0px;
			left: 0px;
			pointer-events: none;
			transition: .5s;
		}
		.inputUser:focus ~ .labelinput,
		.inputUser:valid ~ .labelinput{
			top: -20px;
			font-size: 12px;
			color: dodgerblue;
		}
		.inputerro:focus ~ .labelinputerro,
		.inputerro:valid ~ .labelinputerro{
			top: -20px;
			font-size: 12px;
			color: dodgerblue;
		}
		#data{
			position: relative;
			top: 0%;
			left: 10%;
		}
		#data{
			border: none;
			padding: 8px;
			border-radius: 10px;
			outline: none;
			font-size: 15px;
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
			<form action="index.php" method="POST">
				<fieldset>
					<legend><b>cadastro de erros</b></legend>
							<br>
								<br><br>
							<div class="inputbox">
								<input type="text" name="atendente" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">atendente</label>
							</div>
							<div class="inputbox">
								<input type="text" name="codigo" id="erro" class="inputerro" required>
								<label for="nome" class="labelinputerro">codigo</label>
							</div>	
								<br>
							<div class="inputbox">
								<input type="text" name="conferente" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">conferente</label><label for="data" id="data"><b>data</b></label>
								<input type="date" name="dataerro" id="data" required>
							</div>	
								<br>
							<div class="inputbox">
								<input type="text" name="apptransacao" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">app datransação</label>
							</div>		
								<br>
							<p>tipo de erro</p>
								<input type="radio" id="erro leve" name="erro" value="L" required>
								<label for="erro leve">LEVE</label>
								<br>
								<input type="radio" id="erro medio" name="erro" value="M" required>
								<label for="erro medio">MEDIO</label>
								<br>
								<input type="radio" id="erro grave" name="erro" value="G" required>
								<label for="erro grave">GRAVE</label>	
								<br>
							<div class="inputbox">
								<input type="text" name="descerro" id="leve" class="inputerro" required>
								<label for="nome" class="labelinputerro">desc erro leve</label>
							</div>
							<div class="inputbox">
								<input type="text" name="tipooperacao" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">tipo de operação</label>
							</div>
								<br>				
							<div class="inputbox">					
								<input type="text" name="valor" id="nome" class="inputUser" required>
								<label for="nome" class="labelinput">valor</label>
							</div>	
								<br><br>
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