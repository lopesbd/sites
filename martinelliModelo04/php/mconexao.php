<?php

$conexao = mysql_connect("localhost","root","","")
 or die ("Não foi possível conectar: ".mysql_error());
 
 mysql_select_db("site_martinelli")
  or die ("Ocorreu um erro: ".mysql_error());
?>
