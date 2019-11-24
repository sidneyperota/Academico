<?php
	
	
	//session_start(); 
	
	include "Funcoes.php";
	include "movimento_caixaDAO.php";

	
	echo obter_status_caixa($_SESSION['dataCaixa']);
	


    

?>