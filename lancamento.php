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
    <script src="js/funcoes.js">  </script>
    <script src="js/jquery-3.4.1.js"></script>
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
          <li class="nav-item">
            <a class="nav-link" href="#">Lançamento</a>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administração</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Alterar Senha</a>
              <a class="dropdown-item" href="#">Configurações</a>
              <a class="dropdown-item" href="#">Outros</a>
            </div>
          </li>
        </ul>
        

        <form class="form-inline my-2 my-lg-0">
            
            <input class="form-control mr-sm-2" type="date" placeholder="Pesquisar" aria-label="Pesquisar" 
            value=""  >
         

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>


    </main><!-- /.container -->

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funcoes.js"></script>

    <div class="container">
      <div class="py-1 text-left">
        
        <?php
          session_start(); 
          include "Funcoes.php"; 
          echo "<h2> Data do Caixa: ".data( $_SESSION['dataCaixa'] )."</h2>";
        ?>

      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted"> Saldo do Caixa </span>
            <span class="badge badge-secondary badge-pill">

              <?php 
                 include 'movimento_caixaDAO.php'; 
                 echo obterTotalLancamentos( $_SESSION['dataCaixa']);
              ?>

            </span>
          </h4>
          

          <?php   
            include 'caixaCtrl.php'; 
            exibirSaldos(); 
            $gravar = false; 

          ?>


            <!-- Modal -->
            <div class="modal fade" id="liberarCaixaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Liberação do Caixa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Confirma Liberação do Caixa?
                </div>
                <div class="modal-footer">
                  <button id="btnLiberarCaixa" type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</
                  button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
                </div>
              </div>
            </div>
          </div>


          <form class="card p-2" action="lancamento.php" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Senha Administrador">
              <div class="input-group-append">

              <!-- Button trigger modal -->
              <button type="button" action="" class="btn btn-primary" data-toggle="modal" data-target=
              "#liberarCaixaModal">
                Liberar Caixa
              </button>

              </div>
            </div>
          </form>
        

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Lançamento:</h4>
          
          <form class="needs-validation" novalidate method="post" action="lancamento.php">
            <div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="operacao"> Operação </label>
                <select class="custom-select d-block w-100" id="operacao" name="operacao" required autofocus>
                  <option value=""> Escolha... </option>
                  <option> Entrada </option>
                  <option> Saída </option>
                </select>
                <div class="invalid-feedback">
                  Por favor, selecione o tipo de operação.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="conta">Conta</label>
                <select class="custom-select d-block w-100" id="conta" name="conta" required>
                  <option value="">Escolha...</option>
                  <option> 0001 - Recebimento de Vendas </option>
                  <option> 0002 - Recebimento de Empréstimos </option>
                  <option> 0003 - Recebimento Juros </option>
                  <option> 0004 - Recebimento de venda de Equipamento imobilizado </option>
                </select>
                <div class="invalid-feedback">
                  Por favor, escolha uma conta.
                </div>
              </div>

            </div>

            <div class="mb-3">
              <label for="doc"> Documento </label>
              <input type="text" class="form-control" id="doc" name="doc" placeholder="Documento">
              <div class="invalid-feedback">
                Documento 
              </div>
            </div>

            <div class="mb-3">
              <label for="historico">Histórico</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                
                <textarea class="form-control" id="historico" placeholder="Histórico" required rows="5"  name="historico"> </textarea>
                <div class="invalid-feedback" style="width: 100%;">
                  Digite o Histórico.
                </div>
              </div>
            </div>

            <!--
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
             -->

            <div class="mb-3">
              <label for="valor">Valor</label>
              <input type="text" class="form-control" id="valor" placeholder="Valor" name="valor" onKeyPress="return(moeda(this,'.',',',event))">
              <div class="invalid-feedback">
                Por favor, insira o valor 
              </div>
            </div>

            <hr class="col-md-3 mb-4">


            <button class="btn btn-primary btn-lg btn-block" type="submit" onclick=""> Salvar </button>

          </form>

          <?php

              if ( $_SERVER['REQUEST_METHOD'] == 'POST') 
              { 

                $conta = substr( $_POST['conta'],0,4);
                $operacao = substr( $_POST['operacao'],0,1); 
                
                $historico = $_POST['historico']; 
                $valor = $_POST['valor'];
                                

                $valor = virgPonto( $valor );

                $usuario = 1;
                $doc = $_POST['doc'];

                $conexao = conectar(); 

                $dataCaixa = dataSql( $_SESSION['dataCaixa'] );

                $sql = "insert into movimento_caixa ( data, conta, operacao, historico, valor, usuario, doc ) 
                        values ( '$dataCaixa', '$conta','$operacao','$historico', $valor, $usuario, '$doc' )";

                if ($conexao-> query($sql)== true ) { 
                  echo "<h3> Dados inseridos com sucesso!</h3>";  
                } else
                {
                  echo "falha envio dos dados";                    
                }

               mysqli_close( $conexao );
               
               // Atualizar página para atualizar saldo
               echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";

              }
          ?>
               

        </div>
        
      </div>

    <script>   
      $('#btnLiberarCaixa').click(
        function (e) {
          
          $.ajax({
            method: "POST",
            url: "liberar_caixa.php",
            data: { status: "C" },
            dataType : "json"
          }).done(function( msg ) {
            
              window.location="listaMovimento.php";

            //$('#id_data_caixa').html( msg );
            //setStatusCaixa('C');
          });

          
      });   
    </script>  


  </body>
</html>


