<?php
header("Access-Control-Allow-Origin:http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type");
header('Content-type:text/html;charset=utf-8');
session_start();
    if(isset($_SESSION['username']) && $_SESSION['username']==='123'){
            session_unset();
            session_destroy();

           return 'success';
        }else{
           return 'sadsasa';
        }
?>
