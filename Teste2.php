<?php 
	
	include "dao/MovimentoCaixaDAO.php";   
	include "controle/MovimentoCaixa.php";


	echo "teste carregado com sucesso!";


	$movimentoCaixaDAO = new MovimentoCaixaDAO(); 


	echo "Objeto instanciado!"; 

	
	$resultado = $movimentoCaixaDAO->listarTodosLancamentos(); 
	
	$lancamento = array();

	while ($lancamento = mysqli_fetch_assoc($resultado) ) 
	{
		$lancamentos[] = $lancamento;
	}  


	print_r( $lancamentos );


?>