<?php
session_start();
require 'vendor/autoload.php';

use MrShan0\PHPFirestore\FirestoreClient;

use function GuzzleHttp\json_encode;

require('controller/Administration.php');
$firestoreClient = new FirestoreClient('test-gdg-406a8', 'AIzaSyDC7P_clu0e9Gj06S5Z6a0FSFMTaBkENFE', [
    'database' => '(default)',
]);
$useragent = $_SERVER['HTTP_USER_AGENT'];
if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}

var_dump($_SESSION['user']);die;
// $test = "hh";
// //echo(Manager::print_var_name($test));  die();
// $roles = new roles();
// $roles->role(11, "Test", "Mon test");
// Manager::update($roles, "id", 11);
//var_dump(Manager::getDatas(new ville())->getIdVille(3)); die;

if (isset($_SESSION['user'])) {
    getModules();
    if (!empty($_GET['action'])) {
        extract($_GET);
        global $title;
        $_SESSION['user']['prevTitle']  = $title;
        $sql = "SELECT id FROM module WHERE action_url=?";
        $module = Manager::getSingleRecords($sql, [$action])['id'];
        if (!haveAction($_SESSION['user']['roleId'], $module)) {
            require('view/notFoundView.php');
            return;
        }
        if ($action == 'role') {
            if (!empty($_POST)) {
                $data = $_POST;
                $roles = new roles($data);
                //var_dump($roles); die;
                $res = insert($roles);
                //$res = addData($data, 'roles');

                //if ($res['code'] != 1) {
                $_SESSION['messages'] = $res;
                // }
            }
            require_once("view/roleView.php");
        } elseif ($action == 'module') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'module');

                // Manager::showError($res);

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/moduleView.php");
        } elseif ($action == 'entite') {
            if (!empty($_POST)) {
                $data = $_POST;
                $data['uniqueId'] = uniqid("enti-", true);
                $firestoreClient->addDocument("entity", $data);
                $res = addData($data, 'entity');
                // Manager::showError($res);

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/entityView.php");
        } elseif ($action == 'model') {
            if (!empty($_POST)) {
                $data = $_POST;
                $data['uniqueId'] = uniqid("chec", true);
                $firestoreClient->addDocument("entity", $data);
                $res = addData($data, 'entity');
                // Manager::showError($res);

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/modelView.php");
        } elseif ($action == 'addModel') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (!empty($data)) {
                // var_dump($data); die;
                if (!empty($data['model_name'])) {

                    $firestoreClient->addDocument("model", $data, $data['uniqueId']);
                    $res = addData($data, 'model');
                }
                if (isset($data['model_key'])) {
                    $data[$data['model_key']] = $data['model_key'];
                    unset($data['model_key']);
                    $firestoreClient->updateDocument("model/" . $data['uniqueId'], $data);
                }
                $result['msg'] = 1;
                $result['uniqueId'] = $data['uniqueId'];

                echo json_encode($result);
            }
        } elseif ($action == 'getModel') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (!empty($data)) {
                // var_dump($data); die;
                $data['uniqueId'] = uniqid("model-", true);
                if ($data['model_key'] == "model_key") {

                    $res = addData($data, 'model');
                }
                $firestoreClient->addDocument("entity", $data, $data['uniqueId']);
                // Manager::showError($res);

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            // require_once("view/modelView.php");
        } elseif ($action == 'document') {
            if (!empty($_POST)) {
                $data = $_POST;
                // var_dump($data);
                $document['entity'] = $data['entity'];
                $document['matricule'] = $data['matricule'];
                $document['entity_matricule'] = $data['entity_matricule'];

                $barcode = new \Com\Tecnick\Barcode\Barcode();
                $targetPath = "public/img/documents/";
                if (!is_dir($targetPath)) {
                    mkdir($targetPath, 0777, true);
                }
                $bobj = $barcode->getBarcodeObj('QRCODE,H', "http://checker.akoybiz.com/index.php?mat=" . $document['matricule'], -16, -16, 'black', array(
                    -2,
                    -2,
                    -2,
                    -2
                ))->setBackgroundColor('#fff');

                $imageData = $bobj->getPngData();
                $timestamp = time();

                file_put_contents($targetPath . $timestamp . '.png', $imageData);

                $data['imgpath'] = $targetPath . $timestamp . '.png';
                $data['documentQrpath'] = "http://checker.akoybiz.com/index.php?mat=" . $document['matricule'];

                $document['model'] = Manager::getData('model', 'uniqueId', $data['model'])['data']['id_model'];
                $firestoreClient->addDocument("model/" . $data['model'] . "/document", $data, $data['matricule']);
                $firestoreClient->addDocument("documents", $data, $data['matricule']);
                $res = addData($document, 'document');

                // Manager::showError($res);

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/documentView.php");
        } elseif ($action == 'addDocument') {
            $msg['code'] = 404;
            $msg['msg'] = "Données non renseigner";
            if ($_SERVER['REQUEST_METHOD'] != "POST") {
                $msg['msg'] = "La methoded doit être post";
                echo json_encode($msg);
                return;
            }
            $data = json_decode(file_get_contents('php://input'), true);
            if (!empty($data)) {
                // var_dump($data);
                $document['entity'] = $data['entity'];
                $document['matricule'] = $data['matricule'];
                $document['entity_matricule'] = $data['entity_matricule'];

                $barcode = new \Com\Tecnick\Barcode\Barcode();
                $targetPath = "public/img/documents/";
                if (!is_dir($targetPath)) {
                    mkdir($targetPath, 0777, true);
                }
                $bobj = $barcode->getBarcodeObj('QRCODE,H', "http://checker.akoybiz.com/index.php?mat=" . $document['matricule'], -16, -16, 'black', array(
                    -2,
                    -2,
                    -2,
                    -2
                ))->setBackgroundColor('#fff');

                $imageData = $bobj->getPngData();
                $timestamp = time();

                file_put_contents($targetPath . $timestamp . '.png', $imageData);

                $data['imgpath'] = $targetPath . $timestamp . '.png';
                $data['documentQrpath'] = "http://checker.akoybiz.com/index.php?mat=" . $document['matricule'];

                $document['model'] = Manager::getData('model', 'uniqueId', $data['model'])['data']['id_model'];
                $firestoreClient->addDocument("model/" . $data['model'] . "/document", $data, $data['matricule']);
                $res = addData($document, 'document');

                // Manager::showError($res);

                if ($res != 1) {
                    $msg['code'] = 200;
                    $msg['msg'] = "Document ajouter avec succès";
                } else {
                    $msg['code'] = 404;
                    $msg['msg'] = "Ajout échouer";
                }
                echo json_encode($msg);
            } else {
                echo json_encode($msg);
            }
        } elseif ($action == 'permission') {
            if (!empty($_POST)) {
                $data = $_POST;
                $data['action_url'] = setActionUrl($data['name']);
                $res = addData($data, 'actions');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/permissionView.php");
        } elseif ($action == 'membre') {
            if (!empty($_POST) && !empty($_FILES) && empty($_GET['modif'])) {
                $data = $_POST;
                $file = new Files();
                $data['photo'] = $file->uploadFilePicture($_FILES['img_profil']);
                $data['created_by'] = $_SESSION['user']['id'];
                // die (print_r($data));
                $bureau = $data['bureau'];
                $libelle = $data['libelle'];
                $exercice = $data['exercice'];

                $new_niveau = array();
                $new_niveau['etablissement'] = $data['etablissement'];
                $new_niveau['filiere'] = $data['filiere'];
                $new_niveau['libelle_niveau'] = $data['libelle_niveau'];

                unset($data['bureau']);
                unset($data['libelle']);
                unset($data['exercice']);
                unset($data['etablissement']);
                unset($data['filiere']);
                unset($data['libelle_niveau']);


                try {
                    $database = Manager::database();
                    $database->beginTransaction();

                    $niveau = new niveau($new_niveau);
                    $database->insert($niveau);
                    $res['lastId'] = $database->lastInsertId();
                    $res['message'] = $database->getMessage();

                    if (!empty($res['lastId'])) {
                        $data['niveau'] = $res['lastId'];

                        $membre = new Membre($data);
                        //  Manager::showError($membre);
                        $database->insert($membre);
                        $res['lastId'] = $database->lastInsertId();
                        $res['message'] = $database->getMessage();
                        // Manager::showError($res);
                        $poste = array();
                        if (!empty($res['lastId'])) {
                            $poste['membre'] = $res['lastId'];
                            $poste['bureau'] = $bureau;
                            $poste['libelle'] = $libelle;

                            $post = new poste($poste);

                            $database->insert($post);
                            $res['lastId'] = $database->lastInsertId();
                            $res['message'] = $database->getMessage();

                            $exm['membre'] = $poste['membre'];
                            $exm['exercice'] = $exercice;
                            $exercice_membre = new exercice_membre($exm);
                            $database->insert($exercice_membre);
                            $res['lastId'] = $database->lastInsertId();
                            $res['message'] = $database->getMessage();

                            $_SESSION['messages'] = $res["message"];
                            $useragent = $_SERVER['HTTP_USER_AGENT'];

                            $database->commit();
                        }
                    }
                } catch (PDOException $e) {
                    $database->resultMessage("Opération échoué; $e");
                    $_SESSION['messages'] = $database->getMessage();
                }

                // $niveau = new niveau($new_niveau);
                // $res = insert($niveau);
                // // Manager::showError($res);
                // if (!empty($res['lastId'])) {
                //     $data['niveau'] = $res['lastId'];

                //     $membre = new Membre($data);
                //     //  Manager::showError($membre);
                //     $res = insert($membre);
                //     $poste = array();
                //     if (!empty($res['lastId'])) {
                //         $poste['membre'] = $res['lastId'];
                //         $poste['bureau'] = $bureau;
                //         $poste['libelle'] = $libelle;
                //         $post = new poste($poste);
                //         $res = insert($post);

                //         $sql = "INSERT INTO exercice_membre(membre, exercice) VALUES(?,?)";
                //         Manager::modifRecord($sql, [$res['lastId'], $exercice]);
                //         $_SESSION['messages'] = $res["message"];
                //         $useragent = $_SERVER['HTTP_USER_AGENT'];

                //         if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {

                //             header('Location: index.php?action=card&member=' . $res['lastId']);
                //         }
                //     }
                // }
                $_SESSION['messages'] = $res["message"];
            }
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un membre
                if (!empty($_POST) && !empty($_FILES)) {
                    $data = $_POST;
                    //var_dump($data);
                    //die();
                    $bureau = $data['bureau'];
                    $libelle = $data['libelle'];
                    $exercice = $data['exercice'];
                    //niveau
                    $niveau = array();
                    $niveau['etablissement'] = $data['etablissement'];
                    $niveau['filiere'] = $data['filiere'];
                    $niveau['libelle_niveau'] = $data['libelle_niveau'];
                    unset($data['bureau']);
                    unset($data['libelle']);
                    unset($data['exercice']);
                    unset($data['etablissement']);
                    unset($data['filiere']);
                    unset($data['libelle_niveau']);
                    if (empty($_FILES['img_profil'])) {
                        //Manager::showError($_FILES);
                        $data['photo'] = Manager::getData("membre", "id_membre", $_GET['modif'])['data']['photo'];
                    } else {
                        $files = new Files();
                        $data['photo'] = $files->uploadFilePicture($_FILES['img_profil']);
                    }

                    //$editPoste = Manager::updateData($libelle, 'bureau','membre', $_GET['modif']);
                    //Update de la table Membre
                    // Manager::showError($data);
                    $res = Manager::updateData($data, 'membre', 'id_membre', $_GET['modif']);
                    $poste = array();
                    //if(!empty($res)){
                    $poste['bureau'] = $bureau;
                    $poste['libelle'] = $libelle;
                    //Update de la table Poste
                    $editPoste = Manager::updateData($poste, 'poste', 'membre', $_GET['modif']);
                    //Recuperation des data du membre
                    $data = Manager::getData('membre', 'id_membre', $_GET['modif'])['data'];
                    //Update de la table Niveau
                    $editNiveau = Manager::updateData($niveau, 'niveau', 'id_niveau', $data['niveau']);
                    //}
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=showMember');
                    }
                }
            } //else { //Ajout d'un membre
            //     if (!empty($_POST) && !empty($_FILES)) {
            //         //var_dump($_POST);
            //         //die();
            //         $data = $_POST;
            //         $file = new Files();
            //         $data['photo'] = $file->uploadFilePicture($_FILES['photo']);
            //         // die (print_r($data));
            //         $bureau = $data['bureau'];
            //         $libelle = $data['libelle'];
            //         unset($data['bureau']);
            //         unset($data['libelle']);
            //         $membre = new Membre($data);
            //         // Manager::showError($membre);
            //         $res = insert($membre);
            //         $poste = array();
            //         if (!empty($res['lastId'])) {
            //             $poste['membre'] = $res['lastId'];
            //             $poste['bureau'] = $bureau;
            //             $poste['libelle'] = $libelle;
            //             $post = new poste($poste);
            //             $res = insert($post);
            //         }
            //         // Manager::showError($res);
            //         if ($res != 1) {
            //             $_SESSION['messages'] = $res['message'];
            //         } else {
            //             header('Location: index.php?action=showUser');
            //         }
            //     }
            // }
            require_once("view/addMemberView.php");
        } elseif ($action == 'regional_group') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'regional_group');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/regionalGroupView.php");
        } elseif ($action == 'compagnie') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'company');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/companyView.php");
        } elseif ($action == 'rescue') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'rescue_center');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/rescueCenterView.php");
        } elseif ($action == 'ville') { //View Ville
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une ville
                if (!empty($_POST)) {
                    $data = $_POST;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'ville', 'idVille', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=ville');
                    }
                }
            } else { // Ajout Ville
                if (!empty($_POST)) {
                    $data = $_POST;
                    $ville = new ville($data);
                    //var_dump($ville); die;
                    $res = insert($ville);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/villeView.php");
        } elseif ($action == 'pays') { //View Ville
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une ville
                if (!empty($_POST)) {
                    $data = $_POST;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'pays', 'id', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=pays');
                    }
                }
            } else { // Ajout Ville
                if (!empty($_POST)) {
                    $data = $_POST;
                    $pays = new country($data);
                    //var_dump($pays); die;
                    $res = insert($pays);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/paysView.php");
        } elseif ($action == 'filiere') { //View Filiere
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une Filiere
                if (!empty($_POST)) {
                    $data = $_POST;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'filiere', 'id_filiere', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=filiere');
                    }
                }
            } else { // Ajout Filiere
                if (!empty($_POST)) {
                    $data = $_POST;
                    $filiere = new filiere($data);
                    //var_dump($filiere); die;
                    $res = insert($filiere);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/filiereView.php");
        } elseif ($action == 'bureau') {
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une Bureau
                if (!empty($_POST)) {
                    $data = $_POST;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'bureau', 'idBureau', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=bureau');
                    }
                }
            } else { // Ajout Bureau
                if (!empty($_POST)) {
                    $data = $_POST;
                    $bureau = new bureau($data);
                    // var_dump($bureau); die;
                    $res = insert($bureau);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/bureauView.php");
        } elseif ($action == 'exercice') {
            if (!empty($_POST)) {
                $data = $_POST;
                $file = new Files();
                $data['pv_exercice'] = $file->uploadFilePicture($_FILES['pv_exercice']);
                $exercice = new exercice($data);
                //var_dump($exercice); die;
                $res = insert($exercice);

                $_SESSION['messages'] = $res;
            }
            require_once("view/exerciceView.php");
        } elseif ($action == 'etablissement') {
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une Etablissement
                if (!empty($_POST)) {
                    $data = $_POST;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'etablissement', 'idEtablissement', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=etablissement');
                    }
                }
            } else { // Ajout Etablissement
                if (!empty($_POST)) {
                    $data = $_POST;
                    $etablissement = new etablissement($data);
                    //var_dump($etablissement); die;
                    $res = insert($etablissement);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/etablissementView.php");
        } elseif ($action == 'type') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'type_agent');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/typeAgentView.php");
        } elseif ($action == 'addUser') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $data['profile_picture'] = $_FILES['profile_picture'];
                $res = UserManager::addUser($data);
                // Manager::showError($res);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=showUser');
                }
            }
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un utilisateur
                $data = $_POST;
                if (!empty($_FILES)) {
                    //$data['profile_picture'] = $_FILES['profile_picture'];
                }
                $res = Manager::updateData($data, 'users', 'id', $_GET['modif']);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=showUser');
                }
            }
            require_once("view/addUserView.php");
        } elseif ($action == 'addEmergency') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $file = new Files();
                var_dump($file->uploadFilePicture($_FILES['files']));
                die;
                $data['files'] = $_FILES['files'];
                $res = EmergencyManager::addEmergency($data);
                //Manager::showError($data);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=showEmergency');
                }
            }
            require_once("view/addEmergencyGestView.php");
        } elseif ($action == 'export_cards') {

            require_once("model/export_to_pdf.php");
        } elseif ($action == 'ajout-plan') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $data['file'] = $_FILES['file'];
                $res = EmergencyManager::addPlan($data);
                //Manager::showError($data);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=voir-plan');
                }
            }
            require_once("view/addPlanView.php");
        } elseif ($action == 'voir-plan') {

            require_once("view/showPlanView.php");
        } elseif ($action == 'showUser') {

            require_once("view/showUserView.php");
        } elseif ($action == 'showMember') {

            require_once("view/showMemberView.php");
        } elseif ($action == 'listeMembreSympathisant') { //View Liste des membres Sympathisants

            require_once("view/showMemberSympView.php");
        } elseif ($action == 'renouveller' && !empty($_GET['member'])) { //Renouveller l'adhèsion
            $date = date("Y-m-d", time());
            //Y-m-d h:i:sa
            $res = Manager::updateDataSingle('created_at', $date, 'membre', 'id_membre', $_GET['member']);
            require_once("view/showMemberSympView.php");
        } elseif ($action == 'card' && !empty($_GET['member'])) {

            require_once("view/showMemberCardView.php");
        } elseif ($action == 'cardSymp' && !empty($_GET['member'])) {

            require_once("view/showMemberSympCardView.php");
        } elseif ($action == 'roleModule') {
            require_once("view/roleModuleView.php");
        } elseif ($action == 'profile') {
            require_once("view/profileView.php");
        } elseif ($action == 'logout') {
            require_once("view/logout.php");
        } elseif ($action == 'homeView') {
            require_once("view/homeView.php");
        } elseif ($action == 'searchView') {
            require_once("view/searchView.php");
        }
    } elseif (empty($_GET['mat'])) {
        require_once("view/homeView.php");
    }
} elseif (isset($_GET['signup'])) {
    if (!empty($_POST)) {
        $res = UserManager::activeUser($_POST);
        //print_r($_POST); die;
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php');
        }
    }
    require('view/registerView.php');
} elseif (isset($_GET['login'])) {
    if (!empty($_POST)) {

        $res = UserManager::connectUser($_POST);
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php?action=homeView');
        }
    }
    require('view/loginView.php');
} elseif (!empty($_GET['api'])) {
    if ($_GET['api'] == 'addDocument') {
        http_response_code(404);
        $msg['code'] = 404;
        $msg['msg'] = "Données non renseigner";
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            http_response_code(405);
            $msg['code'] = 405;
            $msg['msg'] = "La methoded doit être post";
            echo json_encode($msg);
            return;
        }
        $data = json_decode(file_get_contents('php://input'), true) ?? $_POST;
        if (!empty($data)) {
            if (empty($data['entity']) || empty($data['entity_matricule']) || empty($data['model'])) {
                http_response_code(404);
                $msg['code'] = 404;
                $msg['msg'] = "Une des données obligatoire non renseigner";
                echo json_encode($msg);
                return;
            }
            $entity = Manager::getData("entity", "uniqueId", $data['entity']);
            $model = Manager::getData("model", "uniqueId", $data['model']);
            if (empty($entity['data'])) {
                http_response_code(404);
                $msg['code'] = 404;
                $msg['msg'] = "L'entité n'existe pas";
                echo json_encode($msg);
                return;
            }
            if (empty($model['data'])) {
                http_response_code(404);
                $msg['code'] = 404;
                $msg['msg'] = "Le model n'existe pas";
                echo json_encode($msg);
                return;
            } else {
                if ($model['data']['entity'] != $data['entity']) {

                    http_response_code(404);
                    $msg['code'] = 404;
                    $msg['msg'] = "Ce modèle n'appartient pas à cette entité";
                    echo json_encode($msg);
                    return;
                }
            }

           
            $document['entity'] = $data['entity'];
            $document['matricule'] = generateRandomString();
            $document['entity_matricule'] = $data['entity_matricule'];

            $barcode = new \Com\Tecnick\Barcode\Barcode();
            $targetPath = "public/img/documents/";
            if (!is_dir($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
            $bobj = $barcode->getBarcodeObj('QRCODE,H', "http://checker.akoybiz.com/index.php?mat=" . $document['matricule'], -16, -16, 'black', array(
                -2,
                -2,
                -2,
                -2
            ))->setBackgroundColor('#fff');

            $imageData = $bobj->getPngData();
            $timestamp = time()."_".$document['entity_matricule'];

            file_put_contents($targetPath . $timestamp . '.png', $imageData);

            $data['imgpath'] = $targetPath . $timestamp . '.png';
            $data['documentQrpath'] = "http://checker.akoybiz.com/index.php?mat=" . $document['matricule'];
            
            $tempdoc = $data;
            unset($tempdoc['documentQrpath']);
            unset($tempdoc['imgpath']);
            unset($tempdoc['entity_matricule']);
            unset($tempdoc['matricule']);
            unset($tempdoc['model']);
            $m = file_get_contents(FIRESTORE_PATH . "model/" . $data['model']);
            $m = json_decode($m, true)['fields']; 
            $tempm = array();
            if (is_array($m) || is_object($m)) {
                foreach ($m as $key => $value) {
                    $tempm[] = $key;
                    if ($key != 'model_name' && $key != "uniqueId"){
                        if (!in_array($key, $tempdoc)) {
                            http_response_code(404);
                            $msg['code'] = 404;
                            $msg['msg'] = "un des champs manque";
                            echo json_encode($msg);
                            return;   
                        }
                    }
                }
            }
            foreach ($tempdoc as $key => $value) {
                if(!in_array($key, $tempm)) {
                    http_response_code(404);
                    $msg['code'] = 404;
                    $msg['msg'] = "Il semble que vous essayer d'ajouter un champs qui n'existe pas";
                    echo json_encode($msg);
                    return;
                }
            }
            echo json_encode($tempm); return;
            $document['model'] = Manager::getData('model', 'uniqueId', $data['model'])['data']['id_model'];
            $firestoreClient->setDocument("model/" . $data['model'] . "/document/" . $document['matricule'], $data, true);
            $firestoreClient->setDocument("documents/" . $document['matricule'], $data, true);
            $res = addData($document, 'document');

            // Manager::showError($res);
            if ($res != 1) {
                http_response_code(200);
                $msg['data'] = $data;
                $msg['code'] = 200;
                $msg['msg'] = "Document ajouter avec succès";
            } else {
                $msg['code'] = 404;
                $msg['msg'] = "Ajout échouer";
            }
            echo json_encode($msg);
        } else {
            echo json_encode($msg);
        }
    }
} else {

    if (!empty($_GET['mat'])) {
        require('view/getDocumentView.php');
    } elseif (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
        if (!empty($_POST)) {

            $res = UserManager::connectUserMobile($_POST);
            // Manager::showError($res);
            if ($res != 1) {
                $_SESSION['messages'] = $res;
            } else {
                header('Location: index.php?action=membre');
            }
        }
        require('view/loginViewMobile.php');
    } else {
        if (!empty($_POST)) {

            $res = UserManager::connectUser($_POST);
            if ($res != 1) {
                $_SESSION['messages'] = $res;
            } else {
                header('Location: index.php?action=homeView');
            }
        }
        require('view/loginView.php');
    }
}

if (!empty($_GET['mat']) && !preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
    require('view/getDocumentView.php');
}
