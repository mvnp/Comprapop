<?php

// constroe conteudo de rodape
function constroe_conteudo_rodape(){

// globals
global $idioma;

// nome do desenvolvedor
$nome_desenvolvedor = DESENVOLVEDOR_SISTEMA;

// nome do sistema
$nome_sistema = NOME_SISTEMA;

// localizacao
$localizacao = LOCALIZACAO;

// ano atual
$ano_atual = Date("Y");;

// codigo html
$codigo_html = "
<div class='classe_div_conteudo_rodape'>

<div class='classe_div_conteudo_rodape_div'>$idioma[127]$nome_desenvolvedor</div>
<div class='classe_div_conteudo_rodape_div'>$idioma[128]$nome_sistema $ano_atual <br> $idioma[156]</div>
<div class='classe_div_conteudo_rodape_div'>$localizacao</div>

</div>
";

// retorno
return $codigo_html;

};

?>