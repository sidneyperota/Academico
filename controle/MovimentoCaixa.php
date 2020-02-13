<?php 

	
	$caminho = $_SERVER['DOCUMENT_ROOT']; 
	include $caminho."\\"."controle\\Caixa.php";

	class MovimentoCaixa { 

		private $id;
		private $caixa; 
		private $conta; 
		private $operacao; 
		private $historico; 
		private $valor; 
		private $usuario; 
		private $doc; 

		
		public function setId($id) { 
			$this->id = $id; 
		}

		public function getId() { 
			return $this->id; 
		}

		public function setCaixa( $caixa ) { 
			$this->caixa = $caixa; 
		}

		public function getCaixa() { 
			return $this->caixa; 
		}

		public function setConta($conta) { 
			$this->conta = $conta; 
		}

		public function getConta() { 
			return $this->conta; 
		}

		public function setOperacao($operacao) { 
			$this->operacao = $operacao; 
		}

		public function getOperacao() { 
			return $this->operacao; 
		}


		public function setHistorico($historico) { 
			$this->historico = $historico; 
		}

		public function getHistorico() { 
			return $this->historico; 
		}

		public function setValor($valor) { 
			$this->valor = $valor; 
		}

		public function getValor() { 
			return $this->valor; 
		}

		public function setUsuario($usuario) { 
			$this->usuario = $usuario; 
		}

		public function getUsuario() { 
			return $this->usuario; 
		}

		public function setDoc($doc) { 
			$this->doc = $doc; 
		}

		public function getDoc() { 
			return $this->doc; 
		}


		function __construct() {  
    		$this->caixa = new Caixa();
    	}	

		
	}


?>	