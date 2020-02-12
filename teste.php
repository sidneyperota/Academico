<?php
	
	$caminho = $_SERVER['DOCUMENT_ROOT']; 
	
	include $caminho."\\"."controle\\MovimentoCaixa.php";


/*
	$caixa = new Caixa( "2020-02-12","C"); 
	echo "<br> Troco a data\n";
	$caixa->data = "2020-02-13";
	echo $caixa->data;	

*/	
	
	 
	$mov_caixa = new MovimentoCaixa; 

	$teste = new Caixa("2020-02-13","L");

	echo "Obtendo a data do ultimo Objeto instanciado: ". $teste->data; 




    

?>