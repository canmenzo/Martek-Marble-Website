<?
function titleal($pg,$link,$urun){
if ($urun!='') {
 $data=mysql_query("select * from item where item_id=$urun");
 $data_=mysql_fetch_row($data);
  $cat=mysql_query("select * from category where cat_id='$data_[5]'");
  $cat_=mysql_fetch_row($cat);
 echo "$data_[1] | $cat_[1] | Martek Marble";
}
else {
if ($pg=='haber') {
$haber=mysql_query("select * from news where id='$link'") or die("Hata");
$haber_=mysql_fetch_array($haber);
echo "$haber_[title] | Martek Marble";
}
else {
$sayfa=mysql_query("select * from seo where link='$pg'");
$sayfanum=mysql_num_rows($sayfa);
if ($sayfanum=='0') {$sayfa=mysql_query("select * from seo where link=''"); }
$sayfa_=mysql_fetch_array($sayfa);
echo "$sayfa_[title]";
}
}
}
function metaal($pg,$urun){
if ($urun!='') {
 $data=mysql_query("select * from item where item_id='$urun'") or die("Hata metaals");
 $data_=mysql_fetch_array($data);


echo "<meta name=\"description\" content=\"$data_[descr]\">
<meta name=\"keywords\" content=\"$data_[keyword]\">
<meta name=\"googlebot\" content=\"index, follow\">
<meta name=\"copyright\" content=\"2009, MartekMarble.com\" />
<meta name=\"distribution\" content=\"global\" />
<meta name=\"Owner\" content=\"Martek Marble\" />
<meta name=\"Author\" content=\"ION Danýþmanlýk\" />
";

}
else {

$sayfa=mysql_query("select * from seo where link='$pg'");
$sayfanum=mysql_num_rows($sayfa);
if ($sayfanum=='0') {$sayfa=mysql_query("select * from seo where link=''"); }
$sayfa_=mysql_fetch_array($sayfa);

echo "<meta name=\"description\" content=\"$sayfa_[descrp]\">
<meta name=\"keywords\" content=\"$sayfa_[keyw]\">
<meta name=\"googlebot\" content=\"index, follow\">
<meta name=\"copyright\" content=\"2009, Martekmarble.com\" />
<meta name=\"distribution\" content=\"global\" />
<meta name=\"Owner\" content=\"Martek Marble\" />
<meta name=\"Author\" content=\"ION Danýþmanlýk\" />
";
}
}
?>
