<?php
global $title;
$title = "Accueil";
ob_start();
?>
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3 mb-5">
                <h4>Page Title</h4>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>

<?php 
    $content = ob_get_clean();
    require_once('template.php');
?>