<?php
//include('../common/config.php');
//include('library/Requests.php');
//Requests::register_autoloader();

$req_headers = array(
    'Accept' => 'application/json',
    'Authorization' => 'Bearer '.$_SESSION['access_token'],
    'SITE'=>$SiteName,
);
        
$request = Requests::get($api.'/api/products', $req_headers);
$data = json_decode($request->body);
$data = $data->data;
//print_r($data);

foreach ($data as $key => $value) {
    
    $navArr[] = $value->cate_name;
    
    $subnavArr[$value->cate_name][] = $value;

    $product_wallet[$value->cate_name] = array('id' => $value->id,'name' => $value->cate_name);
    //$product_wallet['name'][] = $value->cate_name;
}

$navArr = array_unique($navArr);

$nav = '';
$subnav = '';
foreach($navArr as $val)
{
    $nav .='<li id="nav'.$val.'">
        <a class="subcontent" data-subcontent="'.$val.'" href="product?p='.$val.'" title="'.$val.'">
            <h2>'.$val.'</h2>
        </a>
    </li>
    ';

    

    $subnav .='<div class="potm"><div id="'.$val.'Menu" class="'.$val.' hide">';

        
    foreach($subnavArr[$val] as $subval)
    {
        //print_r($subval);
        $subnav .='
        <a id="'.$subval->product_url.'Menu" href="javascript:load_asports();"
            class="subcontent_button menu_seven_column">
            <h3>'.$subval->name.'</h3>
            <div class="bg">
                <img src="_static/img/blank.png"
                    data-src="/_static/menu/img/sports/7_item/asports_th.png"
                    style="height: 164px;">
                <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                <!--<sup>ใหม่</sup>-->
            </div>
        </a>';
    }
    $subnav .= '<div class="clear"></div>
    </div></div>';
}

//print_r($product_wallet);
//echo $nav;
//echo htmlentities($subnav);
//var_dump($returns,$value);
//echo json_encode($returns);
?>