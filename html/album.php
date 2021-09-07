<img src="img/gallery.jpg" /><br />
<img src="img/photoalt.jpg" /><br>
<?
if ($id=='')
{


echo "<table>
<tr>";
$xx=1;
$yy=3;
$galeriler=mysql_query("select * from foto order by id desc");
while ($galeriler_= mysql_fetch_row($galeriler)):
{
 
 $tfoto=mysql_query("select * from aimage where item_id=$galeriler_[0]");
 $tfotonum=mysql_num_rows($tfoto);
 $tfoto_=mysql_fetch_row($tfoto);
 if ($tfotonum=='0') {$tfoto_[1]='nophoto.jpg'; }
 echo "<td>
 <div id=galeriler> 
 <div id=galerilerib><a href=?pg=galeri&link=fotoal&id=$galeriler_[0]><img src=img/album/thumb/kthumb/$tfoto_[1] id=galerileri></a></div>
 <div id=galerilerb><a href=?pg=galeri&link=fotoal&id=$galeriler_[0] id=links>$galeriler_[1] </a></div>
 <div id=galerilerib>Total Photo: $tfotonum</div>
 </div>
 </td>";
 if ($xx==$yy) { $yy=$yy+3; echo "</tr><tr>";}
 $xx++;
}
endwhile;
echo "</tr>
</table>
";
}
else {
$baslik=mysql_query("select * from foto where id='$id'");
$baslik_=mysql_fetch_row($baslik);
$habgosterim = str_replace ('Nursaç','<a href="http://www.since1910.net" id=hablinkd><strong>Nursaç</strong></a>',$baslik_[2]);
echo "
<div id=yazibaslik><div id=yazayir>$baslik_[1]</div></div>
<div id=habicerik>$habgosterim</div>
";
echo "
<div id=habalts>
<table>";
$photo=mysql_query("select * from aimage where item_id='$id'");
		$photoadet=mysql_num_rows($photo);		
		if ($photoadet=='')
		{ echo "<tr>
		<td><font color=red>Foto Yok</font></td>
		</tr>"; }
		else {
		echo "<tr>";
		$x=0;
		$y=5;
		while($photo_=mysql_fetch_row($photo)):
		{
		 echo "<td align=center>
		 <a href=\"img/album/$photo_[1]\" class=\"highslide\" onclick=\"return hs.expand(this)\">
		 <img src=img/album/thumb/kthumb/$photo_[1] alt=\"Ankaragücü\" title=\"Önizleme için týklayýn\"></a>		 
		 </td>";
		 $x++;
		 if ($x==$y) { 
		 echo "</tr></tr>";
		 $y=$y+5;
		 }
		}
		endwhile;
		echo "</tr>";
        }
		
		echo "</td>
		</table>
		</div>";
		echo "
		
		<br><div id=habrapor>Shows : $baslik_[3]</div>";
$yeniokunma=$baslik_[3]+1;
mysql_query ("update foto set sayac='$yeniokunma' where id='$baslik_[0]'");
}
?>
		