<center>
<div id="steal"><a href="list" rel="nofollow" target="_blank"><font size="3" color="white"><b>Animelist<b/></font></a></div>
<br><br>
<?php
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<li>', '<center>', $ambilkata);
    $ambilkata = str_replace('<li class="tagsin">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="moregan">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<span class="fa fa-tags">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<span class="fa fa-comments">', '<p hidden>', $ambilkata);

    //style
    $ambilkata = str_replace('<div class="thumbnail">', '<div class="kotak">', $ambilkata);
       //openurl
      
       $ambilkata = str_replace('<a href="', '<a href="inc/get.php?anti=', $ambilkata);
       $ambilkata = str_replace('indo/', 'indo/&fansub=SUCK" rel="nofollow" target="_blank"', $ambilkata);
    return $ambilkata;
}
$curl = curl_init('https://anikyojin.net/'); //victim

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

$judul = '/<div class="artikelwrap">(.*?)<div class="navindex">/s';
if ( preg_match($judul, $page, $list) )
	
echo wordFilter($list[1]);
else 
    print "Not found"; 
