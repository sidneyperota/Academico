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


  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Financeiro</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Lançamento </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Administração </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Alterar Senha</a>
              <a class="dropdown-item" href="#">Configurações</a>
              <a class="dropdown-item" href="#">Outros Recursos</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
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
        <h2> Caixa Matriz - 02/10/2019 ( Quarta-Feira )</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Saldo do Caixa</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Saldo Anterior</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$12,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Entrada</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$8,90</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Saída</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$5,30</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success">-R$5,70</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span> Saldo Atual</span>
              <strong>R$20,00</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Senha Administrador">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Liberar Caixa</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Lançamento:</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="operacao">Operação</label>
                <select class="custom-select d-block w-100" id="operacao" required>
                  <option value="">Escolha...</option>
                  <option>Entrada</option>
                  <option>Saída</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, selecione o tipo de operação.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="conta">Conta</label>
                <select class="custom-select d-block w-100" id="conta" required>
                  <option value="">Escolha...</option>
                  <option>0001 - Recebimento de Vendas </option>
                  <option>0002 - Recebimento de Empréstimos </option>
                  <option>0003 - Recebimento Juros </option>
                  <option>0004 - Recebimento de venda de Equipamento imobilizado </option>
                </select>
                <div class="invalid-feedback">
                  Por favor, escolha uma conta.
                </div>
              </div>

            </div>

      
            <div class="mb-3">
              <label for="doc">Documento</label>
              <input type="text" class="form-control" id="doc" placeholder="Documento">
              <div class="invalid-feedback">
                Documento 
              </div>
            </div>

            <div class="mb-3">
              <label for="historico">Histórico</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <textarea class="form-control" id="historico" placeholder="Histórico" required rows="5"> </textarea>
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
              <input type="text" class="form-control" id="valor" placeholder="Valor" onKeyPress="return(moeda(this,'.',',',event))">
              <div class="invalid-feedback">
                Por favor, insira o valor 
              </div>
            </div>

          
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>
          </form>
        </div>
      </div>

  </body>
</html>
