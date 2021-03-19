<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocorrências</title>
</head>

<body>

    <form name="formulario" id="formulario" action="occurrences-api.php" method="post">

        <p>
            <label for="token" class="labelToken">token de acesso: </label>
            <input type="text" name="token" id="token" class="token">
        </p>

        <p>
            <label for="parametro" class="labelParametro">parametro: </label>
            <select name="parametro" id="parametro" class="parametro" multiple="multiple">
                <option value="since">since</option>
                <option value="start">start</option>
                <option value="invoice_key">invoice_key</option>
                <option value="cte_key">cte_key</option>
                <option value="reference_number">reference_number</option>
                <option value="manifest_id">manifest_id</option>
                <option value="occurrence_code">occurrence_code</option>
                <option value="recipient_document">recipient_document</option>
                <option value="invoice_number">invoice_number</option>
            </select>
        </p>

        <p>
            <label for="valor">valor do parametro: </label>
            <input type="text" name="valor" id="valor" class="valor">
        </p>

        <p>
            <label for="tipo">tipo de retorno: </label>
            <input type="radio" name="tipo" id="tipo" value="json">
            <label for="json">json</label>
            <input type="radio" name="tipo" id="tipo" value="html" checked="checked">
            <label for="html">html</label>
        </p>

        <p>
            <label for="enviar"></label>
            <button type="submit">enviar</button>
        </p>
    </form>

</body>

</html>