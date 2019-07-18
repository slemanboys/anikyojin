<title>aniKyojin | animeList</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<style>

 .toto {
	text-align: center;
  }


  body { 
   background: black url("http://localhost/anikyojin/src/a.jpg") no-repeat fixed center; 
 }
 a {
   color: hotpink;
 }

 .sino {
   margin: auto;
   background-color: #655f64;
   width: 50%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 .kotak {
   margin: auto;
   background-color: #655f64;
   width: 40%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 .infox {
  margin: auto;
   background-color: #ffffff;
   width: 40%;
   
   padding: 20px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 .koceng {
  display: inline-block;
  text-align: left;
 }
 
 .intro {
   margin: auto;
   background-color: #f7f3f3;
   width: 30%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }
  </style>

<?php
echo '<font face=Ubuntu color=green>
<center>[animelist]</center><p>
<div class="infox">';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;
   
    $ambilkata = str_replace('', '', $ambilkata);


    //openurl
       //openurl
      
       $ambilkata = str_replace('<a href="', '<a href="/anikyojin/inc/get.php?anti=', $ambilkata);
       $ambilkata = str_replace('" title=', '&fansub=SUCK " rel="nofollow" target="_blank" title=', $ambilkata);
    
    return $ambilkata;
}
$curl = curl_init('https://anikyojin.net/anime-list-2/'); //victim

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

$judul = '/<div class="animelist">(.*?)<div class="sidebar">/s';
if ( preg_match($judul, $page, $list) )
	
echo wordFilter($list[1]);
else 
    print "Not found"; 

?>
<?php
$dom = new \DOMDocument();
@$dom->loadHTML($page); // or @$dom->loadHTMLFile($filename); if providing filename rather than actual HTML content

$count = $dom->getElementsByTagName("li")->length;
echo '<br><center>Founded <b>',$count,' </b>AnimeDB</center>';

?>
</div><br><br>
<center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anikyojin</font>
</font>
</div>   