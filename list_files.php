<?php
require('Required/requirements.php');
include('Required/head.php');
$file_list=scandir($path);
$list='<table border="1px" align="center">
<tr>
<td>Nombre del archivo.</td>
<td>Descargar</td>
</tr>';
foreach($file_list as $value){
if($value!='.' and $value!='..') $list.='<tr>
<td><p>'.$value.'</p></td>
<td><a href="'.$path.'/'.$value.'">Reproducir</a></td>
</tr>';
}
$list.='</table>';
?>
<body bgcolor="white" text="blue">
<H1><center><?php echo $syte; ?></center></H1>
<p>Bienvenido/a a la tabla donde podrás descargar tus audios favoritos.</p>
<p>Si notas algún error, no dudes en reportármelo.</p>
<p>¡Disfruta!</p>
<hr>
<?php
echo $list;
include('Required/footer.php');
?>