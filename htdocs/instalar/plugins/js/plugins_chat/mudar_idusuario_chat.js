
// muda o id de usuario de chat
function mudar_idusuario_chat(idusuario){


// monta requisicao
$.post(v_pagina_acoes, {uid: idusuario, tipo_pagina_acao: 13}, function(retorno){


// limpa variaveis
v_bkp_mensagens_chat_usuario = "";
v_estado_lixeira_bkp = "";

// zera o contador do chat
v_contador_mensagens_chat = 0;

// limpa mensagens antigas
document.getElementById("id_div_chat_conversa").innerHTML = "";

// move o foco novamente
document.getElementById("id_campo_escrever_mensagem").focus();

// carrega novas mensagens de chat
carrega_mensagens_chat();


});


};

