<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Es 2 - Git</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content=>
		<!-- style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<!-- bootstrapcss -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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

		<div class="m-5">

			<?php
				$raio = 5;
				$result = 2 * 3.14 * $raio;

				echo 'Perímetro: ' . $result;
			?>
		</div>

		<!-- boostrapjs -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>