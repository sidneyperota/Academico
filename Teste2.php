<?php 
	
	echo "Versao 1.0"; 
	
	include "banco.php"; 
	

	try

	{
	
		if ( $_SERVER['HTTP_HOST'] == "meuappfinanceiro.com.br" ) { 
			
			echo "caminho do banco correto!";
			
		} else
		{
			echo $_SERVER['HTTP_HOST'];

		}	
		
		
		
		
		
		
		
		
		
		echo "Processado com Sucesso!"; 		
	

	}

	catch ( Exception $e ) { 
		echo "Exceção capturada: ", $e->getMessage(), "\n"; 
   	}


?>