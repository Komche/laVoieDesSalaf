<?php
// header('Access-Control-Allow-Origin: http://www.base.aemn-niger.org/', false);
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, OPTIONS");
include_once('../class/Files.php');
//Set Access-Control-Allow-Origin with PHP
function bdd()
{
    $dbname = 'akoybizc_baseaemn';
    $user = 'akoybizc_komche';
    $pass = '@damoukomche2019';
    $host = 'localhost';
    if ($_SERVER["SERVER_NAME"] == 'localhost') {
        $dbname = 'baseaemn';
        $user = 'root';
        $pass = '';
        $host = 'localhost';
    }
    try {
        $pdo_options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true
        );
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$user", "$pass", $pdo_options);
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
    return $bdd;
}

 function modifRecord($sql, $params)
    {
        $req = bdd()->prepare($sql);
        $res = $req->execute($params);
        return $res;
    }
if (isset($_POST['img'])) {
    $img = $_POST['img']; //getting post img data
    $img = substr(explode(";", $img)[1], 7); //converting the data 
    $target = $_POST['name'] . time() . '.png'; //making file name
    file_put_contents('../../public/img/card/' . $target, base64_decode($img)); //converting the $img with base64 and putting the image data in uploads/$target file name  
    //now just check in your upload folder you will get your html div image in that folder
    $file = new Files();
    $id = $file->uploadFilePicture(null, "public/img/card/".$target);
    if (strpos($target, "verso")!==false) {
        $sql = "UPDATE membre SET card_membre_verso=? WHERE id_membre=?";
        echo modifRecord($sql, [$id, $_POST['membre']]);
    } else {
        $sql = "UPDATE membre SET card_membre=? WHERE id_membre=?";
        echo modifRecord($sql, [$id, $_POST['membre']]);
    }
}
if (isset($_POST['profile_img'])) {
    $img = $_POST['profile_img']; //getting post img data
    $img = substr(explode(";", $img)[1], 7); //converting the data 
    $target =  time() . '.png'; //making file name
    file_put_contents('../../public/img/' . $target, base64_decode($img)); //converting the $img with base64 and putting the image data in uploads/$target file name  
    //now just check in your upload folder you will get your html div image in that folder
    $file = new Files();
    $id = $file->uploadFilePicture(null, "public/img/".$target);
    
    echo $id;
}
