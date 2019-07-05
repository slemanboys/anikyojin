<style>

 .toto {
	text-align: center;
  }
  body { 
   background: black url("b.png") no-repeat fixed center; 
 }
 a {
   color: pink;
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
   background-color: #655f64;
   width: 30%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }
  </style>

<?php
echo '<font face=Consolas color=gold><center>';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;
   
    $ambilkata = str_replace('<li>', '<center>', $ambilkata);


    //openurl
       //openurl
      
       $ambilkata = str_replace('<a href="', '<a href="/anikyojin/inc/get.php?anti=', $ambilkata);
       $ambilkata = str_replace('" title=', '&fansub=SUCK " title=', $ambilkata);
    
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