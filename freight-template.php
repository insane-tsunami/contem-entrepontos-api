<?php
session_start();
include "header.php";
$freight_data = json_decode($_SESSION['freight_data'], true);
?>

<div class="inner-page-intro">
    <h4>Rastreamento de remesas</h4>
</div>

<?php
// [id] => 1150913
// [image_url] => https://eslcloud.s3.sa-east-1.amazonaws.com/entrepontos/active_storage/iwo8bVZfjmWJoGu6r6fVA6NN?response-content-disposition=inline%3B%20filename%3D%22CTE%20615.pdf%22%3B%20filename%2A%3DUTF-8%27%27CTE%2520615.pdf&response-content-type=application%2Fpdf&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJ3CMAACACKNEDO6A%2F20210326%2Fsa-east-1%2Fs3%2Faws4_request&X-Amz-Date=20210326T031213Z&X-Amz-Expires=604800&X-Amz-SignedHeaders=host&X-Amz-Signature=0f0af32cbf028b1e713dcd80a1104096efda0188c580e5dd9fae72237b0a0393
// [created_at] => 2020-12-28T10:57:27.703-03:00
// [updated_at] => 2020-12-29T19:00:55.087-03:00
// [freight] => Array
//     (
//         [id] => 3447373
//         [cte_number] => 615
//         [cte_key] => 35201204142031000138570920000006151814690031
//         [draft_number] => 
//     )
?>

<img src="images/api/banner_rastreamento.jpg" width="1000" height="350" class="img-responsive" />

<div style="width:100%; padding: 35px; text-align:center">
    <h2 style="font-family: 'Montserrat', Arial; color: #d82029; font-weight: 600">RESULTADO DA BUSCA</h2>
    <?php foreach ($freight_data['data'] as $freight) : ?>
        <hr width="100%">
        <ul class="resultado_frete">
            <li><span class="frete_li">ID: </span><?php echo $freight['id']; ?></li>
            <li><span class="frete_li">CRIADO EM: </span><?php echo $freight['created_at']; ?></li>
            <li><span class="frete_li">ATUALIZADO EM: </span><?php echo $freight['updated_at']; ?></li>
            <li><span class="frete_li">LINK DO ANEXO: </span><a href="<?php echo $freight['image_url']; ?>" style="list-style-type: none;">CLIQUE AQUI PARA BAIXAR O PDF</a></li>
            <li><span class="frete_li">ID DO FRETE: </span><?php echo $freight['freight']['id']; ?></li>
            <li><span class="frete_li">NÚMERO DO CTE: </span><?php echo $freight['freight']['cte_number']; ?></li>
            <li><span class="frete_li">CHAVE DO CTE: </span><?php echo $freight['freight']['cte_key']; ?></li>
            <li><span class="frete_li">NÚMERO DA NOTA: </span><?php echo $freight['freight']['draft_number']; ?></li>
        </ul>
    <?php endforeach; ?>
    <hr width="100%">
</div>

<?php include "footer.php"; ?>