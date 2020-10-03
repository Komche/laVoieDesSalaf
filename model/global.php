<?php
$folder = '';

define ('HOST', "http://" . $_SERVER ['HTTP_HOST']); // get the hostname

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $folder = '/IslamNiger';
}

define('ROOT_PATH', HOST . "$folder");
define('API_ROOT_PATH', HOST . "$folder/api/object");
define('FIRESTORE_PATH',"https://firestore.googleapis.com/v1/projects/test-gdg-406a8/databases/(default)/documents/");