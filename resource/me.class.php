<?php
include('library/Requests.php');

Requests::register_autoloader();

Class Me
{
    function get($api,$accessToken)
    {
        global $SiteName;
        $req_headers = array(
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$accessToken,
            'SITE'=>$SiteName,
        );
        
        $request = Requests::get($api.'/api/users', $req_headers);
        return json_decode($request->body);
        //return $request->body;
    }
} 

?>