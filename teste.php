<?php
	
	$caminho = $_SERVER['DOCUMENT_ROOT']; 
	
	include $caminho."\\"."controle\\MovimentoCaixa.php";
	include $caminho."\\"."dao\\MovimentoCaixaDAO.php";



/*
	$caixa = new Caixa( "2020-02-12","C"); 
	echo "<br> Troco a data\n";
	$caixa->data = "2020-02-13";
	echo $caixa->data;	

*/	
	
	$mov_caixa = new MovimentoCaixa; 

	$mov_caixa->getCaixa()->setData("2020-02-13");

	echo $mov_caixa->getCaixa()->getData();




	//echo "Obtendo a data do ultimo Objeto instanciado: ". $teste->data; 


?>