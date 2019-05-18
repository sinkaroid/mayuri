<title>MayushiiWeather</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<a style='display:scroll;position:fixed;Bottom:0px;left:0px;' title='Mayushii here'><img src='img/left.png' width='500' height='550'/></a> 
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="rain.js"></script>
<center>
<font face=Ubuntu>
<?php
require 'str.php';
$curl = curl_init('http://www.bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg'); //victim
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);
echo'<h2>';
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "<font color=red>tanyakan cuaca kepada mayuri...</font><br>Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<b>, Selamat Pagi !!</b>";
}
else if(($a>11) && ($a<=15))
{
echo ", Selamat Pagi !!";}
else if (($a>15) && ($a<=18)){
echo ", Selamat Siang !!";}
else { echo ", <b> Selamat Malam </b>";}
echo'</h2><hr width=40%><p>';
$regex = '/<div class="table-responsive">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter(" '<font face=Ubuntu><div class='rounded'>',$list[0] "); 
else 
    print "Not found"; 
?>
</div></div><br>
Source: bmkg.go.id | &copy; Sin.
<iframe width="0" height="0" src="http://www.youtube.com/embed/QfSiW03GdVY?autoplay=1&cc_load_policy=1" frameborder="0"
allowfullscreen></iframe>