<?php

// limit de query
function limit_query(){

// dados de formulario
$contador = remove_html($_REQUEST['contador']);

// valida limit
if($contador == null){

$contador = 0;
	
};

// contadores de avanco limit
$contador_inicio = $contador;
$contador_fim = 1;

// limit
$limit = "limit $contador_inicio, $contador_fim";

// retorno
return $limit;

};

?>