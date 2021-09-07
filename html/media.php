<?
if ($link=='video') { include ('html/video.php'); }
if ($link=='fotoal') { include ('html/album.php'); }
if ($link=='brosur') { include ('html/brosur.php'); }
if ($link=='') {
?>
<a href="?pg=media&link=fotoal">
<img src="img/fotoalbum.jpg">
</a>
<br>
<a href="?pg=media&link=video">
<img src="img/videoars.jpg">
</a>
<br>
<a href="?pg=media&link=brosur">
<img src="img/brokat.jpg"></a>
<? } ?>