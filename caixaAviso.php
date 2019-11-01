<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Caixa Fácil Aplicativo WEB VERSÃO 1.0 </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

  </head>

  <body>

      <script src="js/personalizado.js" >  </script>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Liberar Caixa
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Liberação do Caixa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Confirma Liberação do Caixa?
          </div>
          <div class="modal-footer">
            <button id="btnLiberar" type="button" class="btn btn-primary" data-dismiss="modal">Liberar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.4.1.js"></script> 
    <script src="js/bootstrap.min.js"></script>

      <!-- Existem duas maneiras de chamar o modal
        
        1- Criar uma relacao do modal com o botao na propriedade data-target='#nome_do_modal'
        
        2- Criar um script como esse e chamar o modal com a funcao abaixo "modal"

      -->  
     
  

    <script> 
      // keyboard nao fecha com a tecla esc
      // $('#exampleModal').modal({backdrop:'static', keyboard:false } ); 


      //$('#exampleModal').modal('show');   
      // Posso utilzar o hide ou toggle

      // Tem tambem o hidden e o show ou shown ( Estiver fechado e se for aberto e se estiver aberto )
      $('#exampleModal').on('hidden.bs.modal', function (e) {

          // Aqui ocorre ao fechar o modal
      }); 


      $('#btnLiberar').click( 
        function() {
          alert("Liberado Com Sucesso pelo Botao!");
        }
      );


    </script>  


  </body>    

</html>  