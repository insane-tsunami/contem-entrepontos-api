<?php

//iremos declarar as variaveis que recebemos pelo método post

//em alguns servidores nem precisamos declarar, depende do register_global=on ou =off

$nome_empresa=$_POST[nome_empresa];

$contato=$_POST[contato];

$telefone=$_POST[telefone];

$email=$_POST[email];

$ctrc=$_POST[ctrc];

//agora vamos enviar todos esses dados usando a função mail

mail("comercial@entrepontos.com.br","

Nome da empresa: $nome_empresa

Contato: $contato

Telefone: $telefone

Email: $email

CTRC: $ctrc","FROM:$nome_empresa<$email>");



echo "Sua mensagem foi enviada com sucesso!"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem 


?>