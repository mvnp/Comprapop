<?php

// campo de pesquisa
function campo_pesquisa(){

// globals
global $idioma;
global $requeste;

// url de formulario
$url_formulario = PAGINA_INICIAL;

// termo de pesquisa
$termo_pesquisa = retorna_termo_pesquisa();

// codigo html
$codigo_html = "
<div class='classe_campo_pesquisa'>
<form action='$url_formulario' method='get'>

<div>
<input type='text' name='$requeste[1]' placeholder='$idioma[46]' value='$termo_pesquisa'>
</div>

<div>
<input type='submit' value='$idioma[132]' class='botao_padrao'>
</div>

</form>
</div>
";

// retorno
return $codigo_html;

};

?>