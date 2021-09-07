<script type="text/javascript" src="js/tooltip.js"></script>
<img src="img/gallery.jpg" /><br />
<img src="img/cataloguealt.jpg" /><br>
<?
echo "<table>";
$data=mysql_query("select * from brosur order by id desc");
while ($data_=mysql_fetch_row($data)):
{
echo "<tr><td>";
$fotobak=mysql_query("select * from bimage where item_id='$data_[0]'");
$fotobaknum=mysql_num_rows($fotobak);

if ($fotobaknum=='0') { echo "<img src=img/fotol.jpg align=absmiddle> "; 
echo "<a href=\"http://www.turkuvaz.com/download/brosur/$data_[2]\" target=\"_blank\" id=links>
$data_[1]</a>";
}
else { $fotobak_=mysql_fetch_row($fotobak);
echo "<img src=img/brosur/thumb/$fotobak_[1] align=absmiddle style=\"border:1px; border-color:#9c9c9e;\"> "; 
echo "
<a href=\"http://www.turkuvaz.com/download/brosur/$data_[2]\" onMouseover=\"ddrivetip('<center><img src=img/brosur/$fotobak_[1]></center>','FFFFFF', 250)\"; onMouseout=\"hideddrivetip()\" target=\"_blank\">
$data_[1]</a></td></tr>";
}
}
endwhile;
echo "</table>";
?>

<br><br>

