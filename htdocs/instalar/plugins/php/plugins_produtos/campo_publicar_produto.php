<?php

// campo publica novo produto
function campo_publicar_produto($dados){

// globals
global $idioma;
global $requeste;

// separa dados
$id = $dados['id'];
$idusuario = $dados['idusuario'];
$idalbum = $dados['idalbum'];
$titulo = $dados['titulo'];
$descricao = $dados['descricao'];
$quantidade = $dados['quantidade'];
$parcelamento = $dados['parcelamento'];
$juros = $dados['juros'];
$preco = $dados['preco'];
$categoria = $dados['categoria'];
$data = $dados['data'];

// valida juros
if($juros == null){

// seta valor de juros padrao
$juros = 0;

};

// constroe campos baseado em nova publicacao de produto
if($id == null){

// valor de campo hidden
$valor_campo_hidden = PAGINA_ID3;

}else{

// valor de campo hidden
$valor_campo_hidden = PAGINA_ID35;

};

// url de formulario
$url_formulario = PAGINA_ACOES;

// campo categorias
$campo_categorias = gerador_select_option(retorne_array_categorias(), $categoria, "categoria", null, null);

// constroe campos baseado em nova publicacao de produto
if($id == null){

// campo publicar
$campo_publicar = "

<div class='classe_div_separa_campos_publica_produto'>
<input type='submit' value='$idioma[28]' class='botao_padrao' onclick='pausa_carregamento_produtos(1);'>
</div>

";

}else{

// campo publicar
$campo_publicar = "

<div class='classe_div_separa_campos_publica_produto'>
<input type='submit' value='$idioma[141]' class='botao_padrao' onclick='pausa_carregamento_produtos(1);'>
</div>

";

// campos ocultos
$campos_ocultos = "
<input type='hidden' name='$idioma[31]' value='$idalbum'>
<input type='hidden' name='$requeste[4]' value='$id'>
";

};

// campo imagens
$campo_imagens = "

<div class='classe_div_publicar_produto_imagens'>
<span>$idioma[29]</span>
<input type='file' name='fotos[]' id='elemento_file_campo_publicar' class='campo_file_upload' multiple>
<input type='button' class='botao_cadastro' value='$idioma[27]' onclick='seleciona_imagens_publicacao_usuario();'>
<div class='classe_div_imagens_pre_publicacao' id='div_imagens_pre_publicacao'></div>
</div>

";

// codigo html
$codigo_html = "
<div class='classe_div_publicar_produto'>
<form action='$url_formulario' method='post' enctype='multipart/form-data'>

<input type='hidden' name='$requeste[5]' value='$valor_campo_hidden'>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[24]</span>
<input type='text' required='required' name='titulo' value='$titulo' class='classe_campo_titulo_produto_publica'>
</div>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[23]</span>
<textarea cols='10' rows='10' name='descricao' placeholder='' required='required'>$descricao</textarea>
</div>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[58]</span>
$campo_categorias
</div>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[38]</span>
<input type='number' step='0.1' required='required' name='preco' value='$preco'>
</div>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[25]</span>
<input type='number' required='required' name='quantidade' value='$quantidade'>
</div>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[26]</span>
<input type='number' required='required' name='parcelamento' value='$parcelamento'>
</div>

<div class='classe_div_separa_campos_publica_produto'>
<span>$idioma[36]</span>
<input type='number' required='required' step='0.1' name='juros' value='$juros'>
</div>

$campo_imagens
$campos_ocultos
$campo_publicar

</form>
</div>
";

// retorno
return $codigo_html;

};

?>