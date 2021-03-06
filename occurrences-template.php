<?php
session_start();
include "header.php";
$occurrences_data = json_decode($_SESSION['occurrences_data'], true);
?>

<div class="inner-page-intro">
    <h4>Rastreamento de remesas</h4>
</div>
<img src="images/api/banner_rastreamento.jpg" width="1000" height="350" class="img-responsive" />

<div style="width:100%; padding: 35px; text-align:center">
    <h2 style="font-family: 'Montserrat', Arial; color: #d82029; font-weight: 600">RESULTADO DO RASTREAMENTO</h2>
    <?php foreach ($occurrences_data['data'] as $occurrence) : ?>
        <hr width="100%">
        <h2 style="font-family: Helvetica, Arial, sans-serif; text-align:left; padding-top: 20px; margin-bottom: 5px">OCORRÊNCIA</h2>
        <ul class="resultado_frete">
            <li><span class="frete_li">RECEBIDO POR: </span><?php echo $occurrence['receiver']; ?></li>
            <li><span class="frete_li">NÚMERO DO DOCUMENTO: </span><?php echo $occurrence['document_number']; ?></li>
            <li><span class="frete_li">COMENTÁRIO: </span><?php echo $occurrence['comments']; ?></li>
            <li><span class="frete_li">DATA DA OCORRÊNCIA: </span><?php echo $occurrence['occurrence_at']; ?></li>
            <li><span class="frete_li">CRIADO EM: </span><?php echo $occurrence['created_at']; ?></li>
            <li><span class="frete_li">ATUALIZADO EM: </span><?php echo $occurrence['updated_at']; ?></li>
            <li><span class="frete_li">NÚMERO DA NOTA: </span><?php echo $occurrence['invoice']['number']; ?></li>
            <li><span class="frete_li">TIPO DA NOTA: </span><?php echo $occurrence['invoice']['type']; ?></li>
        </ul>
        <h2 style="font-family: Helvetica, Arial, sans-serif; text-align:left; padding-top: 20px; margin-bottom: 5px">FRETE</h2>
        <ul class="resultado_frete">
            <li><span class="frete_li">NÚMERO DO CTE: </span><?php echo $occurrence['freight']['cte_number']; ?></li>
            <li><span class="frete_li">CHAVE DO CTE: </span><?php echo $occurrence['freight']['cte_key']; ?></li>
            <li><span class="frete_li">PREVISÃO DE ENTREGA: </span><?php echo $occurrence['freight']['delivery_prediction_at']; ?></li>
            <li><span class="frete_li">STATUS: </span><?php echo $occurrence['occurrence']['trigger']; ?></li>
            <li><span class="frete_li">DESCRIÇÃO: </span><?php echo $occurrence['occurrence']['description']; ?></li>
        </ul>
    <?php endforeach; ?>
    <hr width="100%">
    <p style="margin-top: 20px;"> <a href="occurrences-form.php" class="button huge round red button_api">VOLTAR</a></p>
</div>

<?php include "footer.php"; ?>