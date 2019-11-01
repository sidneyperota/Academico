<?php


		include "banco.php";	

		function resumoCaixa( $data ) { 

			$conexao = conectar();
			$sql = "SELECT * FROM movimento_caixa where data = '$data' ";
			$resultado = mysqli_query($conexao, $sql );
			return $resultado; 		
		}

		
		function liberarCaixa( $data ) { 

			$conexao = conectar();
			
			$dataCaixa = dataSql( $_SESSION['dataCaixa'] );

			$sql = "update caixa set status=\"L\" where data = '$dataCaixa' ";
						
 			if ($conexao-> query($sql)== true ) { 
                  echo "<h3> Dados inseridos com sucesso!</h3>";  
            } else
            {
               echo "falha envio dos dados";                    
            }

            mysqli_close( $conexao );
			
		}


		function ultimoCaixa( ) { 
			$conexao = conectar();
			$sql = 'SELECT max(data) as data FROM caixa';
			$resultado = mysqli_query($conexao, $sql );
    		$lancamento = array();
    		$lancamento = mysqli_fetch_assoc($resultado);
			return $lancamento['data'];
		}

	
	function retornaSaldos( $data ) { 	
	
		$conexao = conectar();
		
		$sql = "select entrada, saida, saida_ant, entrada_ant 
	            from 

	            ( SELECT sum(valor) as entrada 
				  FROM movimento_caixa
				  where operacao=\"E\" and data='$data' ) as entr, 

				( SELECT sum(valor) as saida 
				  FROM movimento_caixa
				  where operacao=\"S\" and data='$data') as sai, 

				( SELECT sum(valor) as saida_ant 
				  FROM movimento_caixa
				  where operacao=\"S\" and data<'$data') as saida_anterior, 

				( SELECT sum(valor) as entrada_ant 
				  FROM movimento_caixa
				  where operacao=\"E\" and data<'data') as entrada_anterior";   


		$resultado = mysqli_query($conexao, $sql );
		$lancamento = array();

	    $lancamento = mysqli_fetch_assoc($resultado);  
	   
	    $lancamento['entrada'];
	    $lancamento['saida'];
	    $lancamento['saida_ant'];
	    $lancamento['entrada_ant'];

	    return $lancamento; 
	}    


	function obterSaldoAnterior( $data ) { 	
	
		$conexao = conectar();
		$sql = "select saida_ant, entrada_ant 
	            from 

				( SELECT sum(valor) as saida_ant 
				  FROM movimento_caixa
				  where operacao=\"S\" and data<'$data') as saida_anterior, 

				( SELECT sum(valor) as entrada_ant 
				  FROM movimento_caixa
				  where operacao=\"E\" and data<'$data') as entrada_anterior";   

		$resultado = mysqli_query($conexao, $sql );
		$lancamento = array();

	    $lancamento = mysqli_fetch_assoc($resultado);  
	    
	    $saldo = $lancamento['entrada_ant'] - $lancamento['saida_ant']; 

	    return $saldo; 
	}    


	function obterEntrada( $data ) { 	
	
		$conexao = conectar();
		$sql = "select entrada 
	            from 

				( SELECT sum(valor) as entrada 
				  FROM movimento_caixa
				  where operacao=\"E\" and data='$data') as entrada";

		$resultado = mysqli_query($conexao, $sql );
		$lancamento = array();

	    $lancamento = mysqli_fetch_assoc($resultado);  

	    return $lancamento['entrada'];
	}    


	function obterSaida( $data ) { 	
	
		$conexao = conectar();
		$sql = "select saida 
	            from 

				( SELECT sum(valor) as saida 
				  FROM movimento_caixa
				  where operacao=\"S\" and data='$data') as saida";

		$resultado = mysqli_query($conexao, $sql );
		$lancamento = array();

	    $lancamento = mysqli_fetch_assoc($resultado);  

	    return $lancamento['saida'];
	}    


	function obterSaldoAtual( $data ) { 	
	
		$conexao = conectar();
		$sql = "select saida, entrada 
	            from 

				( SELECT sum(valor) as saida 
				  FROM movimento_caixa
				  where operacao=\"S\" and data='$data') as saida, 

				( SELECT sum(valor) as entrada 
				  FROM movimento_caixa
				  where operacao=\"E\" and data='$data') as entrada";   

		$resultado = mysqli_query($conexao, $sql );
		$lancamento = array();

	    $lancamento = mysqli_fetch_assoc($resultado);  
	    
	    $saldo = $lancamento['entrada'] - $lancamento['saida']; 

	    return $saldo; 
	}    


	function obterTotalLancamentos( $data ) { 	
	
		$conexao = conectar();
		$sql = "select count(*) as total  
	            from movimento_caixa 
				where data='$data' ";   

		$resultado = mysqli_query($conexao, $sql );
		$lancamento = array();

	    $lancamento = mysqli_fetch_assoc($resultado);  
	    
	    $quantidade = $lancamento['total']; 

	    return $quantidade; 
	}    


?>

