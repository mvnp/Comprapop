
// carrega produtos
function carrega_produtos(){

// valida pausar carregamento de produtos
if(v_pausar_carregar_produtos != 0){

// retorno nulo
return null;

};

// monta requisicao
$.post(v_pagina_acoes, {cat: v_categoria_produto, idproduto: v_idproduto, uid: v_uid, href: v_href, pesq: v_termo_pesquisa, contador: v_contador, tipo_pagina_acao: 4}, function(retorno){


// valida backups carregados
if(v_bkp_carrega_produtos == retorno){

   // retorno nulo
   return null;

}else{
   
   // atualiza o backup de produtos carregados
   v_bkp_carrega_produtos = retorno;

};

// carrega apenas o produto da id
if(v_modo_produtos == 0){

// retorno
$(retorno).appendTo('#id_div_produtos_usuario');

// retorno nulo
return null;

};

// valida retorno
if(retorno.length == 0){

// retorna nulo
return null;

};

// atualiza o contador de avanco
v_contador += v_limit_query;

// valida modo resolucao
if(v_modo_resolucao == -1){

// atualiza o contador de selecao de div
v_contador_seletor_carrega_produtos++;

// seleciona div de resultado	
switch(v_contador_seletor_carrega_produtos){

case 1:
$(retorno).appendTo('#id_div_produtos_usuario_div_1');
break;

case 2:
$(retorno).appendTo('#id_div_produtos_usuario_div_2');
v_contador_seletor_carrega_produtos = 0;
break;

};

}else{

$(retorno).appendTo('#id_div_produtos_usuario_div_1');

};


});


};
