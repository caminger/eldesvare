
jQuery(document).ready(function (){
	crearLightBox();
	jQuery('.form-item-field-telefono-und-0-value label span').hide();
	jQuery('.views-field-field-icono a').click(function(e){
		e.preventDefault();
		var id = jQuery(this).parent().attr('rel');
		window.location = 'http://eldesvare.com/resultados-de-busqueda?categoria='+id;
	});

	jQuery('.nice-menu-show-title').html('<a href="/categorias">'+jQuery('.nice-menu-show-title').html()+'</a>');

	var categoria = gup('categoria');
	var ciudad = gup('ciudad');
	var query = gup('field_clave_value');
    var id = gup('name');

	
if(query.leng =!""){
jQuery.post('http://www.eldesvare.com/sites/all/themes/desvare/js/comprobar.php', {'query':query,'id':id});

 //jQuery.post('http://181.48.28.165/openc3/modules/client_custom/eldesvare/comprobar.php', {'query':query});
}
	
	jQuery('#edit-field_clave-wrapper').hide();
	
	jQuery('.id_categoria').each(function(){
		this.style.display="none";
		this.parentNode.parentNode.parentNode.children[0].children[0].children[0].href = "/resultados-de-busqueda?categoria="+this.innerHTML;
		this.parentNode.parentNode.parentNode.children[1].children[0].children[0].href = "/resultados-de-busqueda?categoria="+this.innerHTML;
	});
	jQuery('div[rel]').each(function(){this.children[0].href="/resultados-de-busqueda?categoria="+this.getAttribute('rel');});
	
	jQuery("#edit-field-parqueadero-value-wrapper").html(jQuery("#edit-field-parqueadero-value-wrapper").html()+"<div class='mas_opciones' >M&aacute;s opciones...</div>");
	//jQuery(".mas_opciones").onclick();
	
	jQuery('li[class*="menu-path-taxonomy-term"]').each(function(){this.children[0].href='/resultados-de-busqueda?categoria='+this.className.split('menu-path-taxonomy-term-')[1].split(' ')[0];});

	if(categoria.length >0 || ciudad.length >0 || query.length >0){
		jQuery('#edit-field-atencion-tid-all').attr('checked',true);
		jQuery('#edit-field-formas-pago-tid-1').attr('checked',false);
		jQuery("#edit-field-rango-de-precios-tid option[value='All']").attr("selected", "selected");
		if(categoria.length >0){
			if(categoria == "Seleccione+uno")categoria = 'All';
			jQuery("#edit-field-categorias-tid option[value='"+categoria+"']").attr("selected", "selected");
			jQuery("#edit-custom-search-vocabulary-2 option[value='"+categoria+"']").attr("selected", "selected");
		}
		if(ciudad.length >0){
			jQuery("#edit-field-ciudad-tid option[value='"+ciudad+"']").attr("selected", "selected");
			jQuery("#edit-custom-search-vocabulary-10 option[value='"+ciudad+"']").attr("selected", "selected");
		}
		if(query.length >0){
			jQuery('#edit-title-wrapper input').val(query);
			jQuery('#edit-search-block-form--2').val(query);
		}
		//if(query.length >0)jQuery("#edit-field-categorias-tid option[value='"+categoria+"']").attr("selected", "selected");
		jQuery("#edit-submit-resultado-de-busuqeda").click();
	}

	jQuery('#user-register-form').submit(function(e){
		return revisa();
	});
	
	jQuery('#empresa-node-form').submit(function(e){
		return revisa_empresa();
	});
	
	function revisa_empresa(){
		var valido = true;
		
		var nombre =  jQuery("#edit-title").val();
		//jQuery('.form-item-title-span').remove();
		if(!nombre){
			//jQuery('.form-item-title').html(jQuery('.form-item-title').html()+"<span class='form-item-title-span'>El Nombre es obligatorio.</span>");
			valido = false;
		}
		
		var apellido =  jQuery("#edit-field-telefono-und-0-value").val();
		//jQuery('.form-item-field-telefono-und-0-value-span').remove();
		if(!apellido){
			//jQuery('.form-item-field-telefono-und-0-value').html(jQuery('.form-item-field-telefono-und-0-value').html()+"<span class='fform-item-field-telefono-und-0-value-span'>El Telefono es obligatorio.</span>");
			valido = false;
		}
		
		//jQuery('.form-item-field-zona-und-span').remove();
		if(jQuery("#edit-field-zona-und option[value='_none']").attr('selected')){
			//jQuery('.form-item-field-zona-und').html(jQuery('.form-item-field-zona-und').html()+"<span class='form-item-field-zona-und-span'>Selecciona una localidad.</span>");
			valido = false;
		}
		
		//jQuery('.form-item-field-zona-und-span').remove();
		if(!jQuery("#edit-field-servicios-und option:selected").length){
			//jQuery('.form-item-field-zona-und').html(jQuery('.form-item-field-zona-und').html()+"<span class='form-item-field-zona-und-span'>Selecciona una localidad.</span>");
			valido = false;
		}
		
		//jQuery('.form-item-field-zona-und-span').remove();
		if(!jQuery("#edit-field-categorias-und option:selected").length){
			//jQuery('.form-item-field-zona-und').html(jQuery('.form-item-field-zona-und').html()+"<span class='form-item-field-zona-und-span'>Selecciona una localidad.</span>");
			valido = false;
		}
		
		if(valido){
			jQuery('.contenido_pilas p').html('Su empresa ha sido creada en nuestro sistema, solo falta la aprobación por parte de eldesvare.com para que aparezca en nuestro sitio.');
			jQuery('#shadowbox_container').show();
		}
		
		return valido;
	}
    
	function revisa(){
		var valido = true;
		
		var nombre =  jQuery("#edit-field-nom-contacto-und-0-value").val();
		jQuery('.form-item-field-nom-contacto-und-0-span').remove();
		if(!nombre){
			jQuery('.form-item-field-nom-contacto-und-0-value').html(jQuery('.form-item-field-nom-contacto-und-0-value').html()+"<span class='form-item-field-nom-contacto-und-0-span'>El Nombre es obligatorio.</span>");
			valido = false;
		}
		
		var apellido =  jQuery("#edit-field-apellido-und-0-value").val();
		jQuery('.form-item-field-apellido-und-0-span').remove();
		if(!apellido){
			jQuery('.form-item-field-apellido-und-0-value').html(jQuery('.form-item-field-apellido-und-0-value').html()+"<span class='form-item-field-apellido-und-0-span'>El Apellido es obligatorio.</span>");
			valido = false;
		}
		
		jQuery('.form-item-field-sexo-span').remove();
		if(!document.getElementById('edit-field-sexo-und-0').checked && !document.getElementById('edit-field-sexo-und-1').checked){
			jQuery('.form-item-field-sexo-und').html(jQuery('.form-item-field-sexo-und').html()+"<span class='form-item-field-sexo-span'>Selecciona tu Sexo.</span>");
			valido = false;
		}
		
		jQuery('.form-item-field-ocupacion-span').remove();
		if(jQuery("#edit-field-ocupacion-und option[value='_none']").attr('selected')){
			jQuery('.form-item-field-ocupacion-und').html(jQuery('.form-item-field-ocupacion-und').html()+"<span class='form-item-field-ocupacion-span'>Selecciona tu Ocupacion.</span>");
			valido = false;
		}
		
		jQuery('.form-item-field-ciudas-span').remove();
		if(jQuery("#edit-field-ciudas-und option[value='_none']").attr('selected')){
			jQuery('.form-item-field-ciudas-und').html(jQuery('.form-item-field-ciudas-und').html()+"<span class='form-item-field-ciudas-span'>Selecciona tu Ciudad.</span>");
			valido = false;
		}
		
		var celular =  jQuery("#edit-field-tel-contacto-und-0-value").val();
		jQuery('.edit-field-tel-contacto-und-0-span').remove();
		if(isNaN(celular)){
			jQuery('.form-item-field-tel-contacto-und-0-value').html(jQuery('.form-item-field-tel-contacto-und-0-value').html()+"<span class='edit-field-tel-contacto-und-0-span'>El numero de Celular debe ser numerico.</span>");
			valido = false;
		}
		if(!celular){
			jQuery('.form-item-field-tel-contacto-und-0-value').html(jQuery('.form-item-field-tel-contacto-und-0-value').html()+"<span class='edit-field-tel-contacto-und-0-span'>El numero de Celular es obligatorio.</span>");
			valido = false;
		}
		
		var usuario =  jQuery("#edit-name").val();
		jQuery('.form-item-name-span').remove();
		if(tiene_caracteres_especiales(usuario)){
			jQuery('.form-item-name').html(jQuery('.form-item-name').html()+"<span class='form-item-name-span'>Su Nombre de Usuario no debe contener . - \' _ ; :</span>");
			valido = false;
		}
		if(!usuario){
			jQuery('.form-item-name').html(jQuery('.form-item-name').html()+"<span class='form-item-name-span'>Su Nombre de Usuario es obligatorio.</span>");
			valido = false;
		}
		
		var email =  jQuery("#edit-mail").val();
		jQuery('.form-item-mail-span').remove();
		if(!valEmail(email)){
			jQuery('.form-item-mail').html(jQuery('.form-item-mail').html()+"<span class='form-item-mail-span'>Por favor debe ingresar una direccion de correo electr&oacute;nico v&aacute;lida.</span>");
			valido = false;
		}
		
		var pass1 =  jQuery("#edit-pass-pass1").val();
		var pass2 =  jQuery("#edit-pass-pass2").val();
		jQuery('.form-item-pass-pass2-span').remove();
		if(pass1 != pass2){
			jQuery('.form-item-pass-pass2').html(jQuery('.form-item-pass-pass2').html()+"<span class='form-item-pass-pass2-span'>Las Contrase&ntilde;as deben ser iguales.</span>");
			valido = false;
		}
		if(!pass1){
			jQuery('.form-item-pass-pass2').html(jQuery('.form-item-pass-pass2').html()+"<span class='form-item-pass-pass2-span'>Debe ingresar una contrase&ntilde;a.</span>");
			valido = false;
		}
		
		jQuery('.form-item-terms-of-use-span').remove();
		if(!document.getElementById('edit-terms-of-use--2').checked){
			jQuery('.form-item-terms-of-use').html(jQuery('.form-item-terms-of-use').html()+"<span class='form-item-terms-of-use-span'>Debe aceptar nuestros t&eacute;rminos y condiciones.</span>");
			valido = false;
		}
		
		return valido;
	}
	
 	function tiene_caracteres_especiales(campo){
		campo_letras = campo.split('');
		for(i=0;i<campo_letras.length;i++){
			if(campo_letras[i] == '.' || campo_letras[i] == "-" || campo_letras[i] == "'" || campo_letras[i] == "_" || campo_letras[i] == ";" || campo_letras[i] == ":"){
				return true;
			}
		}
		return false;
	}
	function valEmail(valor){
		re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
		if(!re.exec(valor))    {
			return false;
		}else{
			return true;
		}
	}

jQuery('#empresa-node-form').submit(function(e){
		return revisa_empresa();
	});
    
	function revisa_empresa(){
		var valido = true;
		
		var titulo =  jQuery("#edit-title").val();
		jQuery('.form-item-title-span').remove();
		if(!titulo){
			jQuery('.form-item-title').html(jQuery('.form-item-title').html()+"<span class='form-item-title-span'>El Titulo es obligatorio.</span>");
			valido = false;
		}
		
		var direccion =  jQuery("#edit-field-direccion-und-0-value").val();
		jQuery('.edit-field-direccion-und-0-span').remove();
		if(!direccion){
			jQuery('#field-direccion-add-more-wrapper').html(jQuery('#field-direccion-add-more-wrapper').html()+"<span class='edit-field-direccion-und-0-span'>Debe ingresar por lo menos una direcci&oacute;n.</span>");
			valido = false;
		}
		
		var telefono =  jQuery("#edit-field-telefono-und-0-value").val();
		jQuery('.edit-field-telefono-und-0-span').remove();
		if(!telefono){
			jQuery('#field-telefono-add-more-wrapper').html(jQuery('#field-telefono-add-more-wrapper').html()+"<span class='edit-field-telefono-und-0-span'>Debe ingresar por lo menos un n&uacute;mero telef&oacute;nico.</span>");
			valido = false;
		}
		
		var web =  jQuery("#edit-field-web-und-0-value").val();
		jQuery('.form-item-field-web-und-0-span').remove();
		/*if(!web){
			jQuery('.form-item-field-web-und-0-value').html(jQuery('.form-item-field-web-und-0-value').html()+"<span class='form-item-field-web-und-0-span'>Ingrese la direcci&oacute;n web de su empresa.</span>");
			valido = false;
		}*/
		
		var alguno_checkeado = false;
		jQuery('input[name="field_zona[und]"]').each(function(){if(this.checked)alguno_checkeado=true;});
		jQuery('.form-item-field-zona-span').remove();
		/*if(!alguno_checkeado){
			jQuery('.form-item-field-zona-und').html(jQuery('.form-item-field-zona-und').html()+"<span class='form-item-field-zona-span'>Debes Seleccionar Alguna Zona.</span>");
			valido = false;
		}*/
		
		var alguno_checkeado = false;
		jQuery('#edit-field-servicios-und option').each(function(){if(this.selected)alguno_checkeado = true;});
		jQuery('.form-item-field-servicios-span').remove();
		if(!alguno_checkeado){
			jQuery('.form-item-field-servicios-und').html(jQuery('.form-item-field-servicios-und').html()+"<span class='form-item-field-servicios-span'>Debe seleccionar por lo menos un Servicio.</span>");
			valido = false;
		}
		
		var alguno_checkeado = false;
		jQuery('input[id|="edit-field-atencion-und"]').each(function(){if(this.checked)alguno_checkeado=true;});
		jQuery('.form-item-field-atencion-span').remove();
		if(!alguno_checkeado){
			jQuery('.form-item-field-atencion-und').html(jQuery('.form-item-field-atencion-und').html()+"<span class='form-item-field-atencion-span'>Debes Seleccionar Alguna Horario de Atencion.</span>");
			valido = false;
		}
		
		var alguno_checkeado = false;
		jQuery('input[id|="edit-field-formas-pago-und"]').each(function(){if(this.checked)alguno_checkeado=true;});
		jQuery('.form-item-field-formas-pago-span').remove();
		if(!alguno_checkeado){
			jQuery('.form-item-field-formas-pago-und').html(jQuery('.form-item-field-formas-pago-und').html()+"<span class='form-item-field-formas-pago-span'>Debes Seleccionar por lo menos una forma de pago.</span>");
			valido = false;
		}
		
		var alguno_checkeado = false;
		jQuery('input[name="field_rango_de_precios[und]"]').each(function(){if(this.checked)alguno_checkeado=true;});
		jQuery('.form-item-field-rango-de-precios-span').remove();
		/*if(!alguno_checkeado){
			jQuery('.form-item-field-rango-de-precios-und').html(jQuery('.form-item-field-rango-de-precios-und').html()+"<span class='form-item-field-rango-de-precios-span'>Debes Seleccionar un rango de precios.</span>");
			valido = false;
		}*/
		
		var alguno_checkeado = false;
		jQuery('#edit-field-categorias-und option').each(function(){if(this.selected)alguno_checkeado = true;});
		jQuery('.form-item-field-categorias-span').remove();
		if(!alguno_checkeado){
			jQuery('.form-item-field-categorias-und').html(jQuery('.form-item-field-categorias-und').html()+"<span class='form-item-field-categorias-span'>Debe seleccionar por lo menos una Categoria.</span>");
			valido = false;
		}
		
		var barrio =  jQuery("#edit-field-barrio-und-0-value").val();
	/*	jQuery('.form-item-field-barrio-und-0-span').remove();
		if(!barrio){
			jQuery('.form-item-field-barrio-und-0-value').html(jQuery('.form-item-field-barrio-und-0-value').html()+"<span class='form-item-field-barrio-und-0-span'>El Barrio es obligatorio.</span>");
			valido = false;
		}
		
		return valido;*/
	}

	/*if(a == "Scroll"){
		jQuery('#block-views-recomendados-block_1').jScrollPane();
	}*/

	jQuery("#block-views-resultado_de_busuqeda-block .view-content").html('<div style="background:#fff; float:left; width:350px; margin-left:10px; text-align:center;"><img src="/sites/all/themes/desvare/images/cargando.gif" /></div>');
	jQuery("#block-views-resultado_de_busuqeda-block").show();
	
	/*jQuery(".llamar").live('click', function(){
		var nid = jQuery(this).attr('rel');
		var id = jQuery(this).attr('id');
		if(id == 'si'){
			jQuery.post('/set_cookie_llamada', {'nid': nid});
		}else{
			alert(id);
		}
	});*/

/*	jQuery(".llamar").live('click', function(){
		var nid = jQuery(this).attr('rel');
		var id = jQuery(this).attr('id');
		if(id != 'Para poder Llamar debe ser un usuario registrado.'){
			if (jQuery.browser.msie && window.XDomainRequest) {
		            // Use Microsoft XDR
		            var xdr = new XDomainRequest();
		            xdr.open("post",'http://181.48.28.165/openc3/modules/client_custom/eldesvare/llamarweb.php');
		            xdr.onload = function() {
		                // XDomainRequest doesn't provide responseXml, so if you need it:
                		var dom = new ActiveXObject("Microsoft.XMLDOM");
		                dom.async = false;
                		dom.loadXML(xdr.responseText);
		            };
		            xdr.send("idc="+nid+"&idv="+id);
		        } else {
				jQuery.post('http://181.48.28.165/openc3/modules/client_custom/eldesvare/llamarweb.php', {'idc': nid, 'idv' : id});
			
			}
			jQuery('.contenido_pilas p').html("En breve estará comunicado con el proveedor de este servicio, recuerde esta llamada no generara ningún costo para usted. La misma llegara a su teléfono registrado sea celular o número de teléfono fijo.");
			jQuery('#shadowbox_container').show();
           //alert ("En breve estar\xE1 comunicado con el proveedor de este servicio, recuerde esta llamada no generara ning\xFAn costo para usted. La misma llegara a su tel\xE9fono registrado sea c\xE9lular o n\xFAmero de tel\xE9fono fijo.", 'Alert Dialog');
		}else{
			jQuery('.contenido_pilas p').html(id);
			jQuery('#shadowbox_container').show();
			//alert(id);
		}
	});*/
}


);


function enlazar_llamada(id, nid){
		if(id != 'Para poder Llamar debe ser un usuario registrado.'){
			jQuery.post('/enlazar_llamada', {'idc': nid, 'idv' : id});
			jQuery('.contenido_pilas p').html("En breve estará comunicado con el proveedor de este servicio, recuerde esta llamada no generara ningún costo para usted. La misma llegara a su teléfono registrado sea celular o número de teléfono fijo cuando el prestador del servicio conteste.");
			jQuery('#shadowbox_container').show();
           //alert ("En breve estar\xE1 comunicado con el proveedor de este servicio, recuerde esta llamada no generara ning\xFAn costo para usted. La misma llegara a su tel\xE9fono registrado sea c\xE9lular o n\xFAmero de tel\xE9fono fijo.", 'Alert Dialog');
		}else{
			jQuery('.contenido_pilas p').html(id);
			jQuery('#shadowbox_container').show();
			//alert(id);
		}
}

function gup( name )
{
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	if( results == null )
		return "";
	else
		return results[1];
}

function crearLightBox(){
	var newSS=document.createElement('link');
	newSS.rel='stylesheet';
	newSS.href='http://www.eldesvare.com/sites/all/themes/desvare/css/shadowbox.css';
	document.getElementsByTagName("head")[0].appendChild(newSS);
	var html = '<div style="display: none;" id="shadowbox_container">';
	html += '<div style="display: block; top: 64.5px; width: 404px; visibility: visible;" id="shadowbox">';
				html += '<div id="shadowbox_body">';
					html += '<div style="height: 270px; display: block;" id="shadowbox_body_inner">';
						html += '<div id="conten_pilas">';
							html += '<div class="caja_pilas">';
								html += '<div class="contenido_pilas">';
								  html += '<img class="logoLightBox" src="http://www.eldesvare.com/sites/default/files/desvare.png" />';
								  html += '<p></p>';
								  html += '<div class="btn-linbox_pilas">';
										html += '<span><a onclick="jQuery(\'#shadowbox_container\').hide();" href="javascript:void();">Cerrar</a></span>';
									html += '</div>';
							  html += '</div>';
							html += '</div>';
						html += '</div>';
					html += '</div>';
					html += '<div style="visibility: hidden;" id="shadowbox_loading">';
						html += '<!--<img alt="Cargando" src="/media/images/loading.gif"><span><a href="javascript:Shadowbox.close();">Cancelar</a></span>-->';
					html += '</div>';
				html += '</div>';
	html += '</div>';
html += '</div>';
jQuery('body').append(html);
}