<?php
		//$lista = array( '001' => 'sidney', '002' => 'jose');

		 $lista = array ( array ( 'id' => 1, 
                                'nome' => 'JAQUELINE', 
                                'usuario' => 'jack',
                                'senha' => '123' ), 

                        array ( 'id' => 2,
                                'nome' => 'ALEXANDRINA',  
                                'usuario' => 'ale', 
                                'senha' => '298739' ) ); 


		die(json_encode( $lista ));

?>