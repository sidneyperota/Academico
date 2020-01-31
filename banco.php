<?php

  function conectar() {



// Servidor Web  

 /*
  $servidor ='localhost:3306';
  $bdUsuario = '2342723_caixa';
  $bdSenha ='Si232317';
  $bdBanco ='2342723_caixa';
 */ 



  $bdServidor='localhost:3306';
  $bdUsuario= 'root';
  $bdSenha='si232317';
  $bdBanco='financeiro';
  

  $conexao = mysqli_connect( $bdServidor, $bdUsuario, $bdSenha, $bdBanco );

  

  if ( $conexao -> connect_error == true ) { 
    echo 'falha na conexao: '.$conexao-> connect_error;   
  } 
  

  return $conexao; 

  }

?>
