<?php


    $servidor ='localhost';
    $bdUsuario = 'u355362813_usuario';
    $bdSenha ='arrozal40';
    $bdBanco ='u355362813_financeiro';


    $conexao = mysqli_connect( $bdServidor, $bdUsuario, $bdSenha, $bdBanco );

    if ( $conexao -> connect_error == true ) { 
        echo "Falha na conexao ".$conexao-> connect_error;   
      
    }  else
    {  
        echo "Banco carregado com sucesso!";
    }













?>