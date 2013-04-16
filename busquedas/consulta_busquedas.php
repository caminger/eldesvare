<?php

$tabla = "zreceptor_busquedas";
$username = "d3sv4r3";
$password1 = "kCKxfT46w0";
$dbName   = "desvare";
$hostname = "localhost";


mysql_connect($hostname,$username,$password1) or
print "Error en la Conexión";

mysql_select_db("$dbName") or
print "Error en la Base de datos";

$date1= $_REQUEST["date1"];
$date2= $_REQUEST["date2"];



$consulta = "select * from $tabla where  `fecha` >= \"$date1\" AND `fecha` <= \"$date2\" "; 


$resultado=mysql_query($consulta);


$numregistros=mysql_num_rows($resultado);

/*$queEmp = "SELECT * FROM documento WHERE fecha_recepcion >='$date1' AND fecha_recepcion <='$date2' LIMIT 0, 30 "; 
*/
//$queEmp ="SELECT * FROM documento WHERE 'fecha_recepcion' BETWEEN \"$date1\" AND \"$date2\"";



?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EL DESVARE.COM DIRECCIÓN GENERAL</title>
<script language="Javascript" src="scripts.js"> 
	alert (' Error con al Ejecutar js ');  
</script>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<style type="text/css">
a:link {
	color: #000;
}
a:visited {
	color: #000;
}
</style>
</head>

<body>








<div class="Estructura">
 
<table  class="tablaGeneral" align="center" width="100%" >
  <tr>
    <td><div class="cabezote"><img src="imagenes/cabezote.jpg" width="909" height="104" /></div></td>
  </tr>
  <tr class="cuerpo">
    <td>
    <div class="divPrincipal">
<table border="1" align="center" cellpadding="0" cellspacing="0" >
<tr>    <td colspan="3" class="tituloTabla">Numero de busqueda</td>
		<td width="95" class="tituloTabla">Palabras consultadas</td>
        <td width="95" class="tituloTabla">Fecha</td>
        <td width="91" class="tituloTabla">Hora</td>
        <td width="92" class="tituloTabla">Usuario</td>
        
                        </tr>
 <?php
    $i=0;
	while ($i<$numregistros)
	 {

      $c_new=mysql_result($resultado,$i,'id_palabras');
	  $j_new=mysql_result($resultado,$i,'palabras');
      $a_new=mysql_result($resultado,$i,'fecha');
      $n_new=mysql_result($resultado,$i,'hora');
	  $o_new=mysql_result($resultado,$i,'usuario');
	  
	  

 ?>
                            
                        
                      
<tr>
                      <td colspan="9" style="color:#FF0000;"></td>
                    </tr>

                    <tr>
                      <td colspan="3" class="td"><p align="center"><?php echo $c_new?></td>
                       <td class="td"><?php echo $j_new?></td>
                      <td class="td"><?php echo $a_new?></td>
                     
                      <td class="td"><?php echo $n_new?></td>
                      <td class="td"><?php echo $o_new?></td>
                     
                      
                      
                      
            </tr>
                    <tr>
                      
                    </tr>
                    <tr>
                      <td colspan="9" bordercolor="0" align="center">
                        
                      </td>
                      <?php 
	 $i++;
	  }
        ?>
</tr>
                </table>
                  
                 
    </div>
<a href="consulta.html"><strong>Regresar</strong></a>

	</td>
  </tr>
  <tr>
    <td><div class="footer">
      <p> <br/> 
        &copy; 2013 </p>
    </div></td>
  </tr>
</table>




</div>





</body>
</html>