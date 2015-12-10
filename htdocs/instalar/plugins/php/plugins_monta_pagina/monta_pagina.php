<?php

// monta pagina
function monta_pagina(){

// globals
global $idioma;

// valida idusuario existe
if(retorne_idusuario_existe(retorne_idusuario_visualizando(), true) == false){

// chama a pagina inicial
chama_pagina_inicial();

// mata o script
die;

};

// usar resolucao
$usar_resolucao = retorna_usar_resolucao();

// autor da pagina
$autor_pagina = DESENVOLVEDOR_SISTEMA_AUTOR;

// dependencias da pagina head
$dependencia[0] = "<script type='text/javascript' src='".ARQUIVO_JQUERY."'></script>";
$dependencia[1] = "<link rel='stylesheet' type='text/css' href='".ARQUIVO_CSS_HOST."'/>";

// depois de body
$dependencia[2] = "<script type='text/javascript' src='".ARQUIVO_JS_HOST."'></script>";
$dependencia[3] = "<script type='text/javascript' src='".ARQUIVO_JQUERY_PAGINACAO."'></script>";
$dependencia[4] = "<link rel='stylesheet' type='text/css' href='".ARQUIVO_CSS_RESOLUCAO."'/>";
$dependencia[5] = "<script type='text/javascript' src='".ARQUIVO_JQUERY_FORMULARIO."'></script>";
$dependencia[6] = "<link rel='stylesheet' type='text/css' href='".ARQUIVO_CSS_TEMA_PERSONALIZADO."'/>";

// valida usar resolucao
if($usar_resolucao == false){

// limpa dependencia
$dependencia[4] = null;

};

// titulo da pagina
$titulo_pagina = retorna_titulo_pagina();

// metas da pagina
$metas_pagina .= "<meta charset='UTF-8'>";
$metas_pagina .= "<meta name='viewport' content='width=device-width'/>";
$metas_pagina .= "<meta name='description' content='$idioma[0]'>";
$metas_pagina .= "<meta name='keywords' content='$idioma[1]'>";
$metas_pagina .= "<meta name='author' content='$autor_pagina'>";

// codigo html
$codigo_html .= "<html>";
$codigo_html .= "<head>";
$codigo_html .= "<title>$titulo_pagina</title>";
$codigo_html .= $dependencia[0];
$codigo_html .= $dependencia[1];
$codigo_html .= $metas_pagina;
$codigo_html .= $dependencia[4];
$codigo_html .= $dependencia[5];
$codigo_html .= $dependencia[6];
$codigo_html .= constroe_variaveis_js_pagina();
$codigo_html .= carrega_recursos_cabecalho();
$codigo_html .= "</head>";
$codigo_html .= constroe_tag_body();
$codigo_html .= constroe_topo_pagina();
$codigo_html .= campo_pesquisa();
$codigo_html .= "<div class='classe_div_principal_pagina'>";
$codigo_html .= constroe_conteudo_pagina();
$codigo_html .= "</div>";
$codigo_html .= constroe_rodape_pagina();
$codigo_html .= "</body>";
$codigo_html .= $dependencia[2];
$codigo_html .= $dependencia[3];
$codigo_html .= scripts_js_carregar_onload();
$codigo_html .= carregar_atualizacoes_jquery();
$codigo_html .= carregar_atualizacoes_jquery_longo();
$codigo_html .= carregar_header_redes_sociais();
$codigo_html .= "</html>";

// remove as linhas em branco
$codigo_html = remove_linhas_branco($codigo_html);

// retorno
return $codigo_html;

};

?>