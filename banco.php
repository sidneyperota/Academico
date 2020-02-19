<?php

  
  include "Variaveis.php";

  function conectar() {

  // Servidor Web  

  if ( $_SERVER['HTTP_HOST'] == Variaveis::$rota_producao ) { 
    $servidor ='localhost';
    $bdUsuario = 'u355362813_usuario';
    $bdSenha ='arrozal401';
    $bdBanco ='u355362813_financeiro';
  } 
  elseif  ( $_SERVER['HTTP_HOST'] == Variaveis::$rota_desenv )    
  {  
    $bdServidor='localhost:3306';
    $bdUsuario= 'root';
    $bdSenha='si232317';
    $bdBanco='financeiro';
  } 

  $conexao = mysqli_connect( $bdServidor, $bdUsuario, $bdSenha, $bdBanco );

  if ( $conexao -> connect_error == true ) { 
    echo '<h1>falha na conexao: </h1>'.$conexao-> connect_error;   
  } 
  
  
  return $conexao; 

  }


?>
