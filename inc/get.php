<title>aniKyojin | Download</title>
<font face=Consolas color=gold>
<center>
<style>

.toto {
	text-align: center;
  }
  body { 
   background: black url("/anikyojin/src/b.jpg") no-repeat fixed center; 
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



if(isset($_GET['fansub'])){
$anti = $_GET['anti'];
$curl = curl_init($anti); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


//anime info    
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = $text;
    $ambilkata = str_replace('<h3>Penutup</h3>', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<p>Selamat', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<li>', '<center>', $ambilkata);
    $ambilkata = str_replace('<div class="kontent dl gantol">', '<div class="kontent dl gantol">', $ambilkata);
    $ambilkata = str_replace('<div class="kontent sinop gantol">', '<br><div class="sino">', $ambilkata);
    $ambilkata = str_replace('<div class="downloadcloud">', '<br><div class="kotak">', $ambilkata);
    $ambilkata = str_replace('<div class="kontent infox gantol">', '<div class="infox">', $ambilkata);
    return $ambilkata;
}

$regex = '/<div class="thumbnail3">(.*?)<div class="pentupok">/s';
if ( preg_match($regex, $page, $list) )

    echo wordFilter3($list[0]); 


}


?>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anikyojin</font>
</font>
</div>   