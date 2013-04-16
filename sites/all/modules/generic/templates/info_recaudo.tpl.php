<?php //print_r($info); ?>
<div class="aportantes">
    <h1 class="big"><?php print $info['total_aportantes']; ?></h1>
    <p class="label">APORTANTES</p>
</div>
<div class="recaudado">
    <h1 class="big">$<?php print $info['recaudado']; ?></h1>
    <p class="label">OBTENIDOS DE $<?php print $info['meta'][0]['value']; ?> COP</p>
</div>
<div class="faltan">
    <h1 class="big"><?php print $info['dias_quedan']; ?></h1>
    <p class="label">D&Iacute;AS FALTAN</p>
</div>
<div class="inicio">
    <h1 class="small">Este cabezazo se inici&oacute; el</h1>
    <p class="label_small"><?php print date('d \d\e F \d\e Y', $info['total_aportantes']); ?></p>
</div>
