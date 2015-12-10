<?php

// constroe o conteudo
function constroe_conteudo(){

// globals
global $idioma;
global $pagina_href;

// campo rede social
$campo_rede_social = campo_rede_social(false);

// campo perfil de usuario
if(retorna_usar_resolucao() == false){
	
$codigo_html[0] .= $campo_rede_social;
$codigo_html[0] .= "<div class='classe_div_conteudo_lateral'>";
$codigo_html[0] .= constroe_perfil_usuario(1);
$codigo_html[0] .= campo_seleciona_idioma();
$codigo_html[0] .= constroe_links_categorias();
$codigo_html[0] .= "</div>";
$codigo_html[0] .= constroe_perfil_usuario(2);
$codigo_html[0] .= constroe_chat_usuario();

};

// valida usar chat em modo resolucao
if(retorna_usar_resolucao() == true and CONFIG_PERMITE_CHAT_RESOLUCAO == true){

// codigo html
$codigo_html[0] .= constroe_chat_usuario();

};

// valida usando href
if(retorne_href_get() == null or retorne_href_get() == $idioma[14]){

// codigo html
$codigo_html[1] .= constroe_pagina_produtos();

// adiciona div
$codigo_html = "
$codigo_html[0]
<div class='classe_div_conteudo_centro'>$codigo_html[1]</div>
";

// retorno
return $codigo_html;

};

// valida usuario logado
if(retorne_usuario_logado() == false and retorne_href_get() != $idioma[3]){

// formulario de login
$codigo_html[1] .= formulario_login();

// codigo html
$codigo_html = "
$codigo_html[0]
<div class='classe_div_conteudo_centro'>$codigo_html[1]</div>
";

// retorno
return $codigo_html;

};

// constroe conteudo
switch(retorne_href_get()){

case $idioma[3]:
$codigo_html[1] .= formulario_login();
break;

case $idioma[15]:
// obtem o idioma atual
$idioma_atual = retorne_idioma_sessao_usuario();
// zera cookies, e sessao
salvar_cookies(null, null, true);
// inicia a sessao
session_start();
// conserva o idioma atual
$_SESSION[IDENTIFICADOR_SESSAO_IDIOMA] = $idioma_atual;
chama_pagina_especifica($pagina_href[0]);
break;

case $idioma[17]:
$codigo_html[1] .= campo_publicar_produto($dados);
break;

case $idioma[19]:
$codigo_html[1] .= constroe_pagina_produtos();
break;

case $idioma[48]:
$codigo_html[1] .= campo_configura_perfil_usuario();
break;

case $idioma[63]:
$codigo_html[1] .= constroe_perfil_completo();
break;

case $idioma[76]:
$codigo_html[1] .= constroe_pagina_seguidores();
break;

case $idioma[77]:
$codigo_html[1] .= constroe_pagina_seguidores();
break;

case $idioma[78]:
$codigo_html[1] .= constroe_pagina_feeds();
break;

case $idioma[80]:
$codigo_html[1] .= app_calculadora();
break;

case $idioma[21]:
$codigo_html[1] .= constroe_pagina_vendas();
break;

case $idioma[152]:
$codigo_html[1] .= campo_excluir_conta_usuario();
break;

};

// adiciona div
$codigo_html = "
$codigo_html[0]
<div class='classe_div_conteudo_centro'>$codigo_html[1]</div>
";

// retorno
return $codigo_html;

};

?>