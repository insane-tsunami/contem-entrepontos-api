<?php

//iremos declarar as variaveis que recebemos pelo método post

//em alguns servidores nem precisamos declarar, depende do register_global=on ou =off

$solicitacao=$_POST[solicitacao];

$nome=$_POST[nome];

$email=$_POST[email];

$telefone=$_POST[telefone];

$empresa=$_POST[empresa];

$departamento=$_POST[departamento];

$endereco=$_POST[endereco];

$bairro=$_POST[bairro];

$cidade=$_POST[cidade];

$estado=$_POST[estado];

$envio=$_POST[envio];

$cidade_destino=$_POST[cidade_destino];

$quantidade=$_POST[quantidade];

$peso=$_POST[peso];

$altura=$_POST[altura];

$largura=$_POST[largura];

$comprimento=$_POST[comprimento];

$data_coleta=$_POST[data_coleta];

$horario=$_POST[horario];

$material=$_POST[material];

//agora vamos enviar todos esses dados usando a função mail

//mail("comercial@entrepontos.com.br","$solicitacao","

mail("marcelo@interupnet.com.br","$solicitacao","

Nome: $nome

Email: $email

Telefone: $telefone

Empresa: $empresa

Departamento: $departamento

Endereco: $endereco

Bairro: $bairro

Cidade: $cidade

Estado: $estado

Envio: $envio

Cidade destino: $cidade_destino

Quantidade: $quantidade

Peso: $peso

Altura: $altura

Largura: $largura

Comprimento: $comprimento

Data da coleta: $data_coleta

Horário: $horario

Necessita material: $material","FROM:$nome<$email>");

echo "Sua mensagem foi enviada com sucesso!"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem 

?><!doctype html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<title>EntrePontos Express - Transporte de Cargas Aéreo Para Todo o Território Nacional</title>
<meta name="description" content="EntrePontos Express - Transporte de Cargas Aéreo Para Todo o Território Nacional"/>

<link rel="shortcut icon" type="image/gif" href="images/favicon.html"/>

<link rel="stylesheet" id="skins-switcher" href="css/style.css" type="text/css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Cambo' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28862576-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
  <!-- Google Code for contato Conversion Page -->
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/937789822/?label=rdM5CPXZvWQQ_pKWvwM&amp;guid=ON&amp;script=0"/>

	<p style="text-align: center; font-size: 20px; padding-top: 150px; color: #FFF;">Obrigado <?php echo $nome; ?>, sua <?php echo $solicitacao; ?> foi enviada com sucesso!</p>

	<script>
		setTimeout(function(){
			window.location.replace("http://www.entrepontos.com.br/");
		}, 5000);
	</script>
</body>
</html>
