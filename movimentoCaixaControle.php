<?php 
 
   include "Funcoes.php";
   include "movimento_caixaDAO.php";

   session_start(); 
   
   $ret_status = array ( 'status' => obter_status_caixa( $_SESSION['dataCaixa'])  );

   echo json_encode( $ret_status );


   


?>