<html>
<?php
 $idc=$_POST['idc'];
$idv=$_POST['idv'];
 ?>
 <form id="Formulario" action="http://181.48.28.165/openc3/modules/client_custom/eldesvare/llamarweb.php" method="post">
        <input id="idc" type="text" name="idc"              value=<?php 
echo $idc
?>>
        <input id="idv" type="text" name="idv"                  value=<?php 
echo $idv?>>
              
        <input name="ActionButton" type="submit" value="enviar">
    </form>

</html>
    