<?php
require('Required/requirements.php');
include('Required/head.php');
?>
<body bgcolor="white" text="blue">
<H1><center><?php echo $syte; ?></center></H1>
<p>¡Hola! En esta ocasión voy a mostrar un pequeño formulario para subir archivos a un servidor, sirviendo este de almacenamiento para los mismos.</p>
<p>Se pretende que al subir los archivos se muestren en una tabla todos ellos ordenados por nombre y el enlace para reproducir.</p>
<hr>
<H2><center>Formulario de envío de archivos.</center></H2>
<form action="files.php" method="post" enctype="multipart/form-data">
<input type="file" name="filename"><br/>
<input type="submit" value="enviar archivo.">
</form><br>
<?php include('Required/footer.php'); ?>