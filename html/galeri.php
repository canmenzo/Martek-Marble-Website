<?
if ($link=='video') { include ('html/video.php'); }
if ($link=='fotoal') { include ('html/album.php'); }
if ($link=='brosur') { include ('html/brosur.php'); }
if ($link=='') {
?>
<?
$ido=3;
if (!$det)
{
$data=mysql_query("select * from baslik where id=1");
$data_=mysql_fetch_row($data);

echo "
<table>
<tr>
<td>
<div>
<img src=img/gallery.jpg />

<br>


</div>


<br>";
 
 
echo "
<center>
<a href=?pg=galeri&link=fotoal>
<img src=img/photo.jpg></a>
<a href=?pg=galeri&link=video>
<img src=img/video.jpg></a>
<a href=?pg=galeri&link=brosur>
<img src=img/catalogue.jpg></a>
</center>
</td>
</tr>
</table>";

}

} ?>
