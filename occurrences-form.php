<?php include "header.php"; ?>

<div class="inner-page-intro">
    <h4>Rastreamento de remesas</h4>
</div>

<img src="images/api/banner_rastreamento.jpg" width="1000" height="350" class="img-responsive" />

<div style="width:100%; padding: 35px; text-align:center">
    <h2 style="font-family: 'Montserrat', Arial; color: #d82029; font-weight: 600">RASTREIE AQUI A SUA ENCOMENDA</h2>
    <P style="font-family: Arial; font-size: 13px; color: #777; font-weight: 600">PREENCHA OS CAMPOS ABAIXO E ACOMPANHE O STATUS DA SUA ENCOMENDA</P>
    <p>
    <form name="formulario" id="formulario" action="occurrences-api.php" method="post">

        <input type=hidden name="tipo" id="tipo" value="html">

        <input type="text" name="recipient_document" id="recipient_document" class="api_form" placeholder="INSIRA O CPF OU CNPJ">

        <select name="parametro" id="parametro" class="parametro">
            <option>TIPO DE RASTREAMENTO</option>
            <option value="invoice_number">NOTA</option>
            <option value="cte_key">CHAVE DO CTE</option>
        </select>

        <input type="text" name="valor" id="valor" class="api_form" placeholder="INSIRA O NÚMERO">
        <p style="margin-top: 15px;">
            <button class="button huge round red button_api">RASTREAR</button>
        </p>
    </form>
    </P>
</div>

<?php include "footer.php"; ?>