<?php
require('Required/requirements.php');
$filename=$_FILES['filename']['name'];
$type=$_FILES['filename']['type'];
$size=$_FILES['filename']['size'];
include('Required/head.php');
if(empty($filename) or $size>104857600 or $type!='audio/mpeg'){
echo '<p>Error: No se pudo subir el archivo porque pesa más de 100 mb, no es un archivo mp3 o intentaste enviar un archivo con nombre vacío, intenta subirlo otra vez.</p>
<p><a href="index.php">Volver a la página de inicio.</a>';
}
else{
$success=copy($_FILES['filename']['tmp_name'], $path.'/'.$filename);
echo '<body bgcolor="white" text="blue">
<H1><center>'.$syte.'</center></H1>';
if($success==true){
echo '<p>¡Tu archivo fue subido correctamente!</p>
<p>Si deseas acceder a la página de visualización de archivos subidos, puedes entrar <a href="list_files.php">aquí.</a></p>';
include('Required/footer.php');
}
else{
echo '<p>Error: No se pudo subir el archivo, intenta subirlo otra vez.</p>
<p><a href="index.php">Volver a la página de inicio.</a>';
}
}
?>