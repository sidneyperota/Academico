<?php

  function conectar() {



// Servidor Web  

 
  /*
  $servidor ='localhost';
  $bdUsuario = 'u355362813_usuario';
  $bdSenha ='arrozal40';
  $bdBanco ='u355362813_financeiro';
  */ 


  $bdServidor='localhost:3306';
  $bdUsuario= 'root';
  $bdSenha='si232317';
  $bdBanco='financeiro';
  

  $conexao = mysqli_connect( $bdServidor, $bdUsuario, $bdSenha, $bdBanco );

  

  if ( $conexao -> connect_error == true ) { 
    echo '<h1>falha na conexao: </h1>'.$conexao-> connect_error;   
  } 
  
  
  return $conexao; 

  }

?>
