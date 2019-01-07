<?php
header("Access-Control-Allow-Origin:http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type");
header('Content-type:text/html;charset=utf-8');

session_start();

$data = file_get_contents("php://input");
$data = json_encode($data);

$message = array('message'=>"success");

if(isset($_SESSION['username']) && $_SESSION['username']==='123'){
    $_SESSION['un'] = $data->username;
    $_SESSION[psw] = $data->password;
    return $message;

    echo json_encode($message);
}else{
    $message['message'] = 'error';
    echo json_encode($message);


}







