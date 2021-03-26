<?php
session_start();
include "header.php";
$freight_data = json_decode($_SESSION['freight_data'], true);
?>

<div class="inner-page-intro">
    <h4>Rastreamento de remesas</h4>
</div>

<img src="images/api/banner_rastreamento.jpg" width="1000" height="350" class="img-responsive" />

<div style="width:100%; padding: 35px; text-align:center">
    <h2 style="font-family: 'Montserrat', Arial; color: #d82029; font-weight: 600">RESULTADO DO RASTREAMENTO</h2>
    <?php foreach ($freight_data['data'] as $freight) : ?>
        <hr width="100%">
        <ul class="resultado_frete">
            <li><span class="frete_li">ID: </span><?php echo $freight['id']; ?></li>
            <li><span class="frete_li">CRIADO EM: </span><?php echo $freight['created_at']; ?></li>
            <li><span class="frete_li">ATUALIZADO EM: </span><?php echo $freight['updated_at']; ?></li>
            <li><span class="frete_li">LINK DO ANEXO: </span><a href="<?php echo $freight['image_url']; ?>" style="list-style-type: none;" target="blank">CLIQUE AQUI PARA BAIXAR O PDF</a></li>
            <li><span class="frete_li">ID DO FRETE: </span><?php echo $freight['freight']['id']; ?></li>
            <li><span class="frete_li">NÚMERO DO CTE: </span><?php echo $freight['freight']['cte_number']; ?></li>
            <li><span class="frete_li">CHAVE DO CTE: </span><?php echo $freight['freight']['cte_key']; ?></li>
            <li><span class="frete_li">NÚMERO DA NOTA: </span><?php echo $freight['freight']['draft_number']; ?></li>
        </ul>
    <?php endforeach; ?>
    <hr width="100%">
    <p style="margin-top: 20px;"> <a href="freight-form.php" class="button huge round red button_api">VOLTAR</a></p>
</div>

<?php include "footer.php"; ?>