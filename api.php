<?php 


	include 'movimento_caixaDAO.php'; 	


	// listar todos Lancamentos
	$resultado = listarTodosLancamentos(); 

	$lancamento = array();

    while ($lancamento = mysqli_fetch_assoc($resultado) ) 
    {
      $lancamentos[] = $lancamento;
    }  


	//echo json_encode( $lancamentos);

 	
     if ( $_SERVER['REQUEST_METHOD'] == 'POST')  {
     	echo "Metodo POST "; 
     }

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
     }



     var_dump($_GET);

     var_dump($_POST);


     print_r( $_SERVER );


     $url = explode('/', $_SERVER['PATH_INFO'] );
     array_shift($url);


     var_dump( $url );



     echo json_encode( $_REQUEST );






?>     


	












