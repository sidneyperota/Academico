<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Módulo Financeiro</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/controlador.js"></script>
    <script src="listaMovimento.js"></script> 
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="listaMovimento.php">Home <span class="sr-only">(current)</span></a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Caixa</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="NovoCaixa.php">Novo</a>
              <a class="dropdown-item" href="#">


                <button type="button" action="" class="btn btn-primary" data-toggle="modal" 
                data-target="#retornarCaixaModal">
                  Retornar Caixa
                </button>
              </a>
            </div>
          </li>

                    
          <li class="nav-item">
            <a class="nav-link" href="lancamento.php">Lançamento</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administração</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Alterar Senha</a>
              <a class="dropdown-item" href="#">Configurações</a>
              <a class="dropdown-item" href="#">Outros Recursos </a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="date" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>


    </main><!-- /.container -->

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  -->
    


    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funcoes.js"></script>
    <script src="core.js"></script>

    <div class="container">
      <div class="py-1 text-left">
        <div id="id_data-caixa"> 
        <?php 
          include "movimento_caixaDAO.php";
          include 'Funcoes.php';
          
          session_start(); 
          $_SESSION['dataCaixa'] = ultimoCaixa();
          $_SESSION['statusCaixa'] = obter_status_caixa( $_SESSION['dataCaixa']);  

          if ( $_SESSION['dataCaixa'] == null ) {
            echo "<script>";  
            echo "window.location=\"NovoCaixa.php\";"; 
            echo "</script>"; 
          }
          else
          {  

            // Definir data de trabalho no Caixa
            if ( $_SESSION['statusCaixa'] == "C" ) { 
              echo "<div id='id_data_caixa'> <h2>  Data do Caixa: ".data( $_SESSION['dataCaixa'] )."</h2> </div>";  
            } else
            {
              echo "<div id='id_data_caixa'> <h2> Data do Caixa: ".data( $_SESSION['dataCaixa'] )." ( Encerrado ) </h2> </div>";  
            }

          }  

        ?>        



        </div>

      </div>

      <div class="row">

        <div class="col-md-3 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Saldo do Caixa</span>
            <span class="badge badge-secondary badge-pill">
              
              <?php 
                //session_start();
                echo obterTotalLancamentos( $_SESSION['dataCaixa'] );  
              ?>

            </span>
          </h4>
          
          <!-- Carregar Saldos -->
          <?php   
              include 'caixaCtrl.php'; 
              exibirSaldos(); 
          ?>

          <form class="card p-2">
            <div class="input-group">
                <!-- <input type="text" class="form-control" placeholder="Senha Administrador"> -->
              <div class="input-group-append">
                 <button type="button" id="btnNovo" class="btn btn-primary">Novo Lançamento </button>
              </div>
            </div>
          </form>
        </div>


        <div class="col-md-9 order-md-1">
          </br> 

          <h4 class="mb-3">Lançamentos: </h4>
          
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Documento</th>
                <th scope="col">Descrição</th>
                <th scope="col">Operação</th>
                <th scope="col">Valor</th>
              </tr>
            </thead>
            
            <tbody>

            
            <!-- Preencher Lancamentos do Caixa  -->
            
            <?php
                //include "movimento_caixaDAO.php"; 

                $resultado = resumoCaixa( $_SESSION['dataCaixa'] );
                $lancamento = array();

                while ($lancamento = mysqli_fetch_assoc($resultado) ) 
                {
                  $lancamentos[] = $lancamento;

                  echo "<tr>";
                  echo "<td>".$lancamento['doc']."</td>";
                  echo "<td>".$lancamento['historico']."</td>";
                  echo "<td>".$lancamento['operacao']."</td>";
                  echo "<th scope=\"row\">".formatarMoeda( $lancamento['valor'] )."</td>";
                  echo "</tr>";
                }  
            ?> 

            </tbody>
          </table>
        </div>

      </div>


      <!-- Modal Para Retornar Caixa -->
      <div class="modal fade" id="retornarCaixaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Retornar Caixa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Confirma retornar Caixa para lançamento?
            </div>
            <div class="modal-footer">
              <button id="btnRetornarCaixa" type="button" class="btn btn-primary" data-dismiss="modal">Confirmar
              </button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
            </div>
          </div>
        </div>
      </div>



<script> 

  
  $('#btnNovo').click( function (e) {

      
      $.ajax({
          method: "POST",
          url: "movimentoCaixaControle.php",
          data: { operacao: "lancamento" },
          dataType : "json"
        }).done(function( msg ) {
          
          if ( msg.status  == "C" ) {
            window.location="lancamento.php";
          } 
          else
          {
            window.location="NovoCaixa.php";
          }
          
        }).fail(function( msg ) {
          alert("Erro ao retornar JSON" );  
        });

 
  });   

  
  $('#btnRetornarCaixa').click( function (e) { 
  

    $.ajax({
      method: "POST",
      url: "teste.php",
      data: { teste: "C" }
    }).done(function( msg ) {
      //$('#id_data_caixa').html( msg );
    });

    
  });    


</script>


</html>
