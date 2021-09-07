<?
$ido=3;
if (!$det)
{
$data=mysql_query("select * from baslik where id=3");
$data_=mysql_fetch_row($data);

echo "
<table>
<tr>
<td>
<div>
<img src=img/reference.jpg />

<br></div>
$data_[2]

<br>";
 $altd=mysql_query("select * from altbaslik where acat='3'");
 while ($altd_=mysql_fetch_row($altd)):
 {
  echo "  
  <a href=?pg=muh&link=aritma_sistemleri&det=$altd_[0]> 
   <img src=img/fico.jpg align=absmiddle><font id=dbas><strong>$altd_[1]</strong></font><br>
   $altd_[2]
  </a>
  <br>
  ";
 }
 endwhile;
 
echo "
</td>
</tr>
</table>";

}


?>