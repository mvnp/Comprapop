<?php

// campo avaliar perfil de usuario
function campo_avaliar_perfil_usuario(){

// globals
global $idioma;

// valida usuario logado
if(retorne_usuario_logado() == false){

// retorno nulo
return null;

};

// id de usuario
$idusuario = retorne_idusuario_request();

// usuario dono do perfil
$usuario_dono = retorne_usuario_dono_perfil();

// dados de avaliacao
$dados_avaliacao = retorne_dados_avaliacao_perfil_usuario($idusuario);

// separa dados de avalicacao
$agilidade = $dados_avaliacao['agilidade'];
$atendimento = $dados_avaliacao['atendimento'];
$honestidade = $dados_avaliacao['honestidade'];

// tamanho maximo de avaliacao de perfil
$tamanho_avaliar_perfil = CONFIG_TAMANHO_MAXIMO_AVALIAR_PERFIL;

// codigo html
$codigo_html = "
<div class='classe_div_avaliar_perfil'>


<div onclick='avaliar_perfil_usuario(1);' title='$idioma[119] $agilidade$idioma[130]'>
<progress value='$agilidade' max='$tamanho_avaliar_perfil'></progress>
</div>


<div onclick='avaliar_perfil_usuario(2);' title='$idioma[120] $atendimento$idioma[130]'>
<progress value='$atendimento' max='$tamanho_avaliar_perfil'></progress>
</div>


<div onclick='avaliar_perfil_usuario(3);' title='$idioma[121] $honestidade$idioma[130]'>
<progress value='$honestidade' max='$tamanho_avaliar_perfil'></progress>
</div>


</div>
";

// retorno
return $codigo_html;

};

?>