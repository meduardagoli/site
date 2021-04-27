<?php

//gerasenha.php

$senha= 12345;
echo "senha não criptografada: $senha";
echo "<hr>";
$senhacriptografada = md5($senha);
echo "senha não criptografada: $senhacriptografada";