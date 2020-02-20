<?php 
	
	$servidor ='localhost';
    $bdUsuario = 'u355362813_usuario';
    $bdSenha ='arrozal40';
	$bdBanco ='u355362813_financeiro';
	
	
	
	try

	{
	
	
		$conexao = mysqli_connect( $bdServidor, $bdUsuario, $bdSenha, $bdBanco );

		if ( $conexao -> connect_error == true ) { 
			echo 'falha na conexao:'.$conexao-> connect_error;   
		}  else
		{
			echo "conectado com sucesso!";
		}

		$sql = "SELECT * FROM movimento_caixa";
		$resultado = mysqli_query( $conexao, $sql );

		echo "consulta realizada2";
	

		$lancamento = array();

		while ($lancamento = mysqli_fetch_assoc($resultado) ) 
		{
			$lancamentos[] = $lancamento;
		}  

		if ( count($lancamentos) > 0 ) { 
			echo "Arquivos encontrados"; 
		} else
		{ 
			echo "Não foi retornado registros."; 
		}

	}

	catch ( Exception $e ) { 
		echo "Exceção capturada: ", $e->getMessage(), "\n"; 
   	}


?>