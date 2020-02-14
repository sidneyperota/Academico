<?php

	interface IDao { 

		public function gravar( $obj ); 
		public function alterar( $obj );
		public function excluir( $obj );
		public function consultar( $obj ); 
		public function pesquisar( $obj ); 

	}	




?>