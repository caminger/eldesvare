<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
    <?php foreach ($widgets as $id => $widget): ?>
      <div id="<?php print $widget->id; ?>-wrapper" class="views-exposed-widget views-widget-<?php print $id; ?>">
        <?php if (!empty($widget->label)): ?>
          <label for="<?php print $widget->id; ?>">
            <?php print $widget->label; ?>
          </label>
        <?php endif; ?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php print $widget->operator; ?>
          </div>
        <?php endif; ?>
        <div class="views-widget">
          <?php print $widget->widget; ?>
        </div>
        <?php if (!empty($widget->description)): ?>
          <div class="description">
            <?php print $widget->description; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
    <?php if (!empty($sort_by)): ?>
      <div class="views-exposed-widget views-widget-sort-by">
        <?php print $sort_by; ?>
      </div>
      <div class="views-exposed-widget views-widget-sort-order">
        <?php print $sort_order; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($items_per_page)): ?>
      <div class="views-exposed-widget views-widget-per-page">
        <?php print $items_per_page; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($offset)): ?>
      <div class="views-exposed-widget views-widget-offset">
        <?php print $offset; ?>
      </div>
    <?php endif; ?>
	<div class="opciones mas"><a href="javascript:" class="mas_opc">M&aacute;s opciones</a></div>
	<div class="opciones menos"><a href="javascript:" class="menos_opc">Menos opciones</a></div>
    <div class="views-exposed-widget views-submit-button">
      <?php print $button; ?>
    </div>
    <?php if (!empty($reset_button)): ?>
      <div class="views-exposed-widget views-reset-button">
        <?php print $reset_button; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<script>
jQuery(document).ready(function (){
	jQuery('.mas_opc').live('click', function(){
		jQuery(this).hide();
		jQuery('#edit-field-parqueadero-value-wrapper').slideDown('fats', function(){
			jQuery('#edit-field-servicios-tid-wrapper').slideDown('fats', function(){
				jQuery('#edit-field-tipo-establecimiento-tid-wrapper').slideDown('fats', function(){
					jQuery('#edit-field-sucursales-empresa-value-wrapper').slideDown('fats', function(){
						jQuery('#edit-field-categorias-tid-wrapper').slideDown('fats', function(){
							jQuery('#edit-title-wrapper').slideDown('fats', function(){
								jQuery('.wiews-widget-sort-by').slideDown('fats', function(){
									jQuery('.views-widget-sort-order').slideDown('fats');
								});
							});
						});
					});
				});
			});
		});
		jQuery(".opciones.menos").show();
	});
	jQuery('.menos_opc').live('click', function(){
		jQuery(this).hide();
		jQuery('#edit-field-parqueadero-value-wrapper').slideUp('fats', function(){
			jQuery('#edit-field-servicios-tid-wrapper').slideUp('fats', function(){
				jQuery('#edit-field-tipo-establecimiento-tid-wrapper').slideUp('fats', function(){
					jQuery('#edit-field-sucursales-empresa-value-wrapper').slideUp('fats', function(){
						jQuery('#edit-field-categorias-tid-wrapper').slideUp('fats', function(){
							jQuery('#edit-title-wrapper').slideUp('fats', function(){
								jQuery('.wiews-widget-sort-by').slideUp('fats', function(){
									jQuery('.views-widget-sort-order').slideUp('fats');
								});
							});
						});
					});
				});
			});
		});
		jQuery(".opciones.mas").show();
	});
});	
</script>