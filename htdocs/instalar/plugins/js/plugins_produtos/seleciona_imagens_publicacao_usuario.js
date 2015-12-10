
// seleciona as imagens da publicacao do usuario
function seleciona_imagens_publicacao_usuario(){

// adiciona o evento
document.getElementById('elemento_file_campo_publicar').addEventListener('change', visualizar_imagens_upload_postagem, false);

// limpa imagens antigas
document.getElementById("div_imagens_pre_publicacao").innerHTML = "";

// simula click
document.getElementById("elemento_file_campo_publicar").click();

};
