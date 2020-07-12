<?php
require("Manager.php");
require_once("model/global.php");

class RoleManager  extends Manager
{

    public static function addModule($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }

}
