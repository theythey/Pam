<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>UniCore | Faça seu Login via Empresa de qual cargo e?</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5" >
					</div> 
					<div class="card shadow-lg" style="margin-top: 100px;">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4"style="margin-left: 120px;">Login</h1>
							<form method="POST"  action="cadastrar.php"class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Nome de Usúario</label>
									<input id="email" type="text" class="form-control" name="nome" value="" required autofocus placeholder="Digite seu Usúario...">
									<div class="invalid-feedback">
										Esse Usúario está invalido
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.html" class="float-end">
											Esqueceu sua Senha?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required placeholder="Digite seu Senha..."> 
								    <div class="invalid-feedback">
								    	Digite sua Senha!
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Lembrar Senha</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Conectar-se
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>
