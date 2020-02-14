<?php 
	
	
	$caminho = $_SERVER['DOCUMENT_ROOT']; 
	//include $caminho."\\"."Global.php";
	//include "Global.php";

	include $caminho."\\dao\\MovimentoCaixaDAO.php";
	include $caminho."\\controle\\MovimentoCaixa.php";


	$movimentoCaixaDAO = new MovimentoCaixaDAO(); 

	$movimentoCaixa = new MovimentoCaixa();  

	$movimentoCaixa->getCaixa()->setData("2019-12-01");
	$movimentoCaixa->setConta("12232");
	$movimentoCaixa->setOperacao("E");
	$movimentoCaixa->setHistorico("Recebido valor Ilhota Almeida e Filho Ltda.");
	$movimentoCaixa->setValor("150.00");
	$movimentoCaixa->setUsuario("1"); 
	$movimentoCaixa->setDoc("1234888");

	$movimentoCaixaDAO->gravar($movimentoCaixa);

	echo "Parabéns, gravado com Sucesso!";



	//$caminho = $_SERVER['DOCUMENT_ROOT']; 

	//echo $_SERVER['HTTP_HOST']; 

	//$obj_var = new Variaveis(); 
	
	







	



?>