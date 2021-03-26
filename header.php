<?php $URL = basename($_SERVER['SCRIPT_NAME']); ?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>EntrePontos Express - Transporte de Cargas Aéreo Para Todo o Território Nacional</title>
<meta name="description" content="EntrePontos Express - Transporte de Cargas Aéreo Para Todo o Território Nacional"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/gif" href="images/favicon.html"/>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" id="skins-switcher"/>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Cambo' type='text/css'>
<link rel="stylesheet" href="css/style-switcher.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/colorpicker.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="css/responsiveslides.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css"/>
<link rel="stylesheet" href="css/api.css" type="text/css"/>
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28862576-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<?php
	if($URL == "cotacao.php"){
?>
<style type="text/css">
	.one-third {
    	width: 290px;
    	float: left;
	}
</style>
<?php } ?>
</head>
<body>
<div class="container">
	<div id="header">
		<a id="logo" title="Homepage" href="index.php"></a>

		<div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">Menu</button>
	    </div>

		<nav role="navigation">
	        <div id="navbar" class="navbar-collapse collapse">
				<div id="main_navigation" class="main-menu ">
					<ul class="nav navbar-nav">
						<li><a href="index.php" title="Home" <?php if($URL == "index.php"){ echo 'class="ativo"'; } ?>>Home </a></li>

						<li><a href="empresa.php" title="Empresa" <?php if($URL == "empresa.php"){ echo 'class="ativo"'; } ?>>Empresa</a></li>

			            <li><a href="servicos.php" title="Serviços" <?php if($URL == "servicos.php"){ echo 'class="ativo"'; } ?>>Serviços</a></li>

			            <li><a href="cotacao.php" title="Cotação e Coleta" <?php if($URL == "cotacao.php"){ echo 'class="ativo"'; } ?>>Cotação e Coleta</a></li>

			            <li><a href="rastreamento/api/occurrences-form.php" title="Rastreamento" <?php if($URL == "rastreamento/api/occurrences-form.php"){ echo 'class="ativo"'; } ?>>Rastreamento</a></li>

						<li><a href="contato.php" title="Contato" <?php if($URL == "contato.php"){ echo 'class="ativo"'; } ?>>Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>