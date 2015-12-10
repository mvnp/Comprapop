<?php

// constroe os links com categorias
function constroe_links_categorias(){

// globals
global $idioma;
global $requeste;

// categorias disponiveis
$categorias = retorne_array_categorias();

// url de pagina inicial
$url_pagina_inicial = PAGINA_INICIAL;

// construindo categorias
foreach($categorias as $categoria){

// valida categoria
if($categoria != null){
	
// numero de itens
$numero_itens = retorne_tamanho_resultado(numero_produtos_categoria($categoria));

// codigo html
$codigo_html .= "
<a href='$url_pagina_inicial?$requeste[3]=$categoria' title='$categoria'>$categoria ($numero_itens)</a>
";

};

};

// adiciona div
$codigo_html = "
<div class='classe_div_categorias'>
<div class='classe_div_categorias_titulo'>$idioma[129]</div>
$codigo_html
</div>";

// retorno
return $codigo_html;

};

?>