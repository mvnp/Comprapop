
// excluir conta de usuario
function excluir_conta_usuario(){

// senha de usuario
var v_senha = document.getElementById("id_campo_senha_excluir_conta").value;

// move o foco
document.getElementById("id_campo_senha_excluir_conta").focus();

// valida senha de usuario
if(v_senha.length == 0){

// retorno nulo	
return null;
	
};

// monta requisicao
$.post(v_pagina_acoes, {tipo_pagina_acao: 38,senha: v_senha}, function(retorno){


// valida retorno
if(retorno == -1){
	
// atualiza a pagina
location.reload();
	
};


});
	
};
