<?php
require_once('controller/Administration.php');
$sql = "SELECT entity_matricule, d.entity, d.model, model_name, m.entity uniqueEntity, nomVille, 
    m.uniqueId, label, domaine, email, phone_number FROM entity e, document d, 
    model m, ville v WHERE e.id_entity=d.entity AND d.model = m.id_model AND v.idVille = e.ville
    AND d.matricule=?";
$data = Manager::getSingleRecords($sql, [$_GET['mat']]);
$document = file_get_contents(FIRESTORE_PATH . "model/" . $data['uniqueId'] . "/document/" . $_GET['mat']);
$document = json_decode($document, true)['fields'];

unset($document['model']);
unset($document['matricule']);
unset($document['entity']);
unset($document['imgpath']);
unset($document['documentQrpath']);
$keys = array_keys($document);
// print_r($document); die();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Document</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="public/img/favicon.ico">
    <!-- Start css -->
    <link href="public/vendor/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="public/vendor/css/icons.css" rel="stylesheet" type="text/css">
    <link href="public/vendor/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar">
        <!-- Start Container -->
        <div style="margin-top:20px" class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-10">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="invoice">
                            <div class="invoice-head">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="invoice-logo">
                                            <img src="public/img/Logo-2.png" class="img-fluid" alt="invoice-logo">
                                        </div>
                                        <h4>Ingéniurie Informatique Soft</h4>
                                        <p>Quartier Nouveau marché, Ex Radio Souda</p>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="invoice-name">
                                            <h6 class="text-uppercase mb-3"><?= $data['label'] ?></h6>
                                            <p class="mb-1"><?= $data['domaine'] . " à " . $data['nomVille'] ?></p>
                                            <p class="mb-0"><?= $data['email'] ?></p>
                                            <h4 class="text-success mb-0 mt-3"><?= $data['phone_number'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-billing">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="invoice-address d-flex justify-content-center">
                                            <h2 class="mb-3"> <i style="color:mediumseagreen" class="fa fa-check-circle"></i> VERIFIE</h2>
                                            <h4 class="mb-3"> <i style="color:mediumseagreen" class="fa fa-check-circle"></i> Document</h4>
                                            <ul class="list-unstyled">
                                                <?php
                                                foreach ($keys as $k => $v) {
                                                ?>
                                                    <li> <b style="font-size: large;"><?= ($v == 'entity_matricule') ? 'ref: ' . $document[$v]['stringValue'] : str_replace("_"," ",$v) . ": " . $document[$v]['stringValue'] ?></b></li>
                                                <?php } ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="invoice-meta">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="invoice-meta-box">
                                            <h6 class="mb-3">A propos</h6>
                                            <p>
                                            2iSoft est une entreprise créée en 2012 par des jeunes nigériens passionnés des nouvelles technologies de l'information et de la communication afin d'aider ses partenaires à atteindre ses objectifs en utilisant les outils informatiques.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="invoice-meta-box">
                                            <h6 class="mb-3">Nous contcter</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="feather icon-aperture mr-2"></i>www.2isoft.com</li>
                                                <li><i class="feather icon-mail mr-2"></i>info@2isoft.com</li>
                                                <li><i class="feather icon-phone mr-2"></i>+227 80 60 30 30</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="invoice-meta-box text-right">
                                            <h6 class="mb-0">Signature</h6>
                                            <img width="100" src="public/img/michael-jackson-1194286_640.png" class="img-fluid my-3" alt="signature">
                                            <p class="mb-0">DG M Alpha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-footer">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <p class="mb-0">Merci pour votre confiance.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="invoice-footer-btn">
                                            <a href="javascript:window.print()" class="btn btn-primary-rgba py-1 font-16"><i class="feather icon-printer mr-2"></i>Print</a>
                                            <!-- <a href="#" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Submit</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="public/vendor/js/jquery.min.js"></script>
    <script src="public/vendor/js/popper.min.js"></script>
    <script src="public/vendor/js/bootstrap.min.js"></script>
    <script src="public/vendor/js/modernizr.min.js"></script>
    <script src="public/vendor/js/detect.js"></script>
    <script src="public/vendor/js/jquery.slimscroll.js"></script>
    <!-- End js -->
</body>

</html>