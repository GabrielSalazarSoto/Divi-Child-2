<?php
header ('HTTP/1.1 301 Moved Permanently');
if(ICL_LANGUAGE_CODE=="en"){
  header ('Location: /resume/'.$post->post_name);
}else{
  header ('Location: /cv/'.$post->post_name);
}
?>
