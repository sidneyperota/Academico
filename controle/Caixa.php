<?php

	

    class Caixa { 

    	private $data; 
    	private $status; 

				

	  	function __construct() { 
			  
			
    	}	


    	

    	/**
    	 * Get the value of status
    	 */ 
    	public function getStatus()
    	{
    	    	return $this->status;
    	}

    	/**
    	 * Set the value of status
    	 *
    	 * @return  self
    	 */ 
    	public function setStatus($status)
    	{
    	    	$this->status = $status;
    	    	return $this;
    	}

    	/**
    	 * Get the value of data
    	 */ 
    	public function getData()
    	{
    	    	return $this->data;
    	}

    	/**
    	 * Set the value of data
    	 *
    	 * @return  self
    	 */ 
    	public function setData( $data )
    	{
    	    	$this-> data = $data;
    	    	return $this;
    	}
    }


?>