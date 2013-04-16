<?php 
global $user;
?>
<div class="empresasfull">
  <div id="colemp1">
    <h1><?php print $node->title;?></h1>
    <div id="emplogo">
        <?php print render($content['field_logo']); ?>
    </div>
    <div id="empdirs">
      <div id="empdir"><?php print ($node->field_muestradire['und'][0]['value'])?></div>
      <?php if(!empty($content['field_barrio'])){?>
      <div id="empbarrio">
          <?php
            print render($content['field_barrio']); 
        ?>
      </div>
      <?php }?>
      <div id="empciudad">
         <?php print render($content['field_ciudad']); ?></div>
         <div class="webpage"><div id="empweb">
		 <?php ($link2=$node->field_web['und'][0]['value']);?>
      
      
      <?php 
      $link1='http://';
	  $link3=$link1.$link2;
      ?>
      
	<a href="<?php print $link3;?>" target="_blank" ><?php print $link2;?> </a> </div></div>
	
	
		<div id="empciudad" class="empciudad2" align="center">
        <?php if($user->roles[3] || $user->roles[5] || $user->roles[4]){
			  
			 print $node->nid.'<br />';
			 print ($node->field_contacto['und'][0]['value']);
			
			} 
		?>
      </div>
	
      <div id="empcalifica">
          <p><strong>Calificaci&oacute;n</strong></p>
          <?php print render($content['rate_calificaci_n']); ?>
      </div>
      </br>
      
      
    </div>
   
    <div id="empicollamar">
		<?php if(user_is_logged_in()){
			$mensaje = $user->uid;
		}else{
			$mensaje = "Para poder Llamar debe ser un usuario registrado.";
		} ?>
		<img src="/sites/default/files/img.png" rel="<?php print $node->nid; ?>" id="<?php print $mensaje; ?>" onClick="enlazar_llamada('<?php print $mensaje; ?>', <?php print $node->nid; ?>)" class="llamar"/>
	</div>
    <div id="emplinks">
		Compartir
		<a href="javascript:void()" onclick="javascript:window.open('http://www.facebook.com/sharer.php?u='+window.top.location.href+'&t=<?php echo drupal_get_title(); ?>', 'VentanaCompartirFacebook','toolbar=0, status=0, width=650, height=450');">
		<img src="/sites/all/themes/desvare/images/ico.fb..png" /></a>
		<a href="javascript:void()" onclick="javascript:window.open('https://twitter.com/intent/tweet?text=<?php echo drupal_get_title(); ?>&url='+window.top.location.href+'&via=eldesvare', 'VentanaTwitter','toolbar=0, status=0, width=650, height=450');">
		<img src="/sites/all/themes/desvare/images/ico.tw..png" /></a>
		<a href="javascript:void()" onclick="javascript:jQuery('#da2a_1').mouseover(),jQuery('.a2a_i_email_bw').click()">
		<img src="/sites/all/themes/desvare/images/ico.mail..png" /></a>
        <?php print str_replace('width="171" height="16"','width="13" height="13"',render($content['links']));?>
		
    </div>
    <div class="empdatos bl1">
        <?php
            print render($content['field_servicios']); 
        ?>
    </div>
    <div class="empdatos bl2">
       <?php
            print render($content['field_rango_de_precios']); 
        ?>
    </div>
    <div class="empdatos bl3">
        <?php
            print render($content['field_formas_pago']); 
        ?>
    </div>
    <div class="empdatos bl4">
        <?php
            print render($content['field_atencion']); 
        ?>
    </div>
    <div class="empdatos bl5">
        <?php
            print render($content['field_parqueadero']); 
        ?>
    </div>
    <div  class="empdatos bl6" >
	<div    id="empotros" >
        <h3>Otros  servicios:</h3>
        <?php
            print render($content['field_otros']); 
        ?>
    </div>
    </div>
    <div id="empsomos">
      <h3>Tipo de establecimiento:</h3>
        
        <?php
            print render($content['field_tipo_establecimiento']); 
        ?>
    </div>
    
     <div class="resources">
    <div   id="emplogo2">
    <h3>Galería de Imágenes:</h3>
     <?php
	 $laruta="http://www.eldesvare.com/sites/all/themes/desvare/images/gallery_icon.png";
	  if($node->field_fotos): ?>
          <a class="gallery" href="<?php print file_create_url($node->field_fotos['und'][0]['uri']); ?>" rel="lightshow[gallery][<?php print $node->field_fotos['und'][0]['title']; ?>]"><?php  $node->field_fotos['und'][0]['title']; ?> <img src="<?php echo $laruta;?>" > </a>
          <div class="images">
            <?php foreach($node->field_fotos['und'] as $image): ?>
            <a href="<?php print file_create_url($image['uri']); ?>" rel="lightshow[gallery][<?php  print $image['title']; ?>]"></a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
       
</div>
         </div>
    
    <div id="empsomos">
        <h3>Información de la empresa:</h3>
        <?php print render($content['field_informaci_n_empresa_descrr'])?>
    </div>
    <div id="empcomentar">
    <?php print render($content['comments'])?>
    
    </div>
    
    <div id="empcomentariosbefore">
	
   <script>
			jQuery('.comment-add').attr('style','display:none');
		</script>
    </div>
  </div>
  <!--colemp1 -->
  <div id="colemp2">
	<p>Ubicaci&oacute;n</p>
    <div id="empmapa">
	
        <?php print render($content['field_direccion']);?>
        
    </div>
    <br/>
	<?php
		$block = block_load('block', '12');
		$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
		print $output;
	?>
  </div>
  <!--colemp2 --> 
</div>
