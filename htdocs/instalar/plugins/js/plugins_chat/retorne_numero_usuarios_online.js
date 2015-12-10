
// seta se o usuario do chat esta online
function retorne_numero_usuarios_online(){

// monta requisicao
$.post(v_pagina_acoes, {tipo_pagina_acao: 32}, function(retorno){

// retorno
document.getElementById("id_span_numero_usuarios_chat").innerHTML = retorno;

});

};

