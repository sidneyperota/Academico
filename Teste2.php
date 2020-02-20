<?php 
	
	$servidor ='localhost';
    $bdUsuario = 'u355362813_usuario';
    $bdSenha ='arrozal40';
	$bdBanco ='u355362813_financeiro';
	
	$conexao = mysqli_connect( $bdServidor, $bdUsuario, $bdSenha, $bdBanco );

	if ( $conexao -> connect_error == true ) { 
		echo 'falha na conexao:'.$conexao-> connect_error;   
	}  else
	{
		echo "conectado com sucesso!";

	}

	$sql = "SELECT * FROM movimento_caixa";
	$resultado = mysqli_query( $this->conexao, $sql );

	echo "consulta realizada";
	
/*
	$lancamento = array();

	while ($lancamento = mysqli_fetch_assoc($resultado) ) 
	{
		$lancamentos[] = $lancamento;
	}  

	if ( count($lancamentos) > 0 ) { 
	print_r( $lancamentos );
	} else
	{ 
		echo "Não foi retornado registros."; 

	}
*/

?>