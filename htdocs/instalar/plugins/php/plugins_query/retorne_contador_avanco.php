<?php

// retorna o contador de avanco
function retorne_contador_avanco(){

// contador
$contador = remove_html($_REQUEST['contador']);

// contador padrao
if($contador == null){

// valor padrao
$contador = 0;

};

// retorno
return $contador;

};

?>