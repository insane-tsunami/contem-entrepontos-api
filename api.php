<?php include "header.php";?>

	<div class="inner-page-intro">
		<h4>Rastreamento de remesas</h4>
	</div>

	<img src="images/api/banner_rastreamento.jpg" width="1000" height="350" class="img-responsive" />

	<div style="width:100%; padding: 35px; text-align:center">
    	<h2 style="font-family: 'Montserrat', Arial; color: #d82029; font-weight: 600">PREENCHA OS CAMPOS ABAIXO</h2>
		<p>
		<form name="formulario" id="formulario" action="consultaHtml.php" method="post">
			<select name="parametro" id="parametro" class="parametro">
                <option value="invoice_key">BUSCAR POR NOTA</option>
                <option value="cte_key">BUSCAR POR CTE</option>
            </select>
			<input type="text" name="valor" id="valor" class="api_form" placeholder="INSIRA O NÚMERO">
			<input type="text" name="token" id="token" class="api_form" placeholder="TOKEN">
		</p>
			<button  class="button huge round red button_api">Verificar</button>
		<P>
		</form>
		</P>
	</div>

<?php include "footer.php";?>