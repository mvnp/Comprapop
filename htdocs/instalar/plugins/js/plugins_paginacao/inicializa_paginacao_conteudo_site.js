// inicia a paginacao do conteudo do site
function inicializa_paginacao_conteudo_site(){


// para o timer de paginacao
window.clearInterval(timer_paginacao_conteudo);

// zera contador de timer de paginacao
v_contador_timer_paginacao = 0;

// constroe a publicacao da pagina
carregar_publicacoes_gerais_etc();


// novo timer de paginacao
timer_paginacao_conteudo = setInterval(function(){


// valida contador de timer de paginacao
if(v_contador_timer_paginacao == 30){

// zera contador de timer de paginacao
v_contador_timer_paginacao = 0;

// para o timer de paginacao
window.clearInterval(timer_paginacao_conteudo);

// constroe a publicacao da pagina
carregar_publicacoes_gerais_etc();

}else{

// constroe a publicacao da pagina
carregar_publicacoes_gerais_etc();

// atualiza o contador de timer de paginacao
v_contador_timer_paginacao++;

};


}, 1000);


};
