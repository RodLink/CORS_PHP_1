<?php
header("Access-Control-Allow-Origin:http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials:true");
header("Context-Type:text/json");


$userName = array('userName'=>$_SESSION['userName']);
echo json_encode($userName);
//RodLink
//2019年1月3日 08:20:56

