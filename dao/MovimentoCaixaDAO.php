<?php


	include "IDao.php";	
	include "banco.php";

	class MovimentoCaixaDAO implements IDao { 

		private $conexao; 

		function __construct() {  
    		$this->conexao = conectar();
    	}	

		public function gravar( $obj ) {

		
				$dataCaixa 	= $obj->getCaixa()->getData(); 
				
				$conta 		= $obj->getConta(); 
                $operacao 	= $obj->getOperacao(); 
                $historico	= $obj->getHistorico(); 
                $valor		= $obj->getValor(); 
                $usuario 	= $obj->getUsuario(); 
                $doc		= $obj->getDoc(); 

                $sql = "insert into movimento_caixa ( data, conta, operacao, historico, valor, usuario, doc ) 
                        values ( '$dataCaixa', '$conta','$operacao','$historico', $valor, $usuario, '$doc' )";

				echo $sql; 					
				
				
				if ($this->conexao-> query($sql)== true ) { 
                  echo "<h3> Dados inseridos com sucesso!</h3>";  
                } else
                {
                  echo "Falha ao tentar gravar os dados no servidor";                    
                }

               mysqli_close( $this->conexao );
		}


		public function alterar( $obj ) {

		}
		
		public function excluir( $obj ) {

		}

		public function consultar( $obj ) {
			return null; 
		} 

		public function pesquisar( $obj ) {
			return null; 
		} 

		public function listarTodosLancamentos() { 
			$sql = "SELECT * FROM movimento_caixa";
			$resultado = mysqli_query( $this->conexao, $sql );
			return $resultado; 		
		}

	}



?>