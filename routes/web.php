<?php
$uri = $_SERVER['REQUEST_URI'];
echo $uri;
if ($uri == "/exam/public/") {
    require_once '../views/home.php';
}
?>

