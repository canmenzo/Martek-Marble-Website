
<img src="img/iletisim.jpg" alt="�leti�im Bilgileri" />
<? 

if ($send==1) {
//Mail yolla

	$email = "info@martekmarble.com";
	$subject = "Martek Marble Contact Form";
	$date = date("Y-m-d");   
	@mail("$email","$subject", "
MARTEK MARBLE CONTACT FORM
----------------------------------
	Ad Soyad : $name
	Firma : $company
	Telefon : $tel
	Mail : $eemail
Mesaj : $message
","From:$name <$eemail>\n");

//---->
		?>
      
<meta http-equiv="refresh" content="3;URL=index.php">
	<table align=center>
	<tr>
	<td class=uyar>
    <br />
<center>
<strong>Thank you for your message!</strong><br /><br />
</center></td>
	 </tr>
 </table>
      
        <?
	}
		else
	{
	?>

<br>
<br>
<script>
	function isValidEmail(strEmail){
	validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;

	// search email text for regular exp matches
	if (strEmail.search(validRegExp) == -1)
	{
	return false;
	}
	return true;
	}
	
	function control ()
	{
		var hata="";
		if (document.sancar.name.value=="") hata="Name missing\n";
		if (isValidEmail(document.sancar.mail.value)==false) hata=hata+"Email missing\n";
		if (document.sancar.tel.value=="") hata=hata+"Phone number missing\n";
		if (document.sancar.mesaj.value=="") hata=hata+"Mesage missing\n";
		if (hata=="") return 1; else  alert(hata); return 0;
		hata="";

	}
	
</script>

<form id="sancar" name="sancar" method="post" action="index.php?pg=contact&amp;send=1" enctype="multipart/form-data">
  <table width="711" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="100" align="right"><strong>Full Name:</strong></td>
      <td width="310"><input name="name" type="text" id="name" class="frm" />
      *</td>
      <td width="300" rowspan="7" valign="top"><div id="baslik3"><strong>Address :</strong></div>
                1048 SOK. ATIFBEY SITESI ORTA MAH. NO:4, <strong>35495 Menderes/Izmir </strong>
        <br />
        <br />
        <div id="baslik3"><strong>Phone :</strong></div>
        +90 (232) 798-8166(pbx)<br />
        <br />
        <div id="baslik3"><strong>Fax :</strong></div>
        +90 (232) 798-8166 <br />
        <br />
        <div id="baslik3"><strong>E-Mail :</strong></div>
        info@martekmarble.com</td>
    </tr>
    <tr>
      <td align="right"><strong>Company :</strong></td>
      <td><input name="company" type="text" class="frm" /></td>
    </tr>
    <tr>
      <td align="right"><strong>E-Mail :</strong></td>
      <td><input name="eemail" type="text" class="frm" id="mail" />
        *</td>
      <td width="10">&nbsp;</td>
    </tr>
    <tr>
      <td align="right"><strong>Phone :</strong></td>
      <td><input name="tel" type="text" class="frm" id="tel" />
        *</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right"><strong>Fax :</strong></td>
      <td><input class="frm" name="fax" type="text" id="fax" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="99" align="right" valign="top"><strong>Message :</strong></td>
      <td valign="top"><textarea class="finput" rows="4" id="mesaj"  name=message></textarea>
        *</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="right"></td>
      <td valign="top"><input type="button" name="Submit" id="gonder" class="submit" value="Send" onclick="javascript:if (control()) { this.form.submit(); }" />
</td>
    </tr>
  </table>
</form>
<br />
<br />

<? } ?>