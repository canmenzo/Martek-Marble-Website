<img src="img/productsm.jpg" />
<?

if ($kate=='') {
echo "<table align=center width=560>
<tr>
<td>
";
$data=mysql_query("select * from category order by cat_id");
	  //$data_=mysql_num_rows($data); Tablodakilerin Toplam sayýýsýný bulur	 
	  
	  while($data_=mysql_fetch_row($data)):
	  {
	   echo "
	    <div class=\"emenuk\">
		 <div class=emmlistk>
		<a href=?pg=urun&kate=$data_[0] class=emmlistk>
		<div id=hiza>$data_[1]</div></a>
		</div>
		</div>
		
		";
	  }
	  endwhile; 


echo "
</td>
</tr>
</table>
";

}
else {
?>
<table width="100%">
<tr>
<td width="200" valign="top"> 
<?

$data=mysql_query("select * from category  where cat_id='$kate'");
$data_=mysql_fetch_array($data);
echo "<div id=butback>
  <div id=chiza>$data_[cat_name]</div></div>";

$uruns=mysql_query("select * from item where item_cat='$kate'");
while ($uruns_=mysql_fetch_array($uruns)):
{
  echo "<div id=chizab>
  <img src=img/solico.jpg align=absmiddle>
  <a href=?pg=urun&kate=$kate&urun=$uruns_[item_id] id=link>  
  $uruns_[item_name]</a></div>";
}
endwhile;

$diger=mysql_query("select * from category where cat_id!='$kate'");
while ($diger_=mysql_fetch_array($diger)):
{
  echo "<div id=butback>
  <div id=chiza>
  <a href=?pg=urun&kate=$diger_[0]>$diger_[cat_name]</strong></div></div>";
}
endwhile;

?>
</td>
<td valign="top">
<?




if ($urun=='') {
$uruns=mysql_query("select * from item where item_cat='$kate'");
while ($uruns_=mysql_fetch_array($uruns)):
{
echo "
	    <div class=\"emenuk\">
		 <div class=emmlistk>
		<a href=?pg=urun&kate=$kate&urun=$uruns_[item_id] class=emmlistk>
		<div id=hiza>$uruns_[item_name]</div></a>
		</div>
		</div>
		
		";
}
endwhile;
}
else {
echo "<table align=center>
<tr>
<td>
";
$sec=mysql_query("select * from item where item_id='$urun'");
$sec_=mysql_fetch_array($sec);
echo "<div id=\"urunback\">
       <div id=bhiza>
		$sec_[item_name] </div></div></td></tr><tr><td align=center>";
$foto=mysql_query("select * from image where item_id='$urun'") or die("Hata");
while ($foto_=mysql_fetch_array($foto)):
{
echo "<a href=\"img/prdct/$foto_[img_nam]\" class=\"highslide\" onclick=\"return hs.expand(this)\"><img src=img/prdct/thumb/$foto_[img_nam]></a><br><br>";
}
endwhile;
echo "</center>
</td>
</tr>
</table>
";
}
?>
</td>
</tr>
</table>
<?
}
?>