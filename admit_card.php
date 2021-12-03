<?php

include('configs/functions.inc.php');

validateAccss();

$pdfapi = 'https://shiatsmail.edu.in/students/UETACard/2021/'.$_GET['pid'].'/'.$_GET['pid'].'.pdf';
$pdfheds[] = 'Referer: https://shiatsmail.edu.in/';
$pdfheds[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
$pdfheds[] = 'accept-language: en-US,en;q=0.9';
$pdfheds[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$process = curl_init($pdfapi);
curl_setopt($process, CURLOPT_HTTPHEADER, $pdfheds); 
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_ENCODING, '');
curl_setopt($process, CURLOPT_TIMEOUT, 10); 
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1); 
$return = curl_exec($process); 
$httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
curl_close($process); 

if($httpcode == "200" || $httpcode == 200)
{
    header("content-type: application/pdf");
    print($return);
}
else
{
    http_response_code(404);
    exit('Admit Card Not Available');
}
?>
