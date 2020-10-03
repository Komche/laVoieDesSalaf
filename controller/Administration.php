<?php
include_once('model/class/RoleManager.php');
include_once('model/class/UserManager.php');
include_once('model/class/EmergencyManager.php');
include_once('model/class/MenuManager.php');
include_once('model/class/Files.php');
include_once('model/database/module.php');
include_once('model/database/roles.php');
include_once('model/database/ville.php');
include_once('model/database/bureau.php');
include_once('model/database/etablissement.php');
include_once('model/database/filiere.php');
include_once('model/database/membre.php');
include_once('model/database/poste.php');
include_once('model/database/exercice.php');
include_once('model/database/niveau.php');
include_once('model/database/exercice_membre.php');
include_once('model/database/country.php');
include_once('model/database/cannonces.php');
include_once('model/database/cactualites.php');
include_once('model/database/clivres.php');
include_once('model/database/statuts.php');
include_once('model/database/langues.php');


function addData($data, $table)
{
    $url = API_ROOT_PATH. "/object/$table";
    $res = Manager::addoNTable($url, $data, $table);
    // Manager::showError($res);
    $res = Manager::correct($res);
    if (isset($res['error'])) {
        if (!$res['error']) {
            $lastId = $res['lastId'];
            if (!empty($lastId)) {
                $res = Manager::addHistory($table, $lastId);
                if ($res != 1) {
                    return $res['message'];
                }else {
                    return 1;
                }
            }else {
                return $res['message'];
            }
        }else {
            return $res['message'];
        }
    }else {
        return $res['message'];
    }
}

function update($table, $data, $property, $val)
{
    $res = Manager::updateData($data, $table, $property, $val);
    // var_dump($res);   die('ok');
    if ($res['error']) {
        return $res['message'];
    }else {
        return 1;
    }
    
}

function insert($table) {
    $manager = new Manager();
    return $manager->insert($table);
}

function setActionUrl($name)
{
    $name = str_replace(' ', '_', $name);
    return $name;
}

function getModules()
{
    $res = Manager::getData('module_role', 'role_id', $_SESSION['user']['roleId']);
    $_SESSION['user']['roles']['modules'] = $res;
    $sql ="select action_url from module where sub_module=?";
    $res = Manager::getMultiplesRecords($sql, [$res['data']['module']]);
    $_SESSION['user']['roles']['modules_action'] = $res;
}

function getActions($moduleId)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM module WHERE sub_module=?";
       $res = Manager::getMultiplesRecords($sql, [$moduleId]);
   return $res;
}

function haveAction($role, $module)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM module_role WHERE role_id=? AND module=?";
   $res = Manager::getMultiplesRecords($sql, [$role, $module]);
   if ((is_array($res) || is_object($res)) && count($res)>0) {
       return true;
   }else {
       return false;
   }
   
}

function countFields($table, $field=null, $value=null)
{
    $sql = "SELECT COUNT(*) nb FROM $table";
    if (!empty($field) && !empty($value)) {
        $sql = "SELECT COUNT(*) nb FROM $table WHERE $field=?";
        
    }
    return Manager::getSingleRecords($sql, [$value]);
}
function getModelByDocuments($value=null)
{
    $sql = "SELECT model_name, COUNT(DISTINCT(id_document)) nb_doc FROM model m LEFT JOIN document d ON d.model=m.id_model GROUP BY id_model";
    if (!empty($value)) {
        $sql = "SELECT model_name, COUNT(DISTINCT(id_document)) nb_doc FROM model m LEFT JOIN document d ON d.model=m.id_model WHERE m.entity=? GROUP BY id_model";
        
    }
    return Manager::getMultiplesRecords($sql, [$value]);
}


function handleMatricule($mat)
{
    $lentgh = strlen($mat);
    switch ($lentgh) {
        case 7:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key+1<7) {
                    $res .= $temp[$key+1];
                }
            }
            return $res;
            break;
        case 8:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+2];
                }elseif($key>=2) {
                    if ($key+1<8) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 9:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+3];
                }elseif($key>=3) {
                    if ($key+1<9) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 10:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+4];
                }elseif($key>=4) {
                    if ($key+1<10) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 11:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+5];
                }elseif($key>=5) {
                    if ($key+1<11) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        
        default:
            return $mat;
            break;
    }
}

function getMatricule()
{
    $sql = "SELECT COUNT(*) +1 nb FROM document";
    $res = Manager::getSingleRecords($sql);
    // Manager::showError($res);
    try {
        return date("yy").'-chcodu-'.handleMatricule("00000".$res['nb']);
    } catch (\Throwable $th) {
        return date("y")."-chcodu-000001";
    }

}

// source: https://stackoverflow.com/a/4356295/9928098
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
