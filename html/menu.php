<?
if ($pg=='') { echo "<div id=topmenulinks><a href=\"index.php\" id=\"topmenulinks\" title=\"Ana Sayfa\"><div id=menu>Home Page</div></a></div>"; }
	else { echo "<div id=topmenulink><div id=menu><a href=\"index.php\" id=\"topmenulink\" title=\"Ana Sayfa\">Home Page</a></div></div>"; }if ($pg=='urun') { echo "<div id=topmenulinks><a href=\"?pg=urun\" id=\"topmenulinks\" title=\"Ürünler\"><div id=menu>Products</div></a></div>"; }else { echo "<div id=topmenulink><a href=\"?pg=urun\" id=\"topmenulink\" title=\"Ürünler\"><div id=menu>Products</div></a></div>"; }if ($pg=='reference') { echo "<div id=topmenulinks><a href=\"?pg=reference\" id=\"topmenulinks\" title=\"Referanslar\"><div id=menu>References</div></a></div>"; }else { echo "<div id=topmenulink><a href=\"?pg=reference\" id=\"topmenulink\" title=\"Referanslar\"><div id=menu>Reference</div></a></div>"; }
		if ($pg=='galeri')
	{ echo "<div id=topmenulinks><a href=\"?pg=galeri\" id=\"topmenulinks\" title=\"Galeri\"><div id=menu>Gallery</div></a></div>"; }
	else { echo "<div id=topmenulink><div id=menu><a href=\"?pg=galeri\" id=\"topmenulink\" title=\"Galeri\">Gallery</a></div></div>"; }

		if ($pg=='about')
		{ echo "<div id=topmenulinks><a href=\"?pg=about\" id=\"topmenulinks\" title=\"Firmamýz\"><div id=menu>Factory</div></a></div>"; }
		else { echo "<div id=topmenulink><a href=\"?pg=about\" id=\"topmenulink\" title=\"Firmamýz\"><div id=menu>Factory</div></a></div>"; }
		if ($pg=='export')
	{ echo "<div id=topmenulinks><a href=\"?pg=export\" id=\"topmenulinks\" title=\"export\"><div id=menu>Export</div></a></div>"; }
	else { echo "<div id=topmenulink><a href=\"?pg=export\" id=\"topmenulink\" title=\"Export\"><div id=menu>Export</div></a></div>"; }
	
	if ($pg=='contact')
	{ echo "<div id=topmenulinks><a href=\"?pg=contact\" id=\"topmenulinks\" title=\"Ýletiþim\"><div id=menu>Contact</div></a></div>"; }
	else { echo "<div id=topmenulink><div id=menu><a href=\"?pg=contact\" id=\"topmenulink\" title=\"Ýletiþim\">Contact</a></div></div>"; }		 	

?>