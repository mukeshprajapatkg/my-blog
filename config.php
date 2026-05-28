<?php

define('BASE_URL', 'http://localhost/Proprofs_blog/');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/Proprofs_blog/');


$conn =  mysqli_connect ('localhost', 'root', '', 'proprofs_blog');

if (!$conn) {
    die("Connection failed");
}
?>