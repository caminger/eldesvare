<?php

$fecha_act=date("Y-n-j");
$hora_act=date("H:i:s");
//echo $fecha_act;
//echo $hora_act;
$busqueda=$_REQUEST[query];
$busqueda2=$_REQUEST[id];
echo $busqueda2;

if($busqueda == "") {
echo "Error: El campo esta vacio no se guardara.";
}else{
//echo $busqueda;



//INSERT INTO `receptor_busquedas`(`palabra`) VALUES ($busqueda);

 //$dbh=mysql_connect ("www.eldesvare.com", "integracion", "1nt3gr4d3sv4r3") or die ('No se ha realizado conexión a la database: ' . mysql_error());
//mysql_select_db ("desvare");


function Conectarse()
{
   if (!($link=mysql_connect("www.eldesvare.com","integracion","1nt3gr4d3sv4r3")))
   {
      echo "Error conectando a la base de datos .";

      exit();
   }

   if (!mysql_select_db("desvare",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

  $link=Conectarse();
//INSERT INTO `desvare`.`zreceptor_busquedas` (`id_palabras`, `palabras`) VALUES ('0', 'inicial');


  mysql_query("insert into zreceptor_busquedas(palabras,fecha,hora,usuario) values ('$busqueda','$fecha_act','$hora_act','$busqueda2')",$link);


//$Guarda = $sqlm->inser_data("desvare","idcliente,idvarado,ncliente,nvarado,unicoidR,unicoidC,fechahora,medio","'$idc','$idv','".$TraeClienteN[0][field_telefono_value]."','".$TraeVaradoN[0][field_tel_contacto_value]."','".trim($unicoIdR)."','".trim($unicoIdC)."','$fecha_act $hora_act','Web'",0);						
}
?>