<!DOCTYPE html>
<html lang="pt-br">
	<title>Login | Traderbot</title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<?php include "head.html"; ?>

	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="../functions/valida.php">
						<span class="login100-form-title p-b-26">
							Bem-vindo ao <div class="text-destaque">Traderbot</div>
						</span>
						<span class="login100-form-title p-b-48">
							<img src="../imagens/logo_bot.png" class="logo">
						</span>

						<div class="wrap-input100 validate-input" data-validate = "E-mail inválido">
							<input class="input100" type="text" name="usuario" maxlength="40">
							<span class="focus-input100" data-placeholder="E-mail"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Insira a senha">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="senha" maxlength="30">
							<span class="focus-input100" data-placeholder="Senha"></span>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit" value="Entrar">
									Login
								</button>
							</div>
						</div>

						<div class="text-center p-t-115">
							<span class="txt1">
								Não possui uma conta?
							</span>

							<a class="txt2 text-destaque" href="cadastro.php">
								<h5><b>Cadastre-se</b></h5>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>
		
	<!--===============================================================================================-->
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../vendor/animsition/js/animsition.min.js"></script>
		<script src="../vendor/bootstrap/js/popper.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../vendor/select2/select2.min.js"></script>
		<script src="../vendor/daterangepicker/moment.min.js"></script>
		<script src="../vendor/daterangepicker/daterangepicker.js"></script>
		<script src="../vendor/countdowntime/countdowntime.js"></script>
		<script src="../js/main.js"></script>

	</body>
</html>