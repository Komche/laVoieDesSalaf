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
                                        <p>Rue du Nigéria</p>

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
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="invoice-address">
                                            <h6 class="mb-3">Document</h6>
                                            <ul class="list-unstyled">
                                                <?php
                                                foreach ($keys as $k => $v) {
                                                ?>
                                                    <li><?= ($v == 'entity_matricule') ? 'ref: ' . $value[$v]['stringValue'] : $v . ": " . $value[$v]['stringValue'] ?></li>
                                                <?php } ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="invoice-address">
                                            <h6 class="mb-3">Shipped to</h6>
                                            <h6 class="text-muted">Amy Adams</h6>
                                            <ul class="list-unstyled">
                                                <li>417 Redbud Drive, Manhattan Building, Whitestone, NY, New York-11357</li>
                                                <li>+1-9876543210</li>
                                                <li>amyadams@email.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="invoice-address">
                                            <div class="card">
                                                <div class="card-body bg-info-rgba text-center">
                                                    <h6>Payment Method</h6>
                                                    <p><i class="mdi mdi-paypal text-info font-40"></i></p>
                                                    <p>via PayPal</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-summary">
                                <div class="table-responsive ">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Price</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Apple Watch</td>
                                                <td>1</td>
                                                <td>$10</td>
                                                <td class="text-right">$500</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Apple iPhone</td>
                                                <td>2</td>
                                                <td>$20</td>
                                                <td class="text-right">$200</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Apple iPad</td>
                                                <td>3</td>
                                                <td>$30</td>
                                                <td class="text-right">$300</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-summary-total">
                                <div class="row">
                                    <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                        <div class="order-note">
                                            <p class="mb-3"><span class="badge badge-info-inverse font-14">This is Free Shipping Order</span></p>
                                            <h6>Special Note for this order:</h6>
                                            <p>Please, Pack with product air bag and handle with care.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                        <div class="order-total table-responsive ">
                                            <table class="table table-borderless text-right">
                                                <tbody>
                                                    <tr>
                                                        <td>Sub Total :</td>
                                                        <td>$1000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Charges :</td>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax (18%) :</td>
                                                        <td>$180.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="f-w-7 font-18">
                                                            <h5>Amount Payable :</h5>
                                                        </td>
                                                        <td class="f-w-7 font-18">
                                                            <h5>$1180.00</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-meta">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="invoice-meta-box">
                                            <h6 class="mb-3">Terms &amp; Conditions</h6>
                                            <ul class="pl-3">
                                                <li>Goods once sold will not be taken back.</li>
                                                <li>We are responsible for Courier Damage.</li>
                                                <li>Subjects to NY Jurisdiction.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="invoice-meta-box">
                                            <h6 class="mb-3">Contact Us</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="feather icon-aperture mr-2"></i>www.example.com</li>
                                                <li><i class="feather icon-mail mr-2"></i>demo@example.com</li>
                                                <li><i class="feather icon-phone mr-2"></i>+1-9876543210</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="invoice-meta-box text-right">
                                            <h6 class="mb-0">Authorized Signatory</h6>
                                            <img src="assets/images/general/signature.svg" class="img-fluid my-3" alt="signature">
                                            <p class="mb-0">Jennifer C Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-footer">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <p class="mb-0">Thank yopu for your Business.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="invoice-footer-btn">
                                            <a href="javascript:window.print()" class="btn btn-primary-rgba py-1 font-16"><i class="feather icon-printer mr-2"></i>Print</a>
                                            <a href="#" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Submit</a>
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