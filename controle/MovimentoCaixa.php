<?php 

	
	$caminho = $_SERVER['DOCUMENT_ROOT']; 
	include $caminho."\\"."controle\\Caixa.php";

	class MovimentoCaixa { 

		public $id;
		public $caixa; 
		public $conta; 
		public $operacao; 
		public $historico; 
		public $valor; 
		public $usuario; 
		public $doc; 



		function __construct() {  
    		
    		$novo_caixa = new Caixa("2020-02-12","C");
    		
    	}	
		
	}


?>	