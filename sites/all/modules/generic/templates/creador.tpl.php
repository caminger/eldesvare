<?php //print_r($creador); ?>

<div id="creadores">
    <div><h1>El CREADOR</h1></div>
    <div class="creador">
        <div class="img_creador">
            <?php $src = image_style_url("creadores", $creador->picture->uri); ?>
            <div class="ctn_img"><img src="<?php print $src; ?>" /></div>
            <div class="redes">
                <span>TW</span>
                <span>FB</span>
            </div>
        </div>
        <div class="info_creador">
            <h2 class="nombre"><?php print $creador->field_nombre_completo['und'][0]['value']; ?></h2>
            <div class="biografia"><?php print $creador->field_biograf_a_usuario['und'][0]['value']; ?></div>
            <p class="envias"><a href="/messages/new"><img src="/themes/bartik/images/btn-enviar_msj.png" /></a></p>
        </div>
    </div>
</div>
