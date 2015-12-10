<?php

// constroe imagens de produtos
function constroe_imagens_produto($idalbum, $dados){

// globals
global $idioma;
global $pagina_href;

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

// usuario dono do produto
$usuario_dono_produto = retorne_usuario_dono_produto($id);

// tabela
$tabela = TABELA_IMAGENS_ALBUM;

// limit
$limit = CONFIG_NUM_IMAGENS_PRODUTO_BASICO;

// id de produto via get
$idproduto = retorne_idproduto_get();

// url do produto
$url_produto = $pagina_href[6].$id;

// query
if($idproduto != -1){

// query
$query = "select *from $tabela where idalbum='$idalbum';";

// classe de imagem
$classe_imagem = "classe_imagem_completa_produto";

}else{

// query
$query = "select *from $tabela where idalbum='$idalbum' limit $limit;";

// classe de imagem
$classe_imagem = "classe_imagem_miniatura_produto";

};

// comando
$comando = comando_executa($query);

// contador
$contador = 0;

// numero de linhas
$numero_linhas = retorne_numero_linhas_comando($comando);

// constroe imagens
for($contador == $contador; $contador <= $numero_linhas; $contador++){

// dados
$dados = mysql_fetch_array($comando, MYSQL_ASSOC);

// separa dados
$id = $dados['id'];
$url_imagem = $dados['url_imagem'];
$url_imagem_miniatura = $dados['url_imagem_miniatura'];

// valida id
if($id != null){

// valida idproduto
if($idproduto == -1){
	
// codigo html	
$codigo_html .= "
<a href='$url_produto' title='$titulo'>
<img src='$url_imagem_miniatura' title='$titulo' class='$classe_imagem'>
</a>
";

}else{


// valida usuario dono do produto
if($usuario_dono_produto == true){

// imagem de servidor
$imagem_servidor[0] = retorne_imagem_servidor(19);

// campo dialogo excluir imagem
$campo_dialogo_excluir_imagem = "
<div class='classe_div_separa_excluir_imagem_publicacao_div'>
$idioma[142]
</div>
<div class='classe_div_exibe_imagem_excluir_produto'>
<img src='$url_imagem_miniatura' title='$titulo' class='$classe_imagem'>
</div>
<div class='classe_div_separa_excluir_imagem_publicacao_div'>
<input type='button' value='$idioma[126]' class='botao_padrao' onclick='excluir_imagem_produto($id);'>
</div>
";

// adiciona dialogo
$campo_dialogo_excluir_imagem = janela_mensagem_dialogo($idioma[143], $campo_dialogo_excluir_imagem, "id_dialogo_excluir_imagem_produto_$id");

// campo excluir imagem
$campo_excluir_imagem = "
<div class='classe_div_campo_excluir_imagem_produto'>
<div onclick='dialogo_excluir_imagem_produto($id);'>$imagem_servidor[0]</div>
</div>
";

$codigo_html .= "
<div class='classe_div_imagem_produto' id='id_div_imagem_produto_$id'>
$campo_excluir_imagem
<a class='fancybox' rel='group' href='$url_imagem'>
<img src='$url_imagem_miniatura' title='$titulo' class='$classe_imagem'>
</a>
</div>
$campo_dialogo_excluir_imagem
";

}else{

$codigo_html .= "
<a class='fancybox' rel='group' href='$url_imagem'>
<img src='$url_imagem_miniatura' title='$titulo' class='$classe_imagem'>
</a>
";

};


};

};

};

// retorno
return $codigo_html;

};

?>