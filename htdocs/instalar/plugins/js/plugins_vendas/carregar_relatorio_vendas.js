
// carrega o relatorio de vendas
function carregar_relatorio_vendas(zerar){

// zera o contador de avanco
if(zerar == 1){

// zera o contador
v_contador = 0;

// limpa o backup
v_bkp_vendas_usuario = "";

// limpa div com resultados antigos
document.getElementById("id_div_vendido_pagina_vendas").innerHTML = "";

};

// valida existencia de div de produtos
if($("#id_div_vendido_pagina_vendas").length == 0){

// retorno nulo
return null;
	
};

// dados de formulario
tipo_relatorio = document.getElementById("id_campo_opcoes_vendas").value;

// monta requisicao
$.post(v_pagina_acoes, {tipo_relatorio: tipo_relatorio, contador: v_contador, tipo_pagina_acao: 22}, function(retorno){


// nao permite duplicatas
if(retorno == v_bkp_vendas_usuario){

// retorno nulo
return null;	

}else{

// atualiza o backup de vendas de usuario
v_bkp_vendas_usuario = retorno;

};

// valida retorno
if(retorno.length == 0){

// retorno nulo
return null;
	
}else{

// atualiza o contador de avanco
v_contador += v_limit_query;

};

// valida div de produtos
if(document.getElementById("id_div_vendido_pagina_vendas").innerHTML == null){

// adiciona novo conteudo
document.getElementById("id_div_vendido_pagina_vendas").innerHTML = retorno;

}else{
	
// adiciona novo conteudo
$(retorno).appendTo('#id_div_vendido_pagina_vendas');	
	
};


});


};

