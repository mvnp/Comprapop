<?php

// atualizacoes javascript que devem iniciar com a pagina
function carregar_atualizacoes_jquery_longo(){

// globals
global $idioma;

// valida usuario logado
if(retorne_usuario_logado() == false){

// retorno nulo
return null;
	
};

// tempo de timer
$tempo_timer = CONFIG_TIMER_LONGO;

// codigo html
$codigo_html .= "
<script>
\n
var variavelTempoAtualizadorLongo = setInterval(function(){ AtualizadorTimerLongo() }, $tempo_timer);
\n
function AtualizadorTimerLongo() {
\n
carregar_atualizacoes_jquery_longo();
\n
};
\n
\n
function carregar_atualizacoes_jquery_longo(){
\n


// codigos aqui :::::::::::::::::::::::::::::
\n
retorne_numero_usuarios_online();
\n
// ::::::::::::::::::::::::::::::::::::::::::


\n
};
\n
</script>
\n
";

// retorno
return $codigo_html;

};

?>