function  liberar() 
{

	$.ajax({
	    //url : "https://openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761fae22",
	    url : "processos.php",  
	    type: "POST",
	    dataType: "html",
	    
	    beforeSend: function() { 

	    	$("#dados").html("Carregando..."); 
	    }, 

	    data: { palavra : "Sidney Teste passado na variavel Post"}, 

	    success: function(data) {
		  $("#dados").html(data); 
	    },
	    error: function() {
	   	  console.log("Erro na requisição");
	    }  
	 });
}


$('#liberar').click(function() { 
	liberar();
});