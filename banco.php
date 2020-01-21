<?php

  function conectar() {



// Servidor Web  
/*
  $servidor='localhost:3306';
  $bdUsuario= 'id11028291_sidney';
  $bdSenha='xxxxx';
  $bdBanco='id11028291_financeiro';
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
