<?php

// numero de itens por categoria
function numero_produtos_categoria($categoria){

// tabela
$tabela = TABELA_PRODUTO;

// query
$query = "select *from $tabela where categoria like '%$categoria%'";

// retorno
return retorne_numero_linhas_query($query);

};

?>