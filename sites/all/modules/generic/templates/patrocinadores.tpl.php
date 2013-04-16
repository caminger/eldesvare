<?php // print_r($patrocinadores); ?>
<div id="aportantes">
    <div><h1>APORTANTES</h1></div>
    <?php foreach($patrocinadores as $pat): ?>
    <div class="patrocinador">
        <div class="img_creador">
            <?php $src = image_style_url("aportantes", $pat['user']->picture->uri); ?>
            <img src="<?php print $src; ?>" />
        </div>
        <div class="info_creador">
            <span class="nombre"><?php print $pat['user']->field_nombre_completo['und'][0]['value']; ?></span> <span class="ubicacion">(<?php print $pat['user']->field_ubicaci_n['und'][0]['value']; ?>)</span>
            <div class="fecha_aporte"><?php print date('F d',$pat['fecha']); ?></div>
            <p class="apoya"><?php print $pat['user']->field_nombre_completo['und'][0]['value']; ?> apoya <?php print $pat['cantidad']; ?> Cabezazos</p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
