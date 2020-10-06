<?php
$title = "Consulter fikr";
ob_start();
?>
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title"><?= $title ?></h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <!-- <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
                                <li class="breadcrumb-item"><a href="#">Basic</a></li> -->
          <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
      </div>
    </div>

  </div>
</div>
<div class="container container-margin">
  <div class="row">
    <!-- Start col -->
    <div class="col-md-12 col-lg-12 col-xl-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title">Ajouter des fichier</h5>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data" class="" id="myDropzone">
            <input type="hidden" required class="form-control" id="fikr" name="fikr" placeholder="" value="<?= $_GET['fikr'] ?>">
            <input type="file" required class="form-control" id="chemin" name="chemin[]" placeholder="" multiple>


          </form>
          <div id="kv-error-2" style="margin-top:10px;display:none"></div>
          <div id="kv-success-2" class="alert alert-success" style="margin-top:10px;display:none"></div>
        </div>
      </div>
    </div>
    <!-- End col -->
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>