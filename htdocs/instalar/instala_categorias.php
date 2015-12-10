<?php

// contador de avanco
$contador_avanco = 0;

// listando categorias em array
foreach($idioma_categoria as $item_cat){

// valida item de categoria
if($item_cat != null){

// instala categoria
instala_categoria_produto($contador_avanco);

// atualiza o contador de avanco
$contador_avanco++;

};

};

?>