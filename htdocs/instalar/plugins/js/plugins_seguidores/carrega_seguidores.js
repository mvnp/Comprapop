
// carrega seguidores de usuario
function carrega_seguidores(){


// valida existencia de div de produtos
if($("#id_div_seguidores_usuario").length == 0){

// retorno nulo
return null;
	
};


// monta requisicao
$.post(v_pagina_acoes, {uid: v_uid, href: v_href, contador: v_contador, tipo_pagina_acao: 8}, function(retorno){


// nao permite duplicatas
if(retorno == v_bkp_carrega_seguidores){

// retorno nulo
return null;	

}else{

// atualiza o backup
v_bkp_carrega_seguidores = retorno;

};

// valida retorno
if(retorno.length == 0){

// retorno nulo
return null;
	
}else{

// atualiza o contador
v_contador += v_limit_query;

};

// valida div de produtos
if(document.getElementById("id_div_seguidores_usuario").innerHTML == null){

// adiciona novo conteudo
document.getElementById("id_div_seguidores_usuario").innerHTML = retorno;

}else{
	
// adiciona novo conteudo
$(retorno).appendTo('#id_div_seguidores_usuario');	
	
};


});


};

