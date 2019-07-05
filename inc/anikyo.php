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
    $ambilkata = str_replace('<h3>Penutup</h3>', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<p>Selamat', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<li>', '<center>', $ambilkata);
    $ambilkata = str_replace('<div class="kontent dl gantol">', '<div class="kontent dl gantol">', $ambilkata);
    $ambilkata = str_replace('<div class="kontent sinop gantol">', '<br><div class="sino">', $ambilkata);
    $ambilkata = str_replace('<div class="downloadcloud">', '<br><div class="kotak">', $ambilkata);
    $ambilkata = str_replace('<div class="kontent infox gantol">', '<div class="infox">', $ambilkata);

    //openurl
       //openurl
      
       $ambilkata = str_replace('<a href="', '<a href="/anikyojin/get.php?anti=', $ambilkata);
       $ambilkata = str_replace('indonesia/', 'indonesia/&fansub=SUCK', $ambilkata);
    
    return $ambilkata;
}
$curl = curl_init('https://anikyojin.net/sewayaki-kitsune-sub-indo/'); //victim

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

$judul = '/<div class="thumbnail3">(.*?)<div class="pentupok">/s';
if ( preg_match($judul, $page, $list) )
	
echo wordFilter($list[1]);
else 
    print "Not found"; 

?>