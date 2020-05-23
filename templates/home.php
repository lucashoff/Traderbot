<!DOCTYPE html>
<html lang="pt-br">
	<title>Dashboard | Traderbot</title>
	
	<?php include "head.html"; ?>

	<body>
		
		<?php include "header.html"; ?>
		<div class="container-fluid">
			<div class="row text-light padding-5">Bem-vindo à sua conta, ...</div>
		</div>
		<br><br>
		<div class="container text-light">
			<div class="row">
				<div class="col">
					<div class="row">
						<span class="config-title text-light">Informações da Conta</span><br><br><br>
					</div>
					<div class="row">
						<h4>Saldo atual em reais:</h4>
					</div>
					<div class="row">
						<h3><div id="saldo-reais">R$ 0,00</div></h3>
					</div>
					<br>
					<div class="row">
						<div class="input-field col no-padding">
							<label>Selecione a criptomoeda: </label>
							<select class="browser-default grey darken-4" id="moeda">
								<option value="BTC" selected>Bitcoin</option>
								<option value="LTC">Litecoin</option>
								<option value="BCH">BCash</option>
								<option value="XRP">XRP (Ripple)</option>   
								<option value="ETH">Ethereum</option>
							</select>
						</div>
						<div class="col">
							<a href="https://www.mercadobitcoin.com.br/conta/login/" target="_blank"><button class="btn btn-warning">Acessar conta no Mercado Bitcoin</button></a>
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col">
							<div class="row">
								<label>Valor unitário atual: </label>
							</div>
							<div class="row">
								<h4><div id="valor-unitario-atual">R$ 0,00</div></h4>
							</div>
							<div class="row">
								<label>Valor máximo do dia: </label>
							</div>
							<div class="row">
								<h4><div id="valor-maximo-dia">R$ 0,00</div></h4>
							</div>
						</div>
						<div class="col">
							<div class="row">
								<label>Saldo atual em xxx: </label>
							</div>
							<div class="row">
								<h4><div id="saldo-moeda-atual">R$ 0,00</div></h4>
							</div>
							<div class="row">
								<label>Valor mínimo do dia: </label>
							</div>
							<div class="row ">
								<h4><div id="valor-minimo-dia">R$ 0,00</div></h4>
							</div>
						</div>
					</div>
					<div class="row justify-content-md-center margin20">
						<a href="config_bot.php"><button class="btn btn-warning">Configurar negociações do robô</button></a>		
					</div>
					
				</div>

				<div class="col">

				</div>
			</div>
		</div>
		<br><br><br>
		<?php include "footer.html"; ?>	

		<script src="../js/loadinfo.js"></script>
	</body>
</html>