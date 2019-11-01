<?php 

	include "movimento_caixaDAO.php"; 

	$lancamento = retornaSaldos('2019-23-10');
	
	$entrada = $lancamento['entrada'];
	$saida = $lancamento['saida'];
	$entrada_ant = $lancamento['entrada_ant'];
	$saida_ant = $lancamento['saida_ant'];

	$saldo = $entrada_ant - $saida_ant + $entrada - $saida;  
    echo "O Saldo é: ".$saldo; 
?>