<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? 
include ('html/login.php'); 
include ('html/title.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<? metaal($pg,$uid); ?>
<title><? titleal($pg,$link,$urun); ?></title>

<link href="img/ion.css" rel="stylesheet" type="text/css" />
<link href="img/highslide.css" rel="stylesheet" type="text/css" />
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/highslide/highslide-with-gallery.js"></script>

<script type="text/javascript">
	hs.graphicsDir = 'js/highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	//hs.dimmingOpacity = 0.75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: true,
		overlayOptions: {
			opacity: .75,
			position: 'top center',
			hideOnMouseOut: true
		}
	});
</script>
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21117342-20']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div class="ion">
    <div id="top">
    <table style="width: 751px;" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width:214px;"><img src="img/logo.jpg" alt="Martek Madencilik Logo" /></td>
    <td align="right" valign="top" style="width:537px;"><br />

    
 <div id="dismenu">   <? include ('html/menu.php'); ?></div><br /><br />
<img src="img/Resim1.jpg" /></td>
  </tr>
</table>
    
    </div>
    <div id="banner">
	
	<IMG SRC="img/slides/martekslide.gif">
    </div>
  <div style="background:url(img/centbg.jpg) repeat-y;">
  <br />
  
  
  
    	  					 <?
							 if ($pg=='') {echo "<div id=\"home\">";}
							 else {echo "<div id=\"homeb\">";}
                         	   if (!$pg=='home')
                               { include ("html/home.php"); }
                               if ($pg=='about')
                               { include ("html/about.php"); }
 								if ($pg=='contact')
                               { include ("html/contact.php"); }
                               if ($pg=='referans')
                               { include ("html/referans.php"); }
                               if ($pg=='urun')
                               { include ("html/urun.php"); }
							    if ($pg=='export')
                               { include ("html/export.php"); }
							   if ($pg=='reference')
                               { include ("html/reference.php"); }
							   if ($pg=='galeri')
                               { include ("html/galeri.php"); }
							?>


  </div>
      <br />
    <br /></div>


  <div id="alt"> <table border="0" id="altlink" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="index.php">Home</a> | <a href="?pg=urun">Products</a> | <a href="?pg=reference">Reference</a> | <a href="?pg=about">About</a> | <a href="?pg=contact">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
</div>
  <div id="copy">  Martek Marble &copy; 2020<br /> </div>
  <div style="text-align: right">
		<footer> <a href="https://www.canozmen.me"> Web designed by Can Ozmen</a></footer>
  </div>
<div id="ikonlar">
  <a href="http://www.izto.org.tr/IZTO/TC" target="_blank"><img src="img/1_.jpg" alt="Ticaret Odası" name="1" width="24" height="25" border="0" id="1" /></a> 
  <a href="#" ><img src="img/2_.jpg" alt="Ege" name="2" width="26" height="25" border="0" id="2" /></a> 
  <a href="#" ><img src="img/3_.jpg" alt="İmm" name="3" width="100" height="25" border="0" id="3" /></a>
  <a href="#" ><img src="img/4_.jpg" name="4" width="36" height="25" border="0" id="4" /></a>
</div>
</div>
</body>
</html>
