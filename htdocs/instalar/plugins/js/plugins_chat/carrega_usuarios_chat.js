
// carrega usuarios de chat
function carrega_usuarios_chat(){


// valida existencia de div de chat
if($("#id_div_chat_usuarios").length == 0){

// retorno nulo
return null;
	
};


// monta requisicao
$.post(v_pagina_acoes, {uid: v_uid, href: v_href, contador: v_contador_usuarios_chat, tipo_pagina_acao: 12}, function(retorno){


// nao permite duplicatas
if(retorno == v_bkp_chat_usuario){

// retorno nulo
return null;	

}else{

// atualiza lista de backups
v_bkp_chat_usuario = retorno;

};

// valida retorno
if(retorno.length == 0){

// retorno nulo
return null;
	
}else{

// atualiza o contador
v_contador_usuarios_chat += v_limit_query;

};

// valida div de chat
if(document.getElementById("id_div_chat_usuarios").innerHTML == null){

// adiciona novo conteudo
document.getElementById("id_div_chat_usuarios").innerHTML = retorno;

}else{
	
// adiciona novo conteudo
$(retorno).appendTo('#id_div_chat_usuarios');	
	
};


});


};

