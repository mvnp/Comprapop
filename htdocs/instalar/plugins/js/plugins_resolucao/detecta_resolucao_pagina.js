
// detecta a resolucao da pagina
function detecta_resolucao_pagina(){

// valida permite mobile
if(v_permite_mobile == 0){

// retorno nulo
return null;

};

// largura
var largura = window.innerWidth;

// monta requisicao
$.post(v_pagina_acoes, {largura: largura, tipo_pagina_acao: 28}, function(retorno){

// atualiza a pagina, se a resolucao mudar
if(retorno == 1){

// atualiza a pagina
//location.reload();

};

});

};