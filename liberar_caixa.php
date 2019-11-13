<?php
	include "movimento_caixaDAO.php";
	include "Funcoes.php"; 
	session_start(); 
	liberarCaixa( $_POST['dataCaixa'] );
?>