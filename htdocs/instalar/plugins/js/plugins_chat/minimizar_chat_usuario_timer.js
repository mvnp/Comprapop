
// minimiza o chat do usuario via timer
function minimizar_chat_usuario_timer(){

// monta requisicao
$.post(v_pagina_acoes, {tipo_pagina_acao: 31}, function(retorno){

// converte o retorno para inteiro
retorno = parseInt(retorno);

// minimiza ou maximiza
if(retorno != 0){

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


});

};

