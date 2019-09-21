<?php
// First, include Requests
include('../common/config.php');
include('library/Requests.php');
$headers = apache_request_headers();
// Next, make sure Requests can load internal classes
Requests::register_autoloader();

header('Content-Type: application/json');

// Now let's make a request!
//if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_GET['route'])){
        $route = '?route='.$_GET['route'];
        //print($_GET['route']);
    }
    
    $postdata = http_build_query($_POST);
    $request = Requests::post($api.'/api/register', array('SITE'=>$SiteName), $_POST);

    // Check what we received
    echo $request->body;
    //}
?>