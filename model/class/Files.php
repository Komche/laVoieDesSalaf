<?php
require_once("Manager.php");
// require_once("model/global.php");

class Files
{

    public $file_name;
    public $file_url;
    public $file_type;
    public $file_size;



    // upload's user profile profile picture and returns the name of the file
    public function uploadFilePicture($file = null, $url = null, $i = null)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        if (!empty($file) && !empty($file['name']) && empty($i)) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
            // define Where image will be stored
            $target = "public/img/" . $profile_picture;
            // upload image to folder
            //Manager::showError($file);

            if (($file['type'] == "image/gif") || ($file['type'] == "image/jpeg") || ($file['type'] == "image/png") || ($file['type'] == "image/pjpeg")) {

                $isOk = $this->compressImage($file['tmp_name'], $target, 60);
                // Manager::showError($isOk);
                if ($isOk) {
                    // $url = API_ROOT_PATH . "/files";
                    $res = array();
                    $this->setFile_name($file['name']);
                    $this->setFile_url($target);
                    $this->setFile_type($file['type']);
                    $this->setFile_size($file['size']);
                    $manager = new Manager();
                    $res = $manager->insert($this);
                    // var_dump($this);
                    //$res = self::addoNTable($url, $res);
                    // Manager::showError($res);
                    //$res = self::correct($res);
                    $res['lastId'] = Manager::lastID("files", "id");
                    if ($res['error']) {

                        return 'Erreur lors de l\'jout de la photo';
                    } else {
                        return $res['lastId'];
                    }
                    exit();
                }
            }  elseif (move_uploaded_file($file['tmp_name'], $target)) {
                // $url = API_ROOT_PATH . "/files";
                $res = array();
                $this->setFile_name($file['name']);
                $this->setFile_url($target);
                $this->setFile_type($file['type']);
                $this->setFile_size($file['size']);
                $manager = new Manager();
                $res = $manager->insert($this);
                // Manager::showError($this);
                //$res = self::addoNTable($url, $res);
                //$res = self::correct($res);
                if ($res['code'] == 0 || $res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                } else {
                    return $res['lastId'];
                }
                exit();
            } else {
                return 'Erreur lors de l\'jout de la photo';
            }
        }elseif (empty($i)) {
             // Get image name
             $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
             // define Where image will be stored
             $target = "public/img/" . $profile_picture;
             // upload image to folder
             //Manager::showError($file);
            if (move_uploaded_file($file['tmp_name'][$i], $target)) {
                // $url = API_ROOT_PATH . "/files";
                $res = array();
                $this->setFile_name($file['name'][$i]);
                $this->setFile_url($target);
                $this->setFile_type($file['type'][$i]);
                $this->setFile_size($file['size'][$i]);
                $manager = new Manager();
                $res = $manager->insert($this);
                // Manager::showError($this);
                //$res = self::addoNTable($url, $res);
                //$res = self::correct($res);
                if ($res['code'] == 0 || $res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                } else {
                    return $res['lastId'];
                }
                exit();
            }
        }

        if (!empty($url)) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s");
            // define Where image will be stored
            // upload image to folder
            //Manager::showError($file);

            $res = array();
            $this->setFile_name("memberCard" . $profile_picture);
            $this->setFile_url($url);
            $this->setFile_type("png");
            $this->setFile_size("0");
            $manager = new Manager();
            $res = $manager->insert($this);
            // Manager::showError($this);
            //$res = self::addoNTable($url, $res);
            //$res = self::correct($res);
            if ($res['error']) {
                return 'Erreur lors de l\'jout de la photo';
            } else {
                return $res['lastId'];
            }
            exit();
        }
    }

    // upload's user profile profile picture and returns the name of the file
    public function uploadFileArray($file = null, $i = null)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        // var_dump($file['name'][$i]); die("ok $i");
        if (!empty($file['name'][$i])) {
             // Get image name
             $profile_picture = date("Y.m.d.H.i.s") . $file['name'][$i];
             // define Where image will be stored
             $target = "public/img/" . $profile_picture;
             // upload image to folder
             //Manager::showError($file);
             if (move_uploaded_file($file['tmp_name'][$i], $target)) {
                 // $url = API_ROOT_PATH . "/files";
                 $res = array();
                 $this->setFile_name($file['name'][$i]);
                 $this->setFile_url($target);
                 $this->setFile_type($file['type'][$i]);
                 $this->setFile_size($file['size'][$i]);
                 $manager = new Manager();
                 $res = $manager->insert($this);
                 $res['src'] = $target;
                //  Manager::showError($res);
                //  die("ok $target");
                //$res = self::addoNTable($url, $res);
                //$res = self::correct($res);
                if ($res['code'] == 0 || $res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                } else {
                    return $res;
                }
                exit();
            }
        }

        if (!empty($url)) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s");
            // define Where image will be stored
            // upload image to folder
            //Manager::showError($file);

            $res = array();
            $this->setFile_name("memberCard" . $profile_picture);
            $this->setFile_url($url);
            $this->setFile_type("png");
            $this->setFile_size("0");
            $manager = new Manager();
            $res = $manager->insert($this);
            // Manager::showError($this);
            //$res = self::addoNTable($url, $res);
            //$res = self::correct($res);
            if ($res['error']) {
                return 'Erreur lors de l\'jout de la photo';
            } else {
                return $res['lastId'];
            }
            exit();
        }
    }

    function compressImage($source_url, $destination_url, $quality)
    {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
        elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
        return imagejpeg($image, $destination_url, $quality);
    }

    /**
     * Get the value of file_name
     */
    public function getFile_name()
    {
        return $this->file_name;
    }

    /**
     * Set the value of file_name
     *
     * @return  self
     */
    public function setFile_name($file_name)
    {
        $this->file_name = $file_name;

        return $this;
    }

    /**
     * Get the value of file_url
     */
    public function getFile_url()
    {
        return $this->file_url;
    }

    /**
     * Set the value of file_url
     *
     * @return  self
     */
    public function setFile_url($file_url)
    {
        $this->file_url = $file_url;

        return $this;
    }

    /**
     * Get the value of file_type
     */
    public function getFile_type()
    {
        return $this->file_type;
    }

    /**
     * Set the value of file_type
     *
     * @return  self
     */
    public function setFile_type($file_type)
    {
        $this->file_type = $file_type;

        return $this;
    }

    /**
     * Get the value of file_size
     */
    public function getFile_size()
    {
        return $this->file_size;
    }

    /**
     * Set the value of file_size
     *
     * @return  self
     */
    public function setFile_size($file_size)
    {
        $this->file_size = $file_size;

        return $this;
    }
}
