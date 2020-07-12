<?php
require_once("Manager.php");
require_once("model/global.php");

class EmergencyManager  extends Manager
{
   

    // upload's user profile profile picture and returns the name of the file
    public static function uploadFilePicture($file)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        if (!empty($file) && !empty($file['name'])) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
            // define Where image will be stored
            $target = "public/img/" . $profile_picture;
            // upload image to folder
            if (move_uploaded_file($file['tmp_name'], $target)) {
                $url = API_ROOT_PATH . "/files";
                $res = array();
                $res['file_name'] = $file['name'];
                $res['file_url'] = $target;
                $res['file_type'] = $file['type'];
                $res['file_size'] = $file['size'];
                //Manager::showError($res);
                $res = self::addoNTable($url, $res);
                $res = self::correct($res);
                if ($res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                } else {
                    return $res['lastId'];
                }
                exit();
            } else {
                return 'Erreur lors de l\'jout de la photo';
            }
        }
    }

    public static function addEmergency($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $data['files'] = self::uploadFilePicture($data['files']);
        $data['files'] = intval($data['files']);
        if (!is_int($data['files']) && $data['files'] == 0) {
            return $data['files'];
        }

        $url = API_ROOT_PATH . "/emergency_geste";
        $res = self::addoNTable($url, $data);
        //Manager::showError($res);
        $res = self::correct($res);
        if ($res['error']) {
            return $res;
        }

        return 1;
    }

    public static function addPlan($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $data['file'] = self::uploadFilePicture($data['file']);
        $data['file'] = intval($data['file']);
        if (!is_int($data['file']) && $data['file'] == 0) {
            return $data['file'];
        }

        $url = API_ROOT_PATH . "/plan";
        $res = self::addoNTable($url, $data);
        //Manager::showError($res);
        $res = self::correct($res);
        if ($res['error']) {
            return $res;
        }

        return 1;
    }
}
