<?php
require_once("Manager.php");
require_once("model/global.php");

class UserManager  extends Manager
{

    public static function addModule($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }

    private static function verifUser($data)
    {
        if (!is_array($data)) {
            return 'Une erreur s\'est produite';
        }

        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        if (strlen($data['password_']) < 6) {
            return "Le mot de passe est très court, au moins 6 caractère sont requis";
        }

        if (trim($data['password_']) !== trim($data['password_2'])) {
            return "Les mot de passe ne correspondent pas, veuillez verifier";
        }

        return 1;
    }

    public static function activeUser($data)
    {
        $res = self::verifUser($data);

        if ($res != 1) {
            return $res;
        }
        $url = API_ROOT_PATH . "/users/phone_number/" . $data['phone_number'];
        //die($url);
        $res = self::getData('users', 'phone_number', $data['phone_number']);
        if ($res == 0) {
            return "Ce numéro n'existe pas dans notre base de donnée";
        }

        unset($data['password_2']);
        $data['updated_at'] = date('Y-m-d h:i:s', time());;
        $data['status'] = 1;
        $res = self::file_put_contents($url, $data);
        $res = self::correct($res);
        if ($res['error']) {
            return $res['message'];
        }

        return 1;
    }

    public static function connectUser($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::getData('users', 'phone_number', $data['phone_number']);
        if (!empty($res['error']) || is_string($res) ) {
            return 'N° de téléphone ou mot de passe incorrecte';
        } else {

            $res = $res['data'];
            if (password_verify($data['password_'], $res['password_'])) {
                $_SESSION['user-iniger']['id'] = $res['id'];
                $_SESSION['user-iniger']['first_name'] = $res['first_name'];
                $_SESSION['user-iniger']['last_name'] = $res['last_name'];
                $_SESSION['user-iniger']['matricule'] = $res['matricule'];
                $_SESSION['user-iniger']['phone_number'] = $res['phone_number'];
                $_SESSION['user-iniger']['role'] = self::getData('roles', 'id', $res['role'])['data']['name'];
                $_SESSION['user-iniger']['roleId'] = self::getData('roles', 'id', $res['role'])['data']['id'];
                $_SESSION['user-iniger']['type_agent'] = self::getData('type_agent', 'id', $res['type_agent'])['data']['label'];
                $_SESSION['user-iniger']['photo'] = self::getData('files', 'id', $res['photo'])['data']['file_url'];
                if (!empty($res['entity'])) {
                    $entity = $res = self::getData('entity', 'id_entity', $res['entity'])['data'];
                    $_SESSION['user-iniger']['entity'] = $entity;
                }
                return 1;
            } else {
                return 'N° de téléphone ou mot de passe incorrecte';
            }
            return $res['data'];
        }
    }
    public static function connectUserMobile($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::getData('users', 'phone_number', $data['phone_number']);
        // die(print_r($res));
        if (!empty($res['error']) || is_string($res)) {
            return 'N° de téléphone incorrecte';
        } else {

            $res = $res['data'];
            $_SESSION['user-iniger']['id'] = $res['id'];
            $_SESSION['user-iniger']['first_name'] = $res['first_name'];
            $_SESSION['user-iniger']['last_name'] = $res['last_name'];
            $_SESSION['user-iniger']['matricule'] = $res['matricule'];
            $_SESSION['user-iniger']['phone_number'] = $res['phone_number'];
            $_SESSION['user-iniger']['role'] = self::getData('roles', 'id', $res['role'])['data']['name'];
            $_SESSION['user-iniger']['roleId'] = self::getData('roles', 'id', $res['role'])['data']['id'];
            $_SESSION['user-iniger']['type_agent'] = self::getData('type_agent', 'id', $res['type_agent'])['data']['label'];
            $_SESSION['user-iniger']['photo'] = self::getData('files', 'id', $res['photo'])['data']['file_url'];
            return 1;
        }
    }

    // upload's user profile profile picture and returns the name of the file
    public static function uploadProfilePicture($file)
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

    public static function addUser($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $data['photo'] = self::uploadProfilePicture($data['profile_picture']);
        $data['photo'] = intval($data['photo']);
        if (!is_int($data['photo']) && $data['photo'] == 0) {
            return $data['photo'];
        }

        unset($data['profile_picture']);
        $url = API_ROOT_PATH . "/users";
        $res = self::addoNTable($url, $data);
        //Manager::showError($data);
        $res = self::correct($res);
        if ($res['error']) {
            return $res;
        }

        return 1;
    }
}
