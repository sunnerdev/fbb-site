<?php
include('config.php');
include('library/Requests.php');
$headers = apache_request_headers();

Requests::register_autoloader();

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $req_headers = array(
        'Host'=>$headers['Host'],
        'Accept'=>'application/json'
    );

    
    $_POST['Host']=$headers['Host'];
    
    
    $request = Requests::post($api.'/api/register', $req_headers , $_POST);
    $json = json_decode($request->body);
//echo $request->body;
    if($json->success==false)
    {
        $status['status']=0;
        $status['data'] = $json->data;
        $status['body'] = $request->body;
        echo json_encode($status);
        exit;
    }

    if($json->token_type=='Bearer')
    {
        /*$_SESSION['access_token']=$json->access_token;
        $_SESSION['refresh_token']=$json->refresh_token;
        $_SESSION['expires_in']=$json->expires_in;*/
        $status['status']=1;
        //$status['session']=$_SESSION;
        $status['msg'] = 'Pass';
        echo json_encode($status);
        exit;
    }
}
?>