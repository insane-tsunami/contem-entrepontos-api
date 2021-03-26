<?php include "header.php";?>

	<div class="inner-page-intro">
		<h4>Rastreamento de remesas</h4>
	</div>

	<img src="images/api/banner_rastreamento.jpg" width="1000" height="350" class="img-responsive" />

	<div style="width:100%; padding: 35px; text-align:center">
    	<h2 style="font-family: 'Montserrat', Arial; color: #d82029; font-weight: 600">PREENCHA OS CAMPOS ABAIXO</h2>
		<p>
		<form name="formulario" id="formulario" action="freight-api.php" method="post">

			<input type="text" name="recipient_document" id="" class="api_form" placeholder="INSIRA O CPF OU CNPJ">

			<select name="parametro" id="parametro" class="parametro">
				<option>TIPO DE RASTREAMENTO</option>
				<option value="invoice_number">NOTA</option>
				<option value="cte_key">CHAVE DO CTE</option>
			</select>

			<input type="text" name="valor" id="valor" class="api_form" placeholder="INSIRA O NÚMERO">
			<p style="margin-top: 15px;">
			<button  class="button huge round red button_api">RASTREAR</button>
			</p>
		</form>
		</P>
	</div>

<?php include "footer.php";?>