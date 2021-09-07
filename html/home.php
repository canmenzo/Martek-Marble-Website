<table style="width:711px; color:#FEFFD7;" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" >
     
      <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr><td><img src="img/tableust.jpg" /></td></tr>
        <tr>
        
          <td valign="top" style="width:210px; height:160px; background:url(img/hombg.jpg) repeat-x;"><img src="img/urunler.jpg" /><br>
          <?
		  $data=mysql_query("select * from category order by cat_id");
	  //$data_=mysql_num_rows($data); Tablodakilerin Toplam say��s�n� bulur	 
	  
	  while($data_=mysql_fetch_row($data)):
	  {
	   echo "
	   <div id=analink>
		<a href=?pg=urun&kate=$data_[0]>
		<img src=img/ico.gif align=absmiddle> $data_[1]</a>
		</div>
		
		
		";
	  }
	  endwhile; 
		  ?>
          </td>
        </tr>
        <tr>
          <td><img src="img/tablealt.jpg" /></td>
        </tr>
      </table>
    <td style="width:40px;"></td>
    
    <td valign="top">
    <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr><td><img src="img/tableust.jpg" /></td></tr>
        <tr>
        <td valign="top" style="width:210px; background:url(img/hombg.jpg) repeat-x;"><img src="img/firmamizs.jpg" /><br />
<div id="firm">
 Martek Marble is an export company that sends products from Turkey's most biggest 3 ports which are Izmir, Mersin and Gemlik.
<font style="text-align:right;"><a href="?pg=about">Continue &raquo;</a></font></div></td>
</tr>
        <tr>
          <td><img src="img/tablealt.jpg" /></td>
        </tr>
      </table>
    <td style="width:40px;"></td>
    <td valign="top">
     
    
      <table width="200" border="0" cellpadding="0" cellspacing="0">
      <tr><td><img src="img/tableust.jpg" /></td></tr>
        <tr>
          <td style="width:210px; background:url(img/hombg.jpg) repeat-x;"><img src="img/iletisims.jpg" />
          <div id="contact"><strong>Address :</strong>
          1048 SOK. ATIFBEY SITESI ORTA MAH. NO:4, <strong>35495 Menderes/Izmir </strong> <br> </div>
</td>
        </tr>
        <tr>
          <td><img src="img/tablealt.jpg" /></td>
        </tr>
      </table>
    </td>
  </tr>
</table>

