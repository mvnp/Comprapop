
// excluir imagem de produto
function excluir_imagem_produto(id){


// pausa o carregamento de produtos
pausa_carregamento_produtos(true);


// monta requisicao
$.post(v_pagina_acoes, {idimagem: id, tipo_pagina_acao: 36}, function(retorno){


// oculta elemento
document.getElementById("id_div_imagem_produto_" + id).style.display = "none";

// fecha a janela de dialogo
fechar_janela_mensagem_dialogo();


});

};

