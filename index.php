<title>aniKyojin</title>
<link rel="stylesheet" type="text/css" href="inc/style.css">
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<style>

  body { 
   background: black url("src/b.jpg") no-repeat fixed center; 
 }
  </style>
  <center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
  ___        _ _   __            _ _       
 / _ \      (_) | / /           (_|_)      
/ /_\ \_ __  _| |/ / _   _  ___  _ _ _ __  
|  _  | '_ \| |    \| | | |/ _ \| | | '_ \ 
| | | | | | | | |\  \ |_| | (_) | | | | | |
\_| |_/_| |_|_\_| \_/\__, |\___/| |_|_| |_|
                      __/ |    _/ |        
                     |___/    |__/         
                          Your coins end here.
</pre></div>
<center>
<?php
echo '<font face=Consolas color=gold size=3>';
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "[<font color=green>d</font> : <b>(".date("d-M-Y", $tanggal).")</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "-> <font color=green>t</font> : <b>(". $jam.") "."</b> -> ";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<font color=white><b>Morning</font></b>]";
}
else if(($a>11) && ($a<=15))
{
echo ", Morning";}
else if (($a>15) && ($a<=18)){
echo ", Good day";}
else { echo ", <b> Night</b>";}
echo '</font>';
?>

<div class="koceng">
<font face="courier" size="3" color="gray">
<pre>
> static site to getData from many fansub
> put params <font color=red>/list or ?list</font> to view all library
</pre>
</div>
</font>


<?php
echo '<font face=Ubuntu color=gold><center>
<div id="steal"><a href="list" rel="nofollow" target="_blank"><font size="3" color="white"><b>animelist<b/></font></a></div>';
require 'inc/str.php';
?>
<center>
<br>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anikyojin</font>
</font>
</div>   