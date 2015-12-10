<?php

// constroe a pagina de produtos
function constroe_pagina_produtos(){

// globals
global $idioma;

// valida modo produtos
if(retorne_modo_produtos() == true){

// valida modo resolucao
if(retorna_usar_resolucao() == true){

// codigo html	
$codigo_html = "
<div class='classe_div_produtos_usuario'>
<div class='classe_div_produtos_usuario_div_3'id='id_div_produtos_usuario_div_1'></div>
</div>
";

}else{
	
// codigo html	
$codigo_html = "
<div class='classe_div_produtos_usuario'>
<div class='classe_div_produtos_usuario_div_1'id='id_div_produtos_usuario_div_1'></div>
<div class='classe_div_produtos_usuario_div_2'id='id_div_produtos_usuario_div_2'></div>
</div>
";

};

}else{

// codigo html	
$codigo_html = "
<div class='classe_div_produtos_usuario' id='id_div_produtos_usuario'></div>
";

};

// retorno
return $codigo_html;

};

?>