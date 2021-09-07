<?
if ($id=='') {$yazibul=mysql_query("select * from video order by tarih desc"); }
else { $yazibul=mysql_query("select * from video where id=$id order by tarih desc"); }

$yazibul_=mysql_fetch_row($yazibul);

$id=$yazibul_[0];

echo "
<img src=img/gallery.jpg /><br />
<img src=img/videoalt.jpg /><br>";

$dyazibul=mysql_query("select * from video where id!='$id' order by tarih desc");
$dyazibulnum=mysql_num_rows($dyazibul);


echo "<br><div id=yaziicerik>$yazibul_[2]</div>";


echo "<br><div id=habrapor>Shows : $yazibul_[4]</div>";
$yeniokunma=$yazibul_[4]+1;
mysql_query ("update video set sayac='$yeniokunma' where id='$yazibul_[0]'");
// Diðer Videolar
echo "
<br><br>
<table cellpadding=0 cellspacing=0>
<tr><td><strong>Martek Gallery Other Videos</strong></td></tr>
";
$dighaber=mysql_query("select * from video where id!='$id' order by id desc");
 while ($dighaber_=mysql_fetch_row($dighaber)):
  {
  echo "<tr><td id=dhaberic><img src=img/videoico.jpg align=absmiddle><a href=?pg=sirket&link=video&id=$dighaber_[0] id=dhaberic> $dighaber_[1]</a></td></tr>";
  }
 endwhile;
echo "</table>";

		
		



?>