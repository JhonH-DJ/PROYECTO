<?php 
$uri = $_SERVER["REQUEST_URI"];
echo $uri;
if ($uri == "/proyecto/public/"){
    require_once "../views/home.php";
}else{
    require_once '404.php';
}