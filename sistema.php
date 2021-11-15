<?php
session_start();
	//print_r($_SESSION);
	if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
	{
		header('Location: login.php');
	}
	
	$logado = $_SESSION['email'];
	
?>

<!DOCTYPE html>
<html long="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-comptible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>sistema</title>
		<style>
		body{
			background-image: linear-gradient(45deg, orchid, mediumorchid);
			color: white;
			text-align: center;
		}
		</style>
	</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8B008B">
				<div class="container-fluid">
						<a class="navbar-brand" href="">sistema</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="dispesas.php">dispesas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="faturamento.php">faturamento</a>
							</li>
								<li class="nav-item">
									<a class="nav-link" href="">Link</a>
								</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Dropdown</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
										</ul>
									</li>
										<li class="nav-item">
											<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
										</li>
						</ul>
							<form class="d-flex">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
					</div>
				</div>
			</nav>
				<br>
				<?php
					echo "<h1>Bem vindo <u>$logado</u></h1>";
				?>
		</body>
	
</html>