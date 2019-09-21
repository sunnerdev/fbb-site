<?php
include('config.php');
include('library/Requests.php');


Requests::register_autoloader();

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $req_headers = array(
        'Host'=>$headers['Host'],
        'SITE'=>'aaaaa',
        'Accept'=>'application/json'
    );

    $req_body = array(
        'Host'=>$headers['Host'],
        'username'=>$_POST['username'],
        'password'=>$_POST['password'],
        'client_id'=>$client_id,
        'client_secret'=>$client_secret,
        'grant_type'=>'password'
    );
    
    $request = Requests::post($api.'/oauth/token', $req_headers , $req_body);
    $json = json_decode($request->body);

    if($json->error)
    {
        $status['status']=0;
        $status['msg'] = $json->message;
        echo json_encode($status);
        exit;
    }

    if($json->token_type=='Bearer')
    {
        $_SESSION['access_token']=$json->access_token;
        $_SESSION['refresh_token']=$json->refresh_token;
        $_SESSION['expires_in']=$json->expires_in+time();
        $status['status']=1;
        $status['session']=$json;
        $status['msg'] = 'Pass';
        echo json_encode($status);
        exit;
    }
}
?>