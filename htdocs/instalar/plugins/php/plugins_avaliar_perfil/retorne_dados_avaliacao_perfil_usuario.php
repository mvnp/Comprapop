<?php

// retorna os dados de avalicao de perfil de usuario
function retorne_dados_avaliacao_perfil_usuario($idusuario){

// variaveis de retorno
$agilidade = 0;
$atendimento = 0;
$honestidade = 0;

// tabela
$tabela = TABELA_AVALIAR_PERFIL;

// query
$query = "select *from $tabela where idusuario='$idusuario';";

// comando
$comando = comando_executa($query);

// contador
$contador = 0;

// numero de linhas
$numero_linhas = retorne_numero_linhas_comando($comando);

// fazendo contagem
for($contador == $contador; $contador <= $numero_linhas; $contador++){

// dados
$dados = mysql_fetch_array($comando, MYSQL_ASSOC);

// valida id
if($dados['idusuario'] != null){

// atualiza contadores de retorno
$agilidade += $dados['agilidade'];
$atendimento += $dados['atendimento'];
$honestidade += $dados['honestidade'];
	
};
	
};

// atualiza o array de retorno
$array_retorno['agilidade'] = retorne_tamanho_resultado($agilidade);
$array_retorno['atendimento'] = retorne_tamanho_resultado($atendimento);
$array_retorno['honestidade'] = retorne_tamanho_resultado($honestidade);

// retorno
return $array_retorno;

};

?>