<?php

// instala a categoria do produto
function instala_categoria_produto($indice){

// globals
global $idioma_categoria;
global $categorias;

// array de catetorias
$array_categorias = explode("\n", $categorias[$indice]);

// lista itens de categoria
foreach($array_categorias as $categoria){

// valida categoria
if(strlen($categoria) > 1){

// idioma de categoria
$idioma_cat = $idioma_categoria[$indice];
$idioma_cat = trim($idioma_cat);
$idioma_cat = ucfirst($idioma_cat);

// tabela
$tabela = TABELA_CATEGORIAS;

// query
$query = "insert into $tabela values(null, '$categoria', '$idioma_cat');";

// comando executa
comando_executa($query);

};

};

};

?>