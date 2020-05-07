<!DOCTYPE html>
<html lang="pt-br">
	<title>Cadastro | Traderbot</title>
	
	<?php include "head.html"; ?>	

	<body>
	<?php include "header.html"; ?>		
	<br><br><br><br>
	<div class="container text-light">
		<div class="row justify-content-md-center">
		<h2>Faça seu cadastro</h2>
		</div>
		<br><br>
		<div class="row justify-content-md-center">
			<form  class="cadastro col-sm-6" action="../functions/salva-cadastro.php" method="POST">
				<div class="form-group">
					<label for="nome-completo">Nome completo:</label>
					<input type="text" name="nome" class="form-control" id="nome-completo" maxlength="40">
				</div><br>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="e-mail" class="form-control" id="email" maxlength="40">
				</div><br>
				<div class="form-group">
					<label for="email-confirm">Confirmação do e-mail:</label>
					<input type="email" class="form-control" id="email-confirm" maxlength="40" name="e-mail-confirm">
				</div><br>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" class="form-control" id="senha" maxlength="15" name="pass">
				</div><br>
				<div class="form-group">
					<label for="senha-confirm">Confirmação da senha:</label>
					<input type="password" class="form-control" id="senha-confirm" maxlength="15" name="pass-confirm">
				</div><br>
				<div class="row justify-content-md-center">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-primary red-button">Cadastrar</button>
					</div>
					<div class="col-sm-4">
						<a href="#"><button class="btn btn-primary black-button">Cancelar</button></a>
					</div>	
				</div>
			</form>	
		</div>	
	</div>
	<br><br>
	<?php include "footer.html"; ?>	
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../vendor/animsition/js/animsition.min.js"></script>
		<script src="../vendor/bootstrap/js/popper.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../vendor/select2/select2.min.js"></script>
		<script src="../vendor/daterangepicker/moment.min.js"></script>
		<script src="../vendor/daterangepicker/daterangepicker.js"></script>
		<script src="../vendor/countdowntime/countdowntime.js"></script>

	</body>
</html>