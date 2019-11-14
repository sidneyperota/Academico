 src="js/jquery-3.4.1.js";

         
  $('#btnNovoLancamentoCaixa').click(
    
    function (e) {
      alert("teste");   

  /*
      if ( getStatusCaixa() == 'C') { 
         window.location="lancamento.php"; 
      } 
      else
      { 
        window.location="InserirCaixa.php";
      }  
  */  

  });   

  
  $('#btnRetornarCaixa').click( function (e) { 

    $.ajax({
      method: "POST",
      url: "teste.php",
      data: { teste: "C" }
    }).done(function( msg ) {
      $('#id_data_caixa').html( msg );
    });
  });    
        
        