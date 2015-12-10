
// carrega as mensagens do chat
function retorne_numero_mensagens_idusuario(){

// monta requisicao
$.post(v_pagina_acoes, {tipo_pagina_acao: 29}, function(retorno){

// retorno
return parseInt(retorno);

});

};

