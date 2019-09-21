<?php
session_start();
$api = 'http://localhost:8000';
$headers = apache_request_headers();

if($headers['Host']=='www.localhost'){
    $client_id = 6;
    $client_secret = 'BMj67gKYfceREeB6i2kceUYs2S7x2QAR0M3EYdZW';
    $SiteName = 'fanballbet';
}
?>