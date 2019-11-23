<?php 

		
   include "movimento_caixaDAO.php"; 
   include "Funcoes.php";

   $complemento = ""; 

   
   if ( isset($_POST['operacao']) ) { 
      if ( $_POST['operacao'] == 'json-teste' ) {
         echo json_encode($_POST);
      } else
      if ( $_POST['operacao'] == 'lancamento' ) {
         
         $ret_status = array ( 'status' => 'C' );

         die(json_encode( $ret_status ));
         //obter_status_caixa( $_SESSION['dataCaixa'] );
      } else

      {
         $GLOBALS['complemento'] = $_POST['operacao'];
         echo ("S".$complemento);
      }
   }







   
    

   


?>