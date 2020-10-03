<?php
global $title;
$title = "Accueil";

ob_start();
?>
<link href="public/vendor/plugins/apexcharts/apexcharts.css" rel="stylesheet">
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title"><?= "Dashboard" ?></h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>

                </ol>
            </div>
        </div>

    </div>
</div>
<div class="contentbar">
    <!-- Start row -->

</div>
<script src="public/vendor/plugins/apexcharts/apexcharts.min.js"></script>


<?php
$content = ob_get_clean();
require_once('template.php');
?>