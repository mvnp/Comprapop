
// carrega feeds
function carrega_feeds(){


// valida existencia de div de feeds
if($("#id_div_feeds_usuario").length == 0){

// retorno nulo
return null;
	
};


// monta requisicao
$.post(v_pagina_acoes, {idproduto: v_idproduto, contador: v_contador, tipo_pagina_acao: 9}, function(retorno){


// nao permite duplicatas
if(retorno == v_bkp_feeds_usuario){

// retorno nulo
return null;	

}else{

// atualiza o backup de feeds
v_bkp_feeds_usuario = retorno;

};

// valida retorno
if(retorno.length == 0){

// retrno nulo
return null;
	
}else{

// atualiza o contador
v_contador += v_limit_query;

};

// valida div de feeds
if(document.getElementById("id_div_feeds_usuario").innerHTML == null){

// adiciona novo conteudo
document.getElementById("id_div_feeds_usuario").innerHTML = retorno;

}else{
	
// adiciona novo conteudo
$(retorno).appendTo('#id_div_feeds_usuario');	
	
};


});

};

