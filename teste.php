<?php
	
	
	session_start(); 
	
	include "Funcoes.php";
	include "movimento_caixaDAO.php";

	if  ( $_SESSION['statusCaixa']=="C" ) { 
	  echo "<script> alert('O Caixa não está encerrado.') </script>";	
	} else
	{
	
		$_SESSION['statusCaixa'] = "C";
		retornar_caixa($_SESSION['dataCaixa']);
	}	

	
	echo "<h2> Data do Caixa: ".data($_SESSION['dataCaixa']). "</h2>";


    

?>