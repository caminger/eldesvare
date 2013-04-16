<?php foreach($info as $data): ?>
    <div class="insentivo">
        <div class="cantidad"><?php print $data['cantidad']; ?></div>
        <div class="valor">APORTANTES DE $<?php print $data['valor']; ?> O M&Aacute;S:</div>
        <div class="desc">Recibir&aacute;n <?php print $data['recibiran']; ?></div>
    </div>
    <div class="fecha">
        <div class="label">Fecha de entrega estimada</div>
        <div class="date"><?php print $data['fecha'][0]; ?></div>
    </div>
<?php endforeach; ?>
<div class="sombra"></div>
