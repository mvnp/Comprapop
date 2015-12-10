<?php

// constroe mapa
function constroe_mapa($cidade, $estado){

// valida permite mapa
if(CONFIG_PERMITE_MAPA == false){

// retorno nulo
return null;

};

// url endereco servidor mapa
$url_endereco_servidor_mapa = "https://www.google.com.br/maps?q=$cidade,+$estado&output=embed";

// codigo html
$codigo_html = "
<div class='classe_div_mapa'>
<iframe src='$url_endereco_servidor_mapa'></iframe>
</div>
";

// retorno
return $codigo_html;

};

?>