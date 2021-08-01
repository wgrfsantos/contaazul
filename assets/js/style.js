$(function(){

	/* Busca de endereço por CEP */
	$('input[name=address_zipcode]').on('blur', function(){
		var cep = $(this).val();

		$.ajax({
			url:'https://api.postmon.com.br/v1/cep/'+cep,
			type:'GET',
			dataType:'json',
			success:function(json){
				if(typeof json.logradouro != 'undefined') {
					$('input[name=address]').val(json.logradouro);
					$('input[name=address_neighb]').val(json.bairro);
					$('input[name=address_city]').val(json.cidade);
					$('input[name=address_state]').val(json.estado);
					$('input[name=address_country]').val("Brasil");
					$('input[name=address_number]').focus();
				}
			}
		});
	});

	//Animação no Botão de busca
	$('#busca').on('focus', function(){
		$(this).animate({
			width:'400px'
		}, 'fast');
	});

	//Animação no Botão de busca
	$('#busca').on('blur', function(){
		if($(this).val() == '') {
			$(this).animate({
				width:'100px'
			}, 'fast');
		}
	});

	/* Pesquisa de Usuários */
	$('#busca').on('keyup', function(){
		var datatype = $(this).attr('data-type');
		var q = $(this).val();
		if(datatype != '') {
			$.ajax({
				url:BASE_URL+'/ajax/'+datatype,
				type:'GET',
				data:{q:q},
				dataType:'json',
				success:function(json) {
					
				}
			});
		}
	});


});