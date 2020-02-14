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

     if ( $_SERVER['REQUEST_METHOD'] == 'POST')  {
        $url = explode('/', $_SERVER['PATH_INFO'] );
        array_shift($url);
        
        $metodo = $url[0];
        echo "\n".$metodo; 

        

        if ( $metodo == "lancamentocaixa" ) { 

              $movimentoCaixaDAO = new MovimentoCaixaDAO(); 

              $movimentoCaixa = new MovimentoCaixa(); 

              
              $json = file_get_contents('php://input');
              $obj_php = json_decode($json); // $obj_php agora é exatamente o objeto/array enviado pelo servidor

             // echo $obj_php[0]->"data"; 

              
              
              //$movimentoCaixa->getCaixa()->setData("2020-02-04"); 
             // $movimentoCaixa->setConta-> "121212"; 


              
              
              
             // $movimentoCaixaDAO->gravar()
          
          
          
              echo "\nProcessado com Sucesso!\n"; 


        }


        
        
        echo json_encode( $_REQUEST );
        var_dump( $_POST );

        //var_dump( $_SERVER ); 

        
        //header("Access-Control-Allow-Origin: *");
        //header('Cache-Control: no-cache, must-revalidate'); 
        //header("Content-Type: text/plain; charset=UTF-8");
        //header("HTTP/1.1 200 OK");





     }


     


     //var_dump( $url );



//     echo json_encode( $_REQUEST );





?>     


	












