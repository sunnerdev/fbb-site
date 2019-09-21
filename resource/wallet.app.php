<?php
include('../common/config.php');
include('library/Requests.php');

Requests::register_autoloader();

header('Content-Type: application/json');

$req_headers = array(
    'Accept' => 'application/json',
    'Authorization' => 'Bearer '.$_SESSION['access_token'],
    'SITE'=>$SiteName,
);

if($_POST['id']!=''){
    $request = Requests::get($api.'/api/wallets/'.$_POST['id'], $req_headers);
    echo $request->body;
    exit;
}

if($_POST['product_id']!=''){
    $request = Requests::post($api.'/api/wallets', $req_headers , $_POST);
    echo $request->body;
    exit;
}
?>