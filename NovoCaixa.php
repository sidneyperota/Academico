<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Caixa Fácil Aplicativo Web Versão 1.0 </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-110 h-120 p-5 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          
        </div>
      </header>


      <div class="card-body">

        <div class="card text-white bg-primary mb-5" style="max-width: 25rem;">
        
        <div class="card-header"> Caixa Fácil Aplicativo Web Versão 1.0.002 </div>


          <div class="card-body">
            <h5 class="card-title">Criar Novo Caixa </h5>
            <p class="card-text">O Sistema não encontrou nenhum caixa. </p>
            <p class="card-text"> Para iniciar sua utilização vamor criar um Caixa.</p>
            <p class="card-text"> Informe a data do primeiro caixa.</p>

          <form method="post" action="">
            <div class="form-group">
            <label for="data"> Digite a data do Novo Caixa:</label>
            <strong> 
            <input class="form-control mr-sm-3" type="date" placeholder="Data" aria-label="Data" value="" id="data"
             name="dtCaixa" required autofocus> </strong>
            <br>
            <div class=text-right> 
              <button type "submit" class="btn btn-light btn-lg"> Confirmar </button>
              <button type="button" class="btn btn-light btn-lg"> Cancelar </button>
            </div>  

            </div>
          </form>

          </div>
        </div>
     </div>


      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Caixa Fácil | <a href="https://www.meuappfinanceiro.com.br"> https://www.caixafacil.com.br </a> | Sidney Perota
        </div>
      </footer>
    </div>
   
  </body>
</html>


<?php

  if ( $_SERVER['REQUEST_METHOD'] == 'POST') 
  { 

    include "banco.php";
    include "Funcoes.php";
    
    $conexao = conectar(); 

    // Iniciar SESSAO 
    session_start();
    $iCodUsuario  = $_SESSION['id_usuario'];
    $dataCaixa    = dataSql( $_POST['dtCaixa'] );
    $_SESSION['dataCaixa'] = $dataCaixa; 

    
    echo $CodUsuario."/n";  
    echo $dataCaixa."/n"; 
    echo $_SESSION['dataCaixa']."/n"; 

    $sql = "insert into caixa ( data, status, usuario ) 
            values ( '$dataCaixa', 'C', $iCodUsuario )";

    if ($conexao-> query($sql)== true ) { 
      
		    echo "<script>";  
        echo "window.location=\"listaMovimento.php\";"; 
        echo "</script>"; 
    } else
    {
      echo "<h1>Falha ao gravar caixa.</h1>";                    
    }

   mysqli_close( $conexao );
   
   // Atualizar página para atualizar saldo
   //echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";

  }
?>
