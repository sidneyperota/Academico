<?php

	interface IDao { 

		public function inserir( $obj ); 
		public function alterar( $obj );
		public function excluir( $obj );
		public function consultar( $obj ); 
		public function pesquisar( $obj ); 

	}	




?>