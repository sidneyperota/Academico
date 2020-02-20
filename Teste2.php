<?php 
	
	echo "Versao 1.0"; 
	
	include "banco.php"; 
	

	try

	{
	
		echo "Processado com Sucesso!"; 		
	

	}

	catch ( Exception $e ) { 
		echo "Exceção capturada: ", $e->getMessage(), "\n"; 
   	}


?>