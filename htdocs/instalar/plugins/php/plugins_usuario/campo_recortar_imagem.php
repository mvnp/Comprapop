<?php

// campo recortar imagem
function campo_recortar_imagem($dados){

// globals
global $idioma;
global $requeste;

// separa dados
$imagem_perfil = $dados['imagem_perfil'];
$imagem_perfil_miniatura = $dados['imagem_perfil_miniatura'];
$tipo_pagina = PAGINA_ID33;
$nome = $dados['nome'];

// url de pagina
$url_pagina = PAGINA_ACOES;

// codigo html
$codigo_html = "
<div class='classe_div_campo_altera_imagem_perfil'>

<div class='classe_div_pre_visualiza_imagem_perfil' id='id_div_pre_visualiza_imagem_perfil'>
<img src='$imagem_perfil' title='$nome' id='cropbox'>
</div>

<div class='classe_div_formulario_recorte_imagem_perfil'>
<form action='$url_pagina' method='post' enctype='multipart/form-data' onsubmit='return checkCoords();'>
<input type='hidden' id='x' name='x'>
<input type='hidden' id='y' name='y'>
<input type='hidden' id='w' name='w'>
<input type='hidden' id='h' name='h'>
<input type='hidden' value='$imagem_perfil' name='imagem_perfil'>
<input type='hidden' value='$imagem_perfil_miniatura' name='imagem_perfil_miniatura'>
<input type='hidden' name='$requeste[5]' value='$tipo_pagina'>
<input type='hidden' value='' name='endereco_imagem_perfil_upload' id='id_endereco_imagem_perfil_upload'>
<input type='submit' value='$idioma[139]' class='botao_padrao'>
</form>
</div>

</div>
";

// retorno
return $codigo_html;

};

?>