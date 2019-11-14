<?php 

		

   include "movimento_caixaDAO.php"; 


   if ( $POST['operacao'] == 'lancamento' ) { 


   		// Caixa Correto
   		if obter_status_caixa() == "C" { 
   			echo "C"; 
   		} else
   		{
   			echo "L";
   		}

   }


?>