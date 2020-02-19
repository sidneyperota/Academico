<?php 

   include "dao/MovimentoCaixaDAO.php";   
   include "controle/MovimentoCaixa.php";
    
      // Metodos Post
     if ( $_SERVER['REQUEST_METHOD'] == 'POST')  {
        
        // Obtem o metodo recuperado na variavel PATH_INFO
        $url = explode('/', $_SERVER['PATH_INFO'] );
        array_shift($url);
        $metodo = $url[0];

        if ( $metodo == "lancamentocaixa" ) { 

            $movimentoCaixaDAO = new MovimentoCaixaDAO(); 
            $movimentoCaixa = new MovimentoCaixa(); 

            // Obtem o JSON passado pelo cliente pelo setEntity 
            $json = file_get_contents('php://input');
            $obj_php = json_decode($json); // $obj_php agora é exatamente o objeto/array enviado pelo servidor
            
            $movimentoCaixa->setDoc( $obj_php-> {'doc'} ); 
            $movimentoCaixa->getCaixa()->setData( $obj_php-> {'data'}); 
            $movimentoCaixa->setConta( $obj_php-> {'conta'} );
            $movimentoCaixa->setHistorico( $obj_php-> {'historico'} );
            $movimentoCaixa->setOperacao( $obj_php-> {'operacao'});
            $movimentoCaixa->setValor( $obj_php-> {'valor'}); 
            $movimentoCaixa->setUsuario( $obj_php-> {'usuario'} ); 
            $movimentoCaixaDAO->gravar( $movimentoCaixa ); 
            echo "Registro gravado com sucesso!";
     } 

     // Metodos GETs
     if ( $_SERVER['REQUEST_METHOD'] == 'GET') 
     {

        $url = explode('/', $_SERVER['PATH_INFO'] );
        array_shift($url);
        $metodo = $url[0];
      
        if ( $metodo == "consultamovimento" ) { 
 
          try {
            $movimentoCaixaDAO = new MovimentoCaixaDAO(); 
            $resultado = $movimentoCaixaDAO->listarTodosLancamentos(); 
            $lancamento = array();

            while ($lancamento = mysqli_fetch_assoc($resultado) ) 
            {
              $lancamentos[] = $lancamento;
            }  
          
            if ( count( $lancamentos ) == 0 ) { 
              echo "Nenhum lancamento retornado";
              $lancamentos[] = "Nenhum lançamento retornado";
            }  
            else 
            {
              echo "retornado ", count( $lancamentos ); 
              echo json_encode( $lancamentos);
            }  
         } catch ( Exception $e ) { 
          echo "Exceção capturada: ", $e->getMessage(), "\n"; 
         }

        }  

     }

?>     


	












