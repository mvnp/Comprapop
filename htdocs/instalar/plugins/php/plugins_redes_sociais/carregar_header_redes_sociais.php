<?php

// carregar header redes sociais
function carregar_header_redes_sociais(){

// valida configuracao
if(CONFIG_HABILITA_SOCIAL == false){

// retorno nulo
return null;

};

// codigos do facebook
$codigo_facebook = "

<div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

";

// codigo do google plus
$codigo_google_plus = "

<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

";

// codigo html
$codigo_html = "
$codigo_facebook
$codigo_google_plus
";

// retorno
return $codigo_html;

};

?>