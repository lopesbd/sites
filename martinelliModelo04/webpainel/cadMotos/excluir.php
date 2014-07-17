
<?php
require_once("../../php/mconexao.php");

 $strid = $_GET["id"];

 
 $sql1 = "SELECT * FROM motos WHERE id='$strid' ";
$excSQL= mysql_query($sql1) or die("Ocorreu um erro: ".mysql_error());

while($arr1 = mysql_fetch_array($excSQL)){
    unlink("../../".$arr1['foto']);
}
 
$sql12 = "DELETE from motos WHERE id='$strid' ";
$excSQL= mysql_query($sql12) or die("Ocorreu um erro: ".mysql_error());

?>
<form action = "../../index.php" method="POST">
          <strong>Moto Excluída com Sucesso!</strong>
           <input type = "hidden" name = "id" /></p>
           <input type="submit" value = "<- Voltar" />
              <br />
            </form>