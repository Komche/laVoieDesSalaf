<?php
global $title;
$title = "Accueil";
$entity = null;
$uniqueId = null;
if (!empty($_SESSION['user']['entity'])) {
    $entity = $_SESSION['user']['entity']['id_entity'];
    $uniqueId = $_SESSION['user']['entity']['uniqueId'];
}
$data = getModelByDocuments($uniqueId);
$label="[";
$datas="[";
foreach ($data as $key => $value) {
    $label.="\"".$value['model_name']."\",";
    $datas.= $value['nb_doc'].",";
}
$label.="]";
$datas.="]";

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
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-3">
            <div class="row">
                <div class="col-lg-6 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-layout"></i></span>
                                </div>
                                <div class="col-7 text-right">
                                    <h5 class="card-title font-14">Modèles</h5>
                                    <h4 class="mb-0"><?= countFields('model', 'entity', $uniqueId)['nb'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <span class="font-13"></span>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="badge badge-success"><i class="feather icon-trending-up mr-1"></i><?= countFields("model", 'entity', $uniqueId)['nb'] * 100 / countFields("model", 'entity', $uniqueId)['nb'] . "%" ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-file"></i></span>
                                </div>
                                <div class="col-7 text-right">
                                    <h5 class="card-title font-14">Documents</h5>
                                    <h4 class="mb-0"><?= countFields("document", "entity", $entity)['nb'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <span class="font-13"></span>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="badge badge-success"><i class="feather icon-trending-up mr-1"></i><?= countFields("document", "entity", $entity)['nb'] * 100 / countFields("document", "entity", $entity)['nb'] . "%" ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start col -->
        <div class="col-lg-12 col-xl-9">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Modèle par document</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetCategory">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="apex-pie-chart" class="my-4"></div>
                        </div>
                        <!-- <div class="card-footer py-3 text-center">
                            <div class="row">
                                <div class="col-6 border-right">
                                    <p class="mb-1">Total Sale</p>
                                    <h4 class="mb-0">250</h4>
                                </div>
                                <div class="col-6">
                                    <p class="mb-1">Total Profit</p>
                                    <h4 class="mb-0">$495</h4>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- End col -->
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <script src="public/vendor/plugins/apexcharts/apexcharts.min.js"></script>
        <script>
            /* -- Apex Pie Chart -- */
            var options = {
                chart: {
                    type: 'donut',
                    width: 240,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: "85%"
                        }
                    }
                },
                dataLabels: {
                    enabled: false
                },
                colors: ['#0080ff', '#18d26b', '#d4d8de'],
                series: <?=$datas ?>,
                labels: <?=$label ?>,
                legend: {
                    show: true,
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 420,
                    options: {
                        chart: {
                            width: 220,
                        },
                    },
                }]
            }
            var chart = new ApexCharts(
                document.querySelector("#apex-pie-chart"),
                options
            );
            chart.render();
        </script>

        <?php
        $content = ob_get_clean();
        require_once('template.php');
        ?>