<?php
	include "movimento_caixaDAO.php";
	include "Funcoes.php"; 
	session_start(); 
	liberarCaixa( $_SESSION['dataCaixa'] );

	 echo "<script>";  
     echo "window.location=\"listaMovimento.php\";"; 
     echo "</script>";   
?>