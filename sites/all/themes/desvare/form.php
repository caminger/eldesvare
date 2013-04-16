<div class="block block-search grid16-11 first  odd" id="block-search-form">
  <div class="gutter inner clearfix">
            
    <div class="content clearfix">
      <form accept-charset="UTF-8" id="search-block-form" method="get" action="/resultados-de-busqueda" class="search-form" target="_self"><div><div class="container-inline">
      <h2 class="element-invisible">Formulario de búsqueda</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label for="edit-search-block-form--2">¡En qué estás varado? </label>
 <input type="text" maxlength="128" size="15" value="" name="field_informaci_n_empresa_descrr" id="edit-search-block-form--2" class="custom-search-default-value custom-search-box form-text">
</div>
<fieldset id="edit-popup" class="custom_search-popup form-wrapper custom_search-processed" style="display: none;"><div class="fieldset-wrapper"></div><a href="#" class="custom_search-popup-close">Close</a></fieldset>
<div class="form-item form-type-select form-item-custom-search-vocabulary-2">
  <label for="edit-custom-search-vocabulary-2" name="categoria">Categorías </label>
 
  <?php
   $categorias = taxonomy_get_tree(2); 
   $html = '<select name="categoria" id="edit-custom-search-vocabulary-2" class="custom-search-selector custom-search-vocabulary form-select"><option>Seleccione uno</option>';
   foreach ($categorias as $categoria){var_dump($categoria);
       $href = drupal_lookup_path('alias','taxonomy/term/'.$categoria->tid);
       $html.= '<option value="'.$categoria->tid.'">'.$categoria->name.'</option>';
   }
   $html .= '</select>';
   echo $html;
?>
</div>
<div class="form-item form-type-select form-item-custom-search-vocabulary-10">
  <label for="edit-custom-search-vocabulary-10" name="ciudad">Cuidades </label>
  <?php
   $ciudades = taxonomy_get_tree(10); 
   $html_ciudad = '<select name="ciudad" id="edit-custom-search-vocabulary-10" class="custom-search-selector custom-search-vocabulary form-select"><option>Seleccione uno</option>';
   foreach ($ciudades as $ciudad){
       $href = drupal_lookup_path('alias','taxonomy/term/'.$ciudad->tid);
       $html_ciudad.= '<option value="'.$ciudad->tid.'">'.$ciudad->name.'</option>';
   }
   $html_ciudad .= '</select>';
   echo $html_ciudad;
?>
  <!--<select name="ciudad" id="edit-custom-search-vocabulary-10" class="custom-search-selector custom-search-vocabulary form-select"><option selected="selected" value="c-all">Todas</option><option value="35"> Armenia</option><option value="27"> Barranquilla</option><option value="17"> Bogotá</option><option value="33"> Bucaramanga</option><option value="24"> Cali</option><option value="36"> Cartagena</option><option value="28"> Ibague</option><option value="34"> Manizales</option><option value="25"> Medellín</option><option value="31"> Pereira</option></select>-->
</div>
<div id="edit-actions" class="form-actions form-wrapper"><input type="submit" class="form-submit" value="Buscar" name="" id="edit-submit"></div>
<input type="hidden" value="form-bep1MHvM97dCwbpg9gJfgRkFDKUTCwOVk8FhKs7RcJQ" name="">
<input type="hidden" value="" name="">
<input type="hidden" value="" name="" class="default-text">
</div>
</div></form>    </div>
  </div><!-- /block-inner -->
</div>
