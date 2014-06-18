<?php
$file = "./moderators.txt";
$handle = fopen($file, 'a');

$url = $_GET['url'];
$ch = curl_init($url);
$strCookie = 'sessid=' . SESSION_ID . '; path=/';  
curl_setopt($ch, CURLOPT_COOKIE, $strCookie);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$page = curl_exec($ch);
curl_close($ch);

/*preg_match('/<span class="px10">\((.*)\)<\/span>/', $page, $output);
if($output[1] != "Moderator" && $output[1] != "Admin")
	exit;*/
preg_match('/<a class="userlink"(.*)>(.*)<\/a>/', $page, $output);
if($output[2])
	$scrape .= $output[2] . " ";
else $scrape .= "* ";
preg_match('/voornaam:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/achternaam:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/geslacht:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/woonplaats:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/geboortedatum:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/geregistreerd op:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/laatste bezoek:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . " ";
else $scrape .= "* ";
preg_match('/aantal posts:<\/span><\/td><td>(.*)<\/td>/', $page, $output);
if($output[1])
	$scrape .= $output[1] . "\n";
else $scrape .= "*\n";
var_dump($output);
/**/
fwrite($handle, $scrape);
fclose($handle);
?>