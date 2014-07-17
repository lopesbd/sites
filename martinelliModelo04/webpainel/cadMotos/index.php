<html>
 <title>Envio de Banners | Rádio Ativa FM</title>
 <head>
   <link rel="stylesheet" type="text/css" href="estilo.css" >
   <meta charset="utf-8">
 </head>
<body>
 <div id="formulario">
<br><br>
<p>Para adicionar um novo Locutor 
o formulário logo abaixo.</p>
Formatos Aceitos: jpg ou png.<br>
<br>
<strong>OBS: </strong> O formato mais recomenado é o .PNG. <br>
</p>
<form name="frmEnviar" method="POST" action="enviar.php" enctype="multipart/form-data">
    Modelo: <input name="nome" type="text" size="50" id="nome" placeholder="Digite o nome da foto"/>
    <br><br>
    Descrição: <textarea name="descricao" placeholder="Descrição" cols="70" rows="7"/></textarea>
    <br><br>
    Foto: <input type="file" name="foto"/>
    <br><br>
    <input type="submit" value="cadastrar" />
</form>
</div>
</body>
</html>