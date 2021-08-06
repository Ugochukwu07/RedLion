<?php 
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){  
    $url = "https://";   
}else{ 
    $url = "http://"; 
}  
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];
$LOCAL = strpos($url, 'localhost:8080') ? 1 : 0;

if($LOCAL){
    define('ROOT_PATH', realpath(dirname(__FILE__)));
    define('BASE_URL', 'http://localhost:8080/RedLion');
    define('HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'mazzy_dap');
    define("DEMO", true);
}else{
    define('ROOT_PATH', realpath(dirname(__FILE__)));
    error_reporting(0);
    define('BASE_URL', 'https://storelad.com/RedLion');
    define('HOST', 'localhost');
    define('DB_USER', 'mazzydap_admin');
    define('DB_PASS', 'omo]2R1+4mK6SC');
    define('DB_NAME', 'mazzydap_main');
    define("DEMO", false);
}
//echo ROOT_PATH;

include('define.php');
//helpers function
include(ROOT_PATH . '/app/helpers/functions.php');
?>
