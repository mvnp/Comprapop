<?php

// campo rede social
function campo_rede_social($modo){

// valida configuracao
if(CONFIG_HABILITA_SOCIAL == false){

// retorno nulo
return null;

};

// url atual
$url_atual = retorne_url_atual();

// campo compartilhar em facebook
$campo_compartilhar_facebook = "
<div class='classe_div_separa_sessao_rede_social'>
<div class='fb-share-button' data-href='$url_atual' data-layout='button_count'></div>
</div>
";

// campo curtir do facebook
$campo_curtir_facebook = "
<div class='classe_div_separa_sessao_rede_social'>
<div class='fb-like'></div>
</div>
";

// campo comentario de facebook
$campo_comentario_facebook = "
<div class='classe_div_separa_sessao_rede_social'>
<div class='fb-comments' data-width='100%' data-href='$url_atual' data-numposts='5'></div>
</div>
";

// campo compartilhar do google plus
$campo_compartilhar_google_plus = "
<div class='classe_div_separa_sessao_rede_social'>
<g:plus action='share'></g:plus>
</div>
";

// campo mais um do google plus
$campo_mais_um_google_plus = "
<div class='classe_div_separa_sessao_rede_social'>
<g:plusone size='tall'></g:plusone>
</div>
";

// seleciona o tipo de modo
switch($modo){

case 1:
$classe_div_principal = "classe_div_compartilhar";
break;

case 2:
$classe_div_principal = "classe_div_compartilhar";
$campo_comentario_facebook = null;
break;

};

if($modo == false){

$campo_comentario_facebook = null;

};

// codigo html
$codigo_html = "
<div class='$classe_div_principal'>
$campo_compartilhar_facebook
$campo_curtir_facebook
$campo_compartilhar_google_plus
$campo_mais_um_google_plus
$campo_comentario_facebook
</div>
";

// retorno
return $codigo_html;

};

?>