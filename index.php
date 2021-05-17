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

							<div class="col-4">

								<div class="choice__box d-flex justify-content-center p-5">

									<h3 class="text-uppercase">
										calcular a circunferência do circulo
									</h3>
								</div>
							</div>

							<div class="col-4">

								<div class="choice__box p-5">

									<h3 class="text-center text-uppercase">
										escolha 2
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="sec-pattern js-section-visible pt-4" data-value="circle">

			<div class="container">

				<div class="row justify-content-center">

					<div class="col-6">

						<form>

							<fieldset class="form-row">
								
								<div class="col-6">
									<label class="u-font__weight--bold mb-2 pl-2" for="area">
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
									<label class="u-font__weight--bold mb-2 pl-2" for="raio">
										Raio:
									</label>
									<input
									class="form-control"
									type="text"
									name="raio"
									id="raio"
									placeholder="Raio:">
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</section>

		<div class="m-5">

			<?php
				$raio = 5;
				$result = 2 * 3.14 * $raio;

				echo 'Perímetro: ' . $result;
			?>
		</div>

		<!-- boostrapjs -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</body>
</html>