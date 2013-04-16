<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <div class="orden_resultados">
	<span>Ordenar por: </span>
	<a href="javascript:" class="ord_calif">Calificaci&oacute;n</a> | 
	<a href="javascript:" class="ord_nom">Nombre</a> | 
	<!--<a href="javascript:" class="ord_ser">Servicios</a>-->
  </div>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>
<script>
jQuery(document).ready(function (){
	jQuery(".ord_calif").live('click', function(){
		jQuery("#edit-sort-by option[value=vote]").attr("selected",true);
		jQuery("#edit-submit-resultado-de-busuqeda").click();
	});
	jQuery(".ord_nom").live('click', function(){
		jQuery("#edit-sort-by option[value=title]").attr("selected",true);
		jQuery("#edit-submit-resultado-de-busuqeda").click();
	});
	jQuery(".ord_ser").live('click', function(){
		jQuery("#edit-sort-by option[value=field_servicios_tid]").attr("selected",true);
		jQuery("#edit-submit-resultado-de-busuqeda").click();
	});
});	
</script>