
function adiciona_numero_calculadora(numero){
valor_atual = document.getElementById("id_div_visor_calculadora").innerHTML;
if(valor_atual == "0" && numero == 0){
return null;
};
if(valor_atual == 0){
document.getElementById("id_div_visor_calculadora").innerHTML = "";
};
document.getElementById("id_div_visor_calculadora").innerHTML += numero;
};
function adiciona_sinal_calculadora(sinal){
switch(sinal){
case 1:
var v_sinal = "+";
break;
case 2:
var v_sinal = "-";
break;
case 3:
var v_sinal = "/";
break;
case 4:
var v_sinal = "*";
break;
case 5:
var v_sinal = ".";
break;
};
var valor_atual = document.getElementById("id_div_visor_calculadora").innerHTML;
var v_sub_visor = document.getElementById("id_div_visor_calculadora").innerHTML;
if(v_sub_visor.indexOf(v_sinal) > -1){
return false;
};
document.getElementById("id_div_visor_calculadora").innerHTML = valor_atual + v_sinal;
};
function calcula_resultado_calculadora(tipo){
switch(tipo){
case 1:
var v_valor = document.getElementById("id_div_visor_calculadora").innerHTML;
v_valor = eval(v_valor);
document.getElementById("id_div_visor_calculadora").innerHTML = v_valor;
break;
case 2:
document.getElementById("id_div_visor_calculadora").innerHTML = 0;
break;
};
};
function avaliar_perfil_usuario(modo){
$.post(v_pagina_acoes, {uid: v_uid, modo: modo, tipo_pagina_acao: 26}, function(retorno){
location.reload();
});
};
function cadastro_usuario(){
var email = document.getElementById("id_email_login").value;
var senha = document.getElementById("id_senha_login").value;
$.post(v_pagina_acoes, {tipo_pagina_acao: 1, email: email, senha: senha}, function(retorno){
if(retorno == 1){
location.reload();
}else{
document.getElementById("id_mensagem_login_cadastro").innerHTML = retorno;
};
});
};
function atualizacoes_chat_usuario(){
var idamigos_array = [];
$.each(v_lista_chat_usuarios, function(i, el){
if($.inArray(el, idamigos_array) === -1) idamigos_array.push(el);
});
for(i = 0; i <= idamigos_array.length; i++){
idamigo = idamigos_array[i];
if(idamigo!= null){
seta_nova_mensagem_usuario_chat(idamigo);
seta_usuario_chat_online(idamigo);
};
};
carrega_mensagens_chat();
minimizar_chat_usuario_timer();
};
function carrega_mensagens_chat(){
$.post(v_pagina_acoes, {dataType : "json", contador: v_contador_mensagens_chat, tipo_pagina_acao: 15}, function(retorno){
var objeto = jQuery.parseJSON(retorno);
var mensagens_chat = objeto['mensagens_chat'];
var ultima_mensagem_chat = objeto['ultima_mensagem_chat'];
if(ultima_mensagem_chat.length == 0 || ultima_mensagem_chat == v_bkp_mensagens_chat_usuario){
return false;
};
v_bkp_mensagens_chat_usuario = ultima_mensagem_chat;
v_contador_mensagens_chat += v_limit_query_chat;
if(document.getElementById("id_div_chat_conversa").innerHTML == null){
document.getElementById("id_div_chat_conversa").innerHTML = mensagens_chat;
}else{
$(mensagens_chat).appendTo('#id_div_chat_conversa');	
};
var objDiv = document.getElementById("id_div_chat_conversa");
objDiv.scrollTop = objDiv.scrollHeight;
});
};
function carrega_usuarios_chat(){
if($("#id_div_chat_usuarios").length == 0){
return null;
};
$.post(v_pagina_acoes, {uid: v_uid, href: v_href, contador: v_contador_usuarios_chat, tipo_pagina_acao: 12}, function(retorno){
if(retorno == v_bkp_chat_usuario){
return null;	
}else{
v_bkp_chat_usuario = retorno;
};
if(retorno.length == 0){
return null;
}else{
v_contador_usuarios_chat += v_limit_query;
};
if(document.getElementById("id_div_chat_usuarios").innerHTML == null){
document.getElementById("id_div_chat_usuarios").innerHTML = retorno;
}else{
$(retorno).appendTo('#id_div_chat_usuarios');	
};
});
};
function envia_mensagem_usuario(){
mensagem = document.getElementById("id_campo_escrever_mensagem").value;
if(mensagem.length == 0){
return false;
};
$.post(v_pagina_acoes, {mensagem: mensagem, tipo_pagina_acao: 14}, function(retorno){
document.getElementById("id_campo_escrever_mensagem").value = "";
document.getElementById("id_campo_escrever_mensagem").focus();
});
carrega_mensagens_chat();
};
function estado_lixeira(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 17}, function(retorno){
if(v_estado_lixeira_bkp != retorno){
v_estado_lixeira_bkp = retorno;
document.getElementById("classe_div_campo_opcoes_chat_lixeira").innerHTML = retorno;
};
});
};
function limpa_mensagem_chat(modo){
$.post(v_pagina_acoes, {modo: modo, tipo_pagina_acao: 16}, function(retorno){
v_bkp_mensagens_chat_usuario = "";
v_estado_lixeira_bkp = "";
document.getElementById("id_div_chat_conversa").innerHTML = "";
executa_som(1);
});
fechar_janela_mensagem_dialogo();
};
function minimizar_chat_usuario(){
if(v_minimiza_chat == 0){
document.getElementById("id_campo_gerencia_chat").style.bottom = 0;
$("#id_div_chat_usuarios").hide();
$("#id_div_chat_publicar").hide();
v_minimiza_chat = 1;
}else{
document.getElementById("id_campo_gerencia_chat").style.bottom = 416;
$("#id_div_chat_usuarios").show();
$("#id_div_chat_publicar").show();
v_minimiza_chat = 0;
};
$.post(v_pagina_acoes, {valor_atual: v_minimiza_chat, tipo_pagina_acao: 30}, function(retorno){
minimizar_chat_usuario_timer();
});
};
function minimizar_chat_usuario_timer(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 31}, function(retorno){
retorno = parseInt(retorno);
if(retorno != 0){
document.getElementById("id_campo_gerencia_chat").style.bottom = 0;
$("#id_div_chat_usuarios").hide();
$("#id_div_chat_publicar").hide();
v_minimiza_chat = 1;
}else{
document.getElementById("id_campo_gerencia_chat").style.bottom = 416;
$("#id_div_chat_usuarios").show();
$("#id_div_chat_publicar").show();
v_minimiza_chat = 0;
};
});
};
function mudar_idusuario_chat(idusuario){
$.post(v_pagina_acoes, {uid: idusuario, tipo_pagina_acao: 13}, function(retorno){
v_bkp_mensagens_chat_usuario = "";
v_estado_lixeira_bkp = "";
v_contador_mensagens_chat = 0;
document.getElementById("id_div_chat_conversa").innerHTML = "";
document.getElementById("id_campo_escrever_mensagem").focus();
carrega_mensagens_chat();
});
};
function notificacao_novas_mensagens_chat(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 18}, function(retorno){
if(retorno.length > 0){
document.getElementById("id_notifica_chat").style.display = "block";	
document.getElementById("id_notifica_chat").innerHTML = retorno;
};
if(retorno == 0){
document.getElementById("id_notifica_chat").style.display = "none";	
};
});
};
function retorne_numero_mensagens_idusuario(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 29}, function(retorno){
return parseInt(retorno);
});
};
function retorne_numero_usuarios_online(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 32}, function(retorno){
document.getElementById("id_span_numero_usuarios_chat").innerHTML = retorno;
});
};
function seta_nova_mensagem_usuario_chat(idamigo){
$.post(v_pagina_acoes, {idamigo: idamigo, tipo_pagina_acao: 19}, function(retorno){
if(parseInt(retorno) > 0){
document.getElementById("id_notificacao_nova_mensagem_usuario_" + idamigo).style.display = "block";
document.getElementById("id_notificacao_nova_mensagem_usuario_" + idamigo).innerHTML = retorno;
}else{
document.getElementById("id_notificacao_nova_mensagem_usuario_" + idamigo).style.display = "none";
};
});
};
function seta_usuario_chat_online(idusuario){
$.post(v_pagina_acoes, {uid: idusuario, tipo_pagina_acao: 20}, function(retorno){
if(retorno.length > 0){
document.getElementById("id_div_usuario_online_chat_" + idusuario).innerHTML = retorno;
document.getElementById("id_div_usuario_chat_" + idusuario).style.opacity = "1";
document.getElementById("id_div_usuario_online_chat_" + idusuario).style.display = "block";
}else{
document.getElementById("id_div_usuario_online_chat_" + idusuario).innerHTML = "";
document.getElementById("id_div_usuario_chat_" + idusuario).style.opacity = "0.8";
document.getElementById("id_div_usuario_online_chat_" + idusuario).style.display = "none";
};
});
};
function calcula_preco_compra(id, preco, juros){
var v_quantidade = document.getElementById("id_select_numero_produtos_" + id).value;
var v_total_pagar_juros = (v_quantidade * preco);
var v_total_pagar = (v_quantidade * preco);
v_total_pagar_juros += (v_total_pagar_juros * juros) / 100;
v_total_pagar_juros = v_total_pagar_juros.toFixed(2);
v_total_pagar = v_total_pagar.toFixed(2);
if($("#id_div_preco_finaliza_compra_juros_" + id).length > 0){
document.getElementById("id_div_preco_finaliza_compra_juros_" + id).innerHTML = "R$ " + v_total_pagar_juros;
};
document.getElementById("id_div_preco_finaliza_compra_" + id).innerHTML = "R$ " + v_total_pagar;
};
function cancelar_compra(idproduto){
$.post(v_pagina_acoes, {idproduto: idproduto, tipo_pagina_acao: 24}, function(retorno){
location.reload();
});
};
function comprar_produto(idproduto){
var quantidade = document.getElementById("id_select_numero_produtos_" + idproduto).value;
$.post(v_pagina_acoes, {idproduto: idproduto, quantidade: quantidade, tipo_pagina_acao: 21}, function(retorno){
window.open(v_pagina_inicial + "?idproduto=" + idproduto, "_self");
});
};
function atualiza_conexao_usuario(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 11}, function(retorno){
});
};
function dialogo_confirmar_pagamento(identificador){
procedimentos_inicia_dialogo();
document.getElementById("id_dialogo_pagou_produto_" + identificador).style.display = "inline";
};
function dialogo_editar_produto(identificador){
procedimentos_inicia_dialogo();
document.getElementById("id_dialogo_editar_produto_" + identificador).style.display = "inline";
};
function dialogo_excluir_imagem_produto(identificador){
procedimentos_inicia_dialogo();
document.getElementById("id_dialogo_excluir_imagem_produto_" + identificador).style.display = "inline";
};
function dialogo_excluir_produto(identificador){
procedimentos_inicia_dialogo();
document.getElementById("id_dialogo_excluir_produto_" + identificador).style.display = "inline";
};
function dialogo_limpa_mensagem_chat(){
document.getElementById("id_dialogo_limpar_mensagens_chat").style.display = "inline";	
};
function dialogo_recuperar_senha_usuario(){
procedimentos_inicia_dialogo();
document.getElementById("id_dialogo_recuperar_senha_usuario").style.display = "inline";
};
function exibir_historico_chat_dialogo(){
procedimentos_inicia_dialogo();
v_backup_historico_antigo_chat = "";
v_contador_avanco_hist_chat = 0;
document.getElementById("id_janela_dialogo_historico_mensagens_chat_atual").style.display = "inline";
document.getElementById("id_div_historico_mensagens_chat").innerHTML = "";
carrega_historico_conversa_chat();
};
function fechar_janela_mensagem_dialogo(){
var numero_janelas = document.getElementsByClassName("div_janela_principal_mensagem_dialogo").length;
for(contador = 0; contador <= numero_janelas; contador++){
document.getElementsByClassName("div_janela_principal_mensagem_dialogo")[contador].style.display = "none";
};
};
function janela_mensagem_dialogo_excluir_album(identificador){
procedimentos_inicia_dialogo();
document.getElementById("div_excluir_album_" + identificador).style.display = "inline";
};
function procedimentos_inicia_dialogo(){
};
function adiciona_emoticon(contador){
document.getElementById("id_campo_envia_msn_chat").value += v_prefixo_emoticon + " (" + contador + ") ";
document.getElementById("id_campo_envia_msn_chat").focus();
};
function excluir_conta_usuario(){
var v_senha = document.getElementById("id_campo_senha_excluir_conta").value;
document.getElementById("id_campo_senha_excluir_conta").focus();
if(v_senha.length == 0){
return null;
};
$.post(v_pagina_acoes, {tipo_pagina_acao: 38,senha: v_senha}, function(retorno){
if(retorno == -1){
location.reload();
};
});
};
function carrega_feeds(){
if($("#id_div_feeds_usuario").length == 0){
return null;
};
$.post(v_pagina_acoes, {idproduto: v_idproduto, contador: v_contador, tipo_pagina_acao: 9}, function(retorno){
if(retorno == v_bkp_feeds_usuario){
return null;	
}else{
v_bkp_feeds_usuario = retorno;
};
if(retorno.length == 0){
return null;
}else{
v_contador += v_limit_query;
};
if(document.getElementById("id_div_feeds_usuario").innerHTML == null){
document.getElementById("id_div_feeds_usuario").innerHTML = retorno;
}else{
$(retorno).appendTo('#id_div_feeds_usuario');	
};
});
};
function sessao_idioma_atualizar(modo){
$.post(v_pagina_acoes, {modo: modo, tipo_pagina_acao: 6}, function(retorno){
if(v_uid == -1){
window.open(v_pagina_inicial, "_self");
}else{
window.open(v_pagina_inicial + "?uid=" + v_uid, "_self");
};
});
};
function logar_usuario(){
var email = document.getElementById("id_email_login").value;
var senha = document.getElementById("id_senha_login").value;
$.post(v_pagina_acoes, {tipo_pagina_acao: 2, email: email, senha: senha}, function(retorno){
if(retorno == 1){
if(v_uid == -1){
window.open(v_endereco_url_produto, "_self");
}else{
location.reload();
};
}else{
document.getElementById("id_mensagem_login_cadastro").innerHTML = retorno;
};
});
};
function recuperar_senha_usuario(){
var v_email = document.getElementById("id_campo_recupera_senha").value;
document.getElementById("id_campo_recupera_senha").value = "";
$.post(v_pagina_acoes, {email: v_email, tipo_pagina_acao: 37}, function(retorno){
document.getElementById("id_mensagem_recuperou_senha_usuario").style.display = "table";
document.getElementById("id_mensagem_recuperou_senha_usuario").innerHTML = retorno;
fechar_janela_mensagem_dialogo();
});
};
function notificacao_feeds(){
$.post(v_pagina_acoes, {tipo_pagina_acao: 10}, function(retorno){
if(parseInt(retorno) == -1){
document.getElementById("id_notifica_feeds").style.display = "none";
}else{
document.getElementById("id_notifica_feeds").style.display = "inline";
document.getElementById("id_notifica_feeds").innerHTML = retorno;
};
});
};
function carregar_publicacoes_gerais_etc(){
carrega_produtos();
carrega_feeds();
carrega_seguidores();
carrega_usuarios_chat();
carregar_relatorio_vendas(0);
detecta_resolucao_pagina();
};
function inicializa_paginacao_conteudo_site(){
window.clearInterval(timer_paginacao_conteudo);
v_contador_timer_paginacao = 0;
carregar_publicacoes_gerais_etc();
timer_paginacao_conteudo = setInterval(function(){
if(v_contador_timer_paginacao == 30){
v_contador_timer_paginacao = 0;
window.clearInterval(timer_paginacao_conteudo);
carregar_publicacoes_gerais_etc();
}else{
carregar_publicacoes_gerais_etc();
v_contador_timer_paginacao++;
};
}, 1000);
};
function inicializa_paginacao_conteudo_site_scrool(){
carregar_publicacoes_gerais_etc();
window.scrollTo(0, document.body.scrollHeight);
};
function carrega_produtos(){
if(v_pausar_carregar_produtos != 0){
return null;
};
$.post(v_pagina_acoes, {cat: v_categoria_produto, idproduto: v_idproduto, uid: v_uid, href: v_href, pesq: v_termo_pesquisa, contador: v_contador, tipo_pagina_acao: 4}, function(retorno){
if(v_bkp_carrega_produtos == retorno){
   return null;
}else{
   v_bkp_carrega_produtos = retorno;
};
if(v_modo_produtos == 0){
$(retorno).appendTo('#id_div_produtos_usuario');
return null;
};
if(retorno.length == 0){
return null;
};
v_contador += v_limit_query;
if(v_modo_resolucao == -1){
v_contador_seletor_carrega_produtos++;
switch(v_contador_seletor_carrega_produtos){
case 1:
$(retorno).appendTo('#id_div_produtos_usuario_div_1');
break;
case 2:
$(retorno).appendTo('#id_div_produtos_usuario_div_2');
v_contador_seletor_carrega_produtos = 0;
break;
};
}else{
$(retorno).appendTo('#id_div_produtos_usuario_div_1');
};
});
};
function excluir_imagem_produto(id){
pausa_carregamento_produtos(true);
$.post(v_pagina_acoes, {idimagem: id, tipo_pagina_acao: 36}, function(retorno){
document.getElementById("id_div_imagem_produto_" + id).style.display = "none";
fechar_janela_mensagem_dialogo();
});
};
function excluir_produto_usuario(id){
$.post(v_pagina_acoes, {idproduto: id, tipo_pagina_acao: 27}, function(retorno){
location.reload();
});
};
function visualizar_imagens_upload_postagem(evt) {
document.getElementById("div_imagens_pre_publicacao").style.display = "table";
var files = evt.target.files;
for(var i = 0, f; f = files[i]; i++) {
if(!f.type.match('image.*')) {
continue;
}
var reader = new FileReader();
reader.onload = (function(theFile) {
return function(e) {
var div = document.createElement('div');
div.innerHTML = ['<img class="classe_imagem_pre_upload_post" src="', e.target.result, '"/>'].join('');
document.getElementById('div_imagens_pre_publicacao').insertBefore(div, null);
};
})
(f);
reader.readAsDataURL(f);
}
}
function pausa_carregamento_produtos(modo){
if(modo == true || modo == 1){
v_pausar_carregar_produtos = 1;
}else{
v_pausar_carregar_produtos = 0;	
};
};
function seleciona_imagens_publicacao_usuario(){
document.getElementById('elemento_file_campo_publicar').addEventListener('change', visualizar_imagens_upload_postagem, false);
document.getElementById("div_imagens_pre_publicacao").innerHTML = "";
document.getElementById("elemento_file_campo_publicar").click();
};
function detecta_resolucao_pagina(){
if(v_permite_mobile == 0){
return null;
};
var largura = window.innerWidth;
$.post(v_pagina_acoes, {largura: largura, tipo_pagina_acao: 28}, function(retorno){
if(retorno == 1){
};
});
};
function carrega_seguidores(){
if($("#id_div_seguidores_usuario").length == 0){
return null;
};
$.post(v_pagina_acoes, {uid: v_uid, href: v_href, contador: v_contador, tipo_pagina_acao: 8}, function(retorno){
if(retorno == v_bkp_carrega_seguidores){
return null;	
}else{
v_bkp_carrega_seguidores = retorno;
};
if(retorno.length == 0){
return null;
}else{
v_contador += v_limit_query;
};
if(document.getElementById("id_div_seguidores_usuario").innerHTML == null){
document.getElementById("id_div_seguidores_usuario").innerHTML = retorno;
}else{
$(retorno).appendTo('#id_div_seguidores_usuario');	
};
});
};
function seguir_usuario(idusuario){
$.post(v_pagina_acoes, {uid: idusuario, tipo_pagina_acao: 7}, function(retorno){
location.reload();
});
};
function executa_som(som){
switch(som){
case 1:
var audio = new Audio(v_pasta_sons_sistema + 'lixeira.mp3');
break;
};
audio.play();
};
function carregar_relatorio_vendas(zerar){
if(zerar == 1){
v_contador = 0;
v_bkp_vendas_usuario = "";
document.getElementById("id_div_vendido_pagina_vendas").innerHTML = "";
};
if($("#id_div_vendido_pagina_vendas").length == 0){
return null;
};
tipo_relatorio = document.getElementById("id_campo_opcoes_vendas").value;
$.post(v_pagina_acoes, {tipo_relatorio: tipo_relatorio, contador: v_contador, tipo_pagina_acao: 22}, function(retorno){
if(retorno == v_bkp_vendas_usuario){
return null;	
}else{
v_bkp_vendas_usuario = retorno;
};
if(retorno.length == 0){
return null;
}else{
v_contador += v_limit_query;
};
if(document.getElementById("id_div_vendido_pagina_vendas").innerHTML == null){
document.getElementById("id_div_vendido_pagina_vendas").innerHTML = retorno;
}else{
$(retorno).appendTo('#id_div_vendido_pagina_vendas');	
};
});
};
function concluir_venda(id, idamigo, modo, quantidade){
$.post(v_pagina_acoes, {idproduto: id, modo: modo, idamigo: idamigo, quantidade: quantidade, tipo_pagina_acao: 23}, function(retorno){
location.reload();
});
};
function confirmar_pagamento(idproduto, idamigo){
$.post(v_pagina_acoes, {idproduto: idproduto, idamigo: idamigo, tipo_pagina_acao: 25}, function(retorno){
location.reload();
});
};
