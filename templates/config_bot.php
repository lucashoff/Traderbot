<!DOCTYPE html>
<html lang="pt-br">
	<title>Cadastro | Traderbot</title>
	
	<?php include "head.html"; ?>	

	<body>
	<?php include "header.html"; ?>		
	<br><br>
	<div class="container text-light">
        <div class="row">
            <div class="col-sm-5">
                <span class="config-title text-light">Configuração do robô</span><br><br>                
            </div>
            <div class="col-sm-6">
                <div class="input-field col">
                    <label>Selecione a criptomoeda: </label>
                    <select class="browser-default grey darken-4" id="moeda">
                        <option value="BTC" selected>Bitcoin</option>
                        <option value="LTC">Litecoin</option>
                        <option value="BCH">BCash</option>
                        <option value="XRP">XRP (Ripple)</option>   
                        <option value="ETH">Ethereum</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col bot-operation">
                <span class="login100-form-title">
                    <div class="comprar-title">Comprar</div>
                </span>
                <div class="row bot-config-row">
                    <div class="col">
                        <div class="row d-flex justify-content-center"><span class="compra-unica">Compra única</span></div><br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    Quando chegar à:
                                </div><br>
                                <div class="row">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    Quantidade:
                                </div><br>
                                <div class="row">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-unica" id="compra-unica-reais" value="real" checked>
                                        <label class="form-check-label" for="compra-unica-reais">Reais</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-unica" id="compra-unica-unidades" value="unidade">
                                        <label class="form-check-label" for="compra-unica-unidades">Unidades</label>
                                    </div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
                
                <div class="row bot-config-row">
                    <div class="col">
                        <div class="row d-flex justify-content-center"><span class="compra-unica">Compra variável</span></div><br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    Quando desvalorizar:
                                </div><br>
                                <div class="row">
                                    <input type="text">
                                </div><br>
                                <div class="row">
                                    Repetir até:    
                                </div>
                                <div class="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="compra-sempre">
                                        <label class="custom-control-label" for="compra-sempre">Sempre</label>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <input type="number" value="1" min="0" max="50" step="1" id="compra-repeat"/>
                                    <label for="compra-repeat">vezes</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    Quantidade:
                                </div><br>
                                <div class="row">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-variavel" id="compra-var-reais" value="real" checked>
                                        <label class="form-check-label" for="compra-var-reais">Reais</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-variavel" id="compra-var-unidades" value="unidade">
                                        <label class="form-check-label" for="compra-var-unidades">Unidades</label>
                                    </div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>

            <div class="col bot-operation">
                <span class="login100-form-title">
                    <div class="vender-title">Vender</div>
                </span>
                <div class="row bot-config-row">
                    <div class="col">
                        <div class="row d-flex justify-content-center"><span class="compra-unica">Compra única</span></div><br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    Quando chegar à:
                                </div><br>
                                <div class="row">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    Quantidade:
                                </div><br>
                                <div class="row">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-unica" id="compra-unica-reais" value="real" checked>
                                        <label class="form-check-label" for="compra-unica-reais">Reais</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-unica" id="compra-unica-unidades" value="unidade">
                                        <label class="form-check-label" for="compra-unica-unidades">Unidades</label>
                                    </div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>

                <div class="row bot-config-row">
                    <div class="col">
                        <div class="row d-flex justify-content-center"><span class="compra-unica">Compra variável</span></div><br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    Quando desvalorizar:
                                </div><br>
                                <div class="row">
                                    <input type="text">
                                </div><br>
                                <div class="row">
                                    Repetir até:    
                                </div>
                                <div class="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="compra-sempre">
                                        <label class="custom-control-label" for="compra-sempre">Sempre</label>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <input type="number" value="1" min="0" max="50" step="1" id="compra-repeat"/>
                                    <label for="compra-repeat">vezes</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    Quantidade:
                                </div><br>
                                <div class="row">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-variavel" id="compra-var-reais" value="real" checked>
                                        <label class="form-check-label" for="compra-var-reais">Reais</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio-compra-variavel" id="compra-var-unidades" value="unidade">
                                        <label class="form-check-label" for="compra-var-unidades">Unidades</label>
                                    </div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
        <br><br>
        <div class="row d-flex justify-content-center">
            <button type="submit" class="btn btn-primary red-button" id="confirma-config">Confirmar</button>
            <button class="btn btn-primary purple-button" id="limpa-config">Limpar configurações</button>
            <a href="home.php"><button class="btn btn-primary black-button" id="cancela-config">Cancelar</button></a>
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