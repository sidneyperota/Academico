<!doctype html>
<html> 
	<head> 
		 <meta charset="utf-8">
		<title> Teste de Programa </title>
		<script src="js/controlador.js">   </script> 
		<script src="js/jquery-3.4.1.js"> </script> 
	</head>
	

	<body> 
		<h1> Teste Javascript - PHP 1.0 </h1>
		<h1> Sidney Francisco Perota da Cunha </h1>
		
		<div> 

			<button id="btnLiberar" type="button"> 	 	Liberar Caixa </button>
			<button id="btnRetornar" type="button">  	Retornar Caixa </button>
			<button id="btnVerificar" type="button">  	Verificar Status </button>

		</div>
	</body>	

</html> 



<script> 

	$('#btnLiberar').click( function (e) { 
		setStatusCaixa("L");
	}) 

	$('#btnRetornar').click( function (e) { 
		setStatusCaixa("C");
	})	

	$('#btnVerificar').click( function (e) { 
		alert( getStatusCaixa() ); 
	})	



	

</script>	

	