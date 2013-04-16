<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<script type="text/javascript" src="http://www.eldesvare.com/sites/all/themes/desvare/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	a = "Scroll";
</script>
<?php 
$node = node_load($output);

$view = node_view($node);
 print "Calificación: ".render($view['rate_calificaci_n']); 

if(arg(0) == "categorias" || arg(0) == "resultados-de-busqueda"){
print l(t("Más detalles"),"node/".$output);
}
else{
print l(t("Ver más"),"node/".$output);
}


//print $output; 

?>
