
// recupera a senha do usuario
function recuperar_senha_usuario(){

// senha de formulario
var v_email = document.getElementById("id_campo_recupera_senha").value;

// limpa email
document.getElementById("id_campo_recupera_senha").value = "";

// monta requisicao
$.post(v_pagina_acoes, {email: v_email, tipo_pagina_acao: 37}, function(retorno){

// exibe e mostra o retorno
document.getElementById("id_mensagem_recuperou_senha_usuario").style.display = "table";
document.getElementById("id_mensagem_recuperou_senha_usuario").innerHTML = retorno;

// fecha a janela de dialogo
fechar_janela_mensagem_dialogo();

});

};

