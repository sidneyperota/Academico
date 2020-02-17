<?php 


  //include 'movimento_caixaDAO.php'; 	
  include "dao/MovimentoCaixaDAO.php";   
  include "controle/MovimentoCaixa.php";
    
  // listar todos Lancamentos
  
  /*
  $resultado = listarTodosLancamentos(); 

	$lancamento = array();

    while ($lancamento = mysqli_fetch_assoc($resultado) ) 
    {
      $lancamentos[] = $lancamento;
    }  


	if ( $_SERVER['REQUEST_METHOD'] == "GET" ) { 
        echo json_encode( $lancamentos);
    }

   */ 


    /*
     if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
     	echo "Metodo GET "; 
     }

     if ( $_SERVER['REQUEST_METHOD'] == 'DELETE') {
     	echo "Metodo Delete "; 
     }

     if ( $_SERVER['REQUEST_METHOD'] == 'PUT') {
     	echo "Metodo Put"; 
     }

     if ( $_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
     	echo "Metodo Options!! - Caralho  \n"; 
     }*/


     //var_dump($_GET);

     //var_dump($_POST);


     //print_r( $_SERVER );

     // Metodos POSTs
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
            
            //print_r($obj_php); 
            
            $movimentoCaixa->setDoc( $obj_php-> {'doc'} ); 
            $movimentoCaixa->getCaixa()->setData( $obj_php-> {'data'}); 
            $movimentoCaixa->setConta( $obj_php-> {'conta'} );
            $movimentoCaixa->setHistorico( $obj_php-> {'historico'} );
            $movimentoCaixa->setOperacao( $obj_php-> {'operacao'});
            $movimentoCaixa->setValor( $obj_php-> {'valor'}); 
            $movimentoCaixa->setUsuario( $obj_php-> {'usuario'} ); 
            $movimentoCaixaDAO->gravar( $movimentoCaixa ); 
            echo "Registro gravado com sucesso!";
            
            /*
            foreach ($obj_php as $lanc) {
              $cont++; 
              echo "\n".$cont." - ".$lanc;
            }
            */
              
              //$movimentoCaixa->getCaixa()->setData("2020-02-04"); 
              // $movimentoCaixa->setConta-> "121212"; 

             // $movimentoCaixaDAO->gravar()

        }

        //var_dump( $_SERVER ); 

        
        //header("Access-Control-Allow-Origin: *");
        //header('Cache-Control: no-cache, must-revalidate'); 
        //header("Content-Type: text/plain; charset=UTF-8");
        //header("HTTP/1.1 200 OK");

     } 

     // Metodos GETs
     if ( $_SERVER['REQUEST_METHOD'] == 'GET') 
     {

        $url = explode('/', $_SERVER['PATH_INFO'] );
        array_shift($url);
        $metodo = $url[0];
      
        if ( $metodo == "consultamovimento" ) { 
        
          $movimentoCaixaDAO = new MovimentoCaixaDAO(); 
          $resultado = $movimentoCaixaDAO->listarTodosLancamentos(); 
          $lancamento = array();

          while ($lancamento = mysqli_fetch_assoc($resultado) ) 
          {
            $lancamentos[] = $lancamento;
          }  
        
          echo json_encode( $lancamentos);

        }  

     }

     //var_dump( $url );

     //echo json_encode( $_REQUEST );


?>     


	












