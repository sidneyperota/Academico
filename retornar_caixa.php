<?php
	include "movimento_caixaDAO.php";
	include "Funcoes.php"; 
	session_start(); 
	retornar_caixa( $_POST['dataCaixa'] );
?>