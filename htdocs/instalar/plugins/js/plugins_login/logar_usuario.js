
// login de usuario
function logar_usuario(){

// email e senha
var email = document.getElementById("id_email_login").value;
var senha = document.getElementById("id_senha_login").value;

// monta requisicao
$.post(v_pagina_acoes, {tipo_pagina_acao: 2, email: email, senha: senha}, function(retorno){

// valida retorno
if(retorno == 1){

// valida visualizando id de usuario
if(v_uid == -1){

// abre apagina inicial
window.open(v_endereco_url_produto, "_self");

}else{

// atualiza a pagina
location.reload();
	
};

}else{
	
// mensagem de retorno
document.getElementById("id_mensagem_login_cadastro").innerHTML = retorno;
	
};


});

};

