<?php
	
	
	session_start(); 
	
	include "Funcoes.php";
	include "movimento_caixaDAO.php";

	retornar_caixa($_SESSION['dataCaixa']);

	$_SESSION['statusCaixa'] = "C";
	echo "<h2> Data do Caixa: ".data($_SESSION['dataCaixa']). "</h2>";


    

?>