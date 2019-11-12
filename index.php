<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Floating labels example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.js"> </script>
  </head>

  <body>
    <form class="form-signin" action="" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="img/docearoma.png" alt="" width="72" height="72">
        <h1 class="h2 mb-3 font-weight-normal">App Financeiro</h1>
        <h6> Módulo de Controle Financeiro </h6> 
        
      </div>

      <div class="form-group">
        <input type="text" id="inputUsuario" class="form-control" placeholder="Usuário" name="usuario" required autofocus
        value="" >
        <label for="inputUsuario">Usuário</label>
      </div>

      <div class="form-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required value="">
        <label for="inputPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembre-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
      <p class="mt-5 mb-3 text-muted text-center">&reg;Doce Aroma      |    &reg;Jolie Boutique </p>
    </form>

  </body>
</html>


<?php

    include "Funcoes.php";

    session_start(); 
    //$_SESSION['usuario'] = "nenhum"; 
    $_SESSION['nome'] = "nenhum"; 
    $_SESSION['idUsuario'] = 0;

    $usuarios = array ( array ( 'id' => 1, 
                                'nome' => 'JAQUELINE', 
                                'usuario' => 'jack',
                                'senha' => '123' ), 

                        array ( 'id' => 2,
                                'nome' => 'ALEXANDRINA',  
                                'usuario' => 'ale', 
                                'senha' => '298739' ) ); 


    // verificar se o usuario e valido
    if  ( $_SERVER['REQUEST_METHOD'] == 'POST') { 
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha']; 
      $idUsuario = 0;      
      $_SESSION['usuario'] = $usuario; 

      // Percorrer por Alunos
      $avisoLogin = "invalido";  

      foreach ( $usuarios as $_usuario ) { 

        $_SESSION['nome'] = $_usuario['nome']; 

        if ( $usuario == $_usuario['usuario'] ) { 
          if ( $_usuario['senha'] != $senha ) { 
            $avisoLogin = "senha";  
            break; 
          }
          else 
          { 
            $avisoLogin = "valido";
            $_SESSION['idUsuario'] = $_usuario['id'];
            break; 
          }   
        } 
      }

      // Usuario Invalido?
      if ( $avisoLogin == "invalido" ) 
      {  
        echo "<script>"; 
        echo "alert('Atenção, Usuário inválido.');"; 
        echo "</script>"; 
      }  elseif 
      ( $avisoLogin == "senha" ) 
      { 
        echo "<script>"; 
        echo "alert('Atenção, Senha inválida.');"; 
        echo "</script>"; 
      } elseif 
      ( $avisoLogin == "valido" ) {

        
        // Verificar se Ha Caixa Criado?
        include "movimento_caixaDAO.php";

        $dta = ultimoCaixa();   



        if ( $dta != null ) { 
          
          $_SESSION['dataCaixa'] =  $dta; 
          $_SESSION['statusCaixa'] = obter_status_caixa( $dta );


          echo "<script>";  
          echo "window.location=\"listaMovimento.php\";"; 
          echo "</script>";   
        } 
        else
        { 
          echo "<script>";  
          echo "window.location=\"NovoCaixa.php\";"; 
          echo "</script>"; 
        }
      } 
    
    }  

?> 
