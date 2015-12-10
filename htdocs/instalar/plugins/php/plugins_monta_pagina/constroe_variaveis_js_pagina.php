<?php

// constroe as variaveis javascript da pagina
function constroe_variaveis_js_pagina(){

// globals
global $pagina_href;

// termo de pesquisa
$termo_pesquisa = retorna_termo_pesquisa();

// limit de query
$limit_query = CONFIG_LIMIT_PESQUISA;

// limit query mensagens de chat
$limit_query_mensagens_chat = CONFIG_LIMIT_CHAT_MENSAGENS;

// contador de chat
$contador_chat = CONFIG_LIMIT_CHAT;

// id de usuario
$idusuario = retorne_idusuario_request();

// href get da pagina
$href_get = retorne_href_get();

// valida idusuario
if($idusuario != null){

$campo_uid = "
var v_uid = $idusuario;
";	

}else{

$campo_uid = "
var v_uid = -1;
";
	
};

// id de produto via get
$idproduto = retorne_idproduto_get();

// valida id produto
if($idproduto == null){

// valor padrao
$idproduto = -1;
	
};

// pagina inicial
$pagina_inicial = PAGINA_INICIAL;

// categoria de produto
$categoria_produto = retorne_categoria_produto_get();

// limit query chat
$limit_query_chat = CONFIG_LIMIT_CHAT;

// pasta de sons de sistema
$pasta_sons_sistema = PASTA_SONS_SISTEMA;

// url de produto
$endereco_url_produto = $pagina_href[6].retorne_idproduto_get();

// campo modo produtos
if(retorne_modo_produtos() == true){
	// produto
    $campo_modo_produtos = "var v_modo_produtos = 1;";
}else{
	// nao produto
	$campo_modo_produtos = "var v_modo_produtos = 0;";
};

// valida permitir mobile
if(CONFIG_PERMITIR_MOBILE == true){
	
	// campo permitir mobile
	$campo_permite_mobile = "var v_permite_mobile = 1;";
	
}else{
	
	// campo permitir mobile
	$campo_permite_mobile = "var v_permite_mobile = 0;";
};

// valida modo resolucao
if(retorna_usar_resolucao() == true){
	
	// campo resolucao
	$campo_resolucao = "var v_modo_resolucao = 1;";
	
}else{
	
	// campo resolucao
	$campo_resolucao = "var v_modo_resolucao = -1;";
	
};

// codigo html
$codigo_html .= "<script>";
$codigo_html .= "\n";
$codigo_html .= "var v_pagina_acoes = '".PAGINA_ACOES."';\n";
$codigo_html .= "\n";
$codigo_html .= "var v_contador = 0;";
$codigo_html .= "\n";
$codigo_html .= "var v_bkp_carrega_produtos = '';";
$codigo_html .= "\n";
$codigo_html .= "var v_termo_pesquisa = '$termo_pesquisa';";
$codigo_html .= "\n";
$codigo_html .= "var v_limit_query = $limit_query;";
$codigo_html .= "\n";
$codigo_html .= $campo_uid;
$codigo_html .= "\n";
$codigo_html .= "var v_href = '$href_get';";
$codigo_html .= "\n";
$codigo_html .= "var v_idproduto = $idproduto;";
$codigo_html .= "\n";
$codigo_html .= "var v_pagina_inicial = '$pagina_inicial';";
$codigo_html .= "\n";
$codigo_html .= "var v_categoria_produto = '$categoria_produto';";
$codigo_html .= "\n";
$codigo_html .= "var v_contador_chat = $contador_chat;";
$codigo_html .= "\n";
$codigo_html .= "var v_bkp_mensagens_chat_usuario;";
$codigo_html .= "\n";
$codigo_html .= "var v_limit_query_chat = $limit_query_chat;";
$codigo_html .= "\n";
$codigo_html .= "var v_estado_lixeira_bkp;";
$codigo_html .= "\n";
$codigo_html .= "var v_pasta_sons_sistema = '$pasta_sons_sistema';";
$codigo_html .= "\n";
$codigo_html .= "var v_lista_chat_usuarios = [];";
$codigo_html .= "\n";
$codigo_html .= "var v_endereco_url_produto = '$endereco_url_produto';";
$codigo_html .= "\n";
$codigo_html .= $campo_modo_produtos;
$codigo_html .= "\n";
$codigo_html .= "var v_contador_seletor_carrega_produtos = 0;";
$codigo_html .= "\n";
$codigo_html .= "v_contador_timer_paginacao = 0;";
$codigo_html .= "\n";
$codigo_html .= "var timer_paginacao_conteudo = null;";
$codigo_html .= "\n";
$codigo_html .= "var v_bkp_carrega_seguidores = null;";
$codigo_html .= "\n";
$codigo_html .= "var v_bkp_feeds_usuario = null;";
$codigo_html .= "\n";
$codigo_html .= "var v_bkp_vendas_usuario = null;";
$codigo_html .= "\n";
$codigo_html .= $campo_permite_mobile;
$codigo_html .= "\n";
$codigo_html .= "var v_bkp_chat_usuario = null;";
$codigo_html .= "\n";
$codigo_html .= "var v_contador_usuarios_chat = 0;";
$codigo_html .= "\n";
$codigo_html .= "var v_contador_mensagens_chat = 0;";
$codigo_html .= "\n";
$codigo_html .= "var v_limit_query_mensagens_chat = $limit_query_mensagens_chat;";
$codigo_html .= "\n";
$codigo_html .= "var v_minimiza_chat = 0;";
$codigo_html .= "\n";
$codigo_html .= $campo_resolucao;
$codigo_html .= "\n";
$codigo_html .= "var v_pausar_carregar_produtos = 0;";
$codigo_html .= "\n";
$codigo_html .= "";
$codigo_html .= "\n";
$codigo_html .= "";
$codigo_html .= "\n";
$codigo_html .= "";
$codigo_html .= "\n";
$codigo_html .= "";
$codigo_html .= "\n";
$codigo_html .= "";
$codigo_html .= "\n";
$codigo_html .= "";
$codigo_html .= "</script>";

// retorno
return $codigo_html;

};

?>