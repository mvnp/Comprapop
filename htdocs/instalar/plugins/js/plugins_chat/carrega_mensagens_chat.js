
// carrega as mensagens do chat
function carrega_mensagens_chat(){

// monta requisicao
$.post(v_pagina_acoes, {dataType : "json", contador: v_contador_mensagens_chat, tipo_pagina_acao: 15}, function(retorno){

// objeto com retornos
var objeto = jQuery.parseJSON(retorno);

// mensagens de chat
var mensagens_chat = objeto['mensagens_chat'];
var ultima_mensagem_chat = objeto['ultima_mensagem_chat'];

// nao permite duplicatas
if(ultima_mensagem_chat.length == 0 || ultima_mensagem_chat == v_bkp_mensagens_chat_usuario){

// retorna falso
return false;
	
};

// atualiza o backup
v_bkp_mensagens_chat_usuario = ultima_mensagem_chat;

// atualizando o contador
v_contador_mensagens_chat += v_limit_query_chat;

// valida div de produtos
if(document.getElementById("id_div_chat_conversa").innerHTML == null){

// adiciona novo conteudo
document.getElementById("id_div_chat_conversa").innerHTML = mensagens_chat;

}else{
	
// adiciona novo conteudo
$(mensagens_chat).appendTo('#id_div_chat_conversa');	
	
};

// move scroll para bottom
var objDiv = document.getElementById("id_div_chat_conversa");

// movendo
objDiv.scrollTop = objDiv.scrollHeight;

});

};

