
// salva a sessao de idioma
function sessao_idioma_atualizar(modo){

// monta requisicao
$.post(v_pagina_acoes, {modo: modo, tipo_pagina_acao: 6}, function(retorno){

// valida uid
if(v_uid == -1){
	
// abre a pagina inicial	
window.open(v_pagina_inicial, "_self");

}else{

// abre a pagina inicial de id de usuario
window.open(v_pagina_inicial + "?uid=" + v_uid, "_self");

};

});

};

