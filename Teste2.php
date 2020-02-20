<?php 
	
	include "dao2/MovimentoCaixaDAO.php";   
	include "controle/MovimentoCaixa.php";


	$movimentoCaixaDAO = new MovimentoCaixaDAO(); 


	

	
	$resultado = $movimentoCaixaDAO->listarTodosLancamentos(); 
	
	$lancamento = array();

	while ($lancamento = mysqli_fetch_assoc($resultado) ) 
	{
		$lancamentos[] = $lancamento;
	}  

	if ( count($lancamentos) > 0 ) { 
	print_r( $lancamentos );
	} else
	{ 
		echo "Não foi retornado registros."; 

	}


?>