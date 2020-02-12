<?php


    class Caixa { 

    	public $data; 
    	public $status; 

    	function __construct($data, $status ) {  
    		
    		$this->data=$data; 
    		echo "Data do Objeto: ". $data; 
    	}	

    }


?>