$('#btnLiberarCaixa').click(
	function (e) {

		$.ajax({ 
			url : 'liberarCaixa.php', 
			type : 'post',
			dataType : 'html', 
			data: $("#form").serialize(),
			sucess: function(data) { 
					alert(data); 
			}
		});
       
});		