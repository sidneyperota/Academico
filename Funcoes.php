<?php 


	function moeda($get_valor) {
		$source = array('.', ',');
		$replace = array('', '.');
		$valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
		return $valor; //retorna o valor formatado para gravar no banco
	}

	function virgPonto($get_valor) {
		$source = array('.', ',');
		$replace = array('', '.');
		$valor = str_replace($source, $replace, $get_valor ); //remove os pontos e substitui a virgula pelo ponto
		return $valor; //retorna o valor formatado para gravar no banco
	}


	function formatarMoeda( $valor ) { 
		$valor_formatado = number_format($valor, 2, ',', '.');
		return $valor_formatado; 
	}	


	function data($data){
    	return date("d/m/Y", strtotime($data));
    }	

    function dataSql($data){
    	return date("Y-m-d", strtotime($data));
    }	



?>