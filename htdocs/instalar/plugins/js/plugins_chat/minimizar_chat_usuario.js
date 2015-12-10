// minimiza o chat do usuario
function minimizar_chat_usuario(){


// minimiza ou maximiza
if(v_minimiza_chat == 0){

// muda posicao de div
document.getElementById("id_campo_gerencia_chat").style.bottom = 0;

// minimiza
$("#id_div_chat_usuarios").hide();
$("#id_div_chat_publicar").hide();

// atualiza variavel
v_minimiza_chat = 1;

}else{

// muda posicao de div
document.getElementById("id_campo_gerencia_chat").style.bottom = 416;

// maximiza
$("#id_div_chat_usuarios").show();
$("#id_div_chat_publicar").show();

// atualiza variavel
v_minimiza_chat = 0;

};

// monta requisicao
$.post(v_pagina_acoes, {valor_atual: v_minimiza_chat, tipo_pagina_acao: 30}, function(retorno){

// minimiza o chat do usuario
minimizar_chat_usuario_timer();

});

};
