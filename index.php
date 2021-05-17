<?php include 'circle.php'; ?>
<?php include 'rectangle.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Es 2 - Git</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content=>
		<!-- style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<!-- bootstrapcss -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>

		<section class="choice">

			<div class="container">

				<div class="row">

					<div class="col-12">

						<h1 class="text-center mb-5">
							Tarefa GIT
						</h1>

						<div class="row justify-content-center">

							<div class="col-md-4 my-3 my-md-0">

								<a 
								class="choice__box d-flex justify-content-center js-choice p-5"
								href="#circle"
								data-value="circle">

									<h3 class="text-uppercase">
										calcular a circunferência do circulo
									</h3>
								</a>
							</div>

							<div class="col-md-4 my-3 my-md-0">

								<a 
								class="choice__box d-flex justify-content-center js-choice h-100 p-5"
								href="#rectangle"
								data-value="rectangle">

									<h3 class="text-uppercase">
										Retângulo
									</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section 
		class="sec-pattern js-section-visible pt-4" 
		data-value="circle"
		id="circle">

			<div class="container">

				<div class="row flex-column align-items-center">

					<div class="col-12 mb-5">
						<h2 class="text-center text-uppercase">
							calcular a circunferência do circulo
						</h2>
					</div>

					<div class="col-6">

						<form method="POST" action="index.php" name="formToCalculateCircle">

							<fieldset class="form-row">
								
								<div class="col-6">
									<label 
									class="u-font__weight--bold mb-2 pl-2" 
									for="area">
										Área
									</label>
									<input
									class="form-control"
									type="text"
									name="area"
									id="area"
									placeholder="Área:">
								</div>

								<div class="col-6">
									<label 
									class="u-font__weight--bold mb-2 pl-2" 
									for="raio">
										Raio:
									</label>
									<input
									class="form-control"
									type="text"
									name="raio"
									id="raio"
									placeholder="Raio:">
								</div>

								<div class="col-4 mt-2">
									<input 
									class="btn btn-outline-dark"
									type="submit" 
									value="Calcular">
								</div>
							</fieldset>
						</form>
					</div>

					<div class="col-6 mt-4">
						
						<?php
							$pi = 3.14;
							$circle = new Circle();

							if( isset($_POST['area']) ) {
								$circle->setArea($_POST['area']);		

								$resultadoArea = $circle->calcularArea($circle->getArea(), $pi);
							}
							
							if( isset($_POST['raio']) ) {
								$circle->setRaio($_POST['raio']);		

								$resultadoRaio = $circle->calcularPerimetro($circle->getRaio(), $pi);
							}
						?>

						<div class="row">

							<div class="col-6">

								<span class="u-hr-green"></span>

								<p class="mt-3"> 
									<strong>Resultado da área: </strong>
									<?php if(isset($_POST['area'])) 
										echo $resultadoArea; 
									?>
								</p>
							</div>

							<div class="col-6">

								<span class="u-hr-green"></span>

								<p class="mt-3"> 
									<strong>Resultado do Perímetro: </strong>
									<?php if(isset($_POST['area']))
										echo $resultadoRaio; 
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section 
		class="sec-pattern js-section-visible pt-4" 
		data-value="rectangle"
		id="rectangle">

			<div class="container">

				<div class="row flex-column align-items-center">

					<div class="col-12 mb-5">
						<h2 class="text-center text-uppercase">
							retângulo
						</h2>
					</div>

					<div class="col-6">

						<form method="POST" action="index.php" name="formToCalculateRectangle">

							<fieldset class="form-row">
								
								<div class="col-6">
									<label 
									class="u-font__weight--bold mb-2 pl-2" 
									for="base">
										Base
									</label>
									<input
									class="form-control"
									type="text"
									name="base"
									id="base"
									placeholder="Base:">
								</div>

								<div class="col-6">
									<label 
									class="u-font__weight--bold mb-2 pl-2" 
									for="altura">
										Altura:
									</label>
									<input
									class="form-control"
									type="text"
									name="altura"
									id="altura"
									placeholder="Altura:">
								</div>

								<div class="col-4 mt-2">
									<input 
									class="btn btn-outline-dark"
									type="submit" 
									value="Calcular">
								</div>
							</fieldset>
						</form>
					</div>

					<div class="col-6 mt-4">
						<?php
							$rectangle = new Rectangle();

							if( isset($_POST['base']) &&
								isset($_POST['altura'])) {
								$rectangle->setBase($_POST['base']);		
								$rectangle->setAltura($_POST['altura']);			

								$resultadoAreaRectangle = $rectangle->calcularArea($rectangle->getBase(), $rectangle->getAltura());

								$resultadoPerimetroRectangle = $rectangle->calcularPerimetro($rectangle->getBase(), $rectangle->getAltura());
							}
						?>

						<div class="row">

							<div class="col-6">

								<span class="u-hr-green"></span>

								<p class="mt-3"> 
									<strong>Resultado da área: </strong>
									<?php if( isset($_POST['base']) &&
											  isset($_POST['altura']))
											echo $resultadoAreaRectangle; 
									?>
								</p>
							</div>

							<div class="col-6">

								<span class="u-hr-green"></span>

								<p class="mt-3"> 
									<strong>Resultado do Perímetro: </strong>
									<?php if( isset($_POST['base']) &&
											  isset($_POST['altura']))
										echo $resultadoPerimetroRectangle; 	
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- boostrapjs -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>