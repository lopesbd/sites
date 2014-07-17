<?php

require_once '../../php/mconexao.php';

$descricao=$_POST['descricao'];

if (isset($_POST["nome"])) {
    $link = $_POST["nome"];
    $origem = $_FILES["foto"]["tmp_name"];
    $formato = $_FILES["foto"]["type"];
	
	if($formato === 'image/png'){
	 $destino = "../../mimg/motos/" .md5(time() * 2).".png";
	 $bd_destino = "mimg/motos/" .md5(time() * 2).".png";
	}
	
	if($formato === 'image/jpeg'){
	  $destino = "../../mimg/motos/" .md5(time() * 2).".jpg";
	  $bd_destino = "mimg/motos/" .md5(time() * 2).".jpg";
	}
	

    $SQL = "INSERT INTO motos (foto,nome,descricao) VALUES ('" . $bd_destino . "','" . $link . "','".$descricao."' )";

    $query = mysql_query($SQL);

    move_uploaded_file($origem, $destino);
	header('Location: index.php');
}
?>