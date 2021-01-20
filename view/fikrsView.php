<?php
global $title;
$title = "Ajouter fikr";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier fikr";
  $datas = Manager::getData("users", "id", $_GET['modif'])['data'];
  //var_dump($datas);
  //die();
  $src = Manager::getData("files", "id", $datas['photo'])['data']['file_url'];
}
// ob_start();
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
<br>
<div class="container container-margin">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card m-b-30">
        <div class="card-header">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form id="fikrForm" ville="form" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Titre</span>
              </div>

              <input type="text" required class="form-control" id="titre" name="titre" placeholder="Veuillez entrer le titre du fikr" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Livre</span>
              </div>
              <input type="text" class="form-control" id="livre" name="livre" placeholder="Veuillez entrer le livre (facultatif)" value="<?= (!empty($_GET['modif'])) ? $datas['livre'] : "" ?>">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Date</span>
              </div>
              <input type="date" class="form-control" id="date_ajout" name="date_ajout" placeholder="La date du fikr" value="<?= (!empty($_GET['modif'])) ? $datas['date'] : "" ?>">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Auteur</span>
              </div>
              <select class="form-control" id="auteur" name="auteur">
                <?php

                $data = Manager::getData('auteurs')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['auteurs']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['nom']." ".$value['prenom'] ?></option>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Type de fikr</span>
              </div>
              <select class="form-control" id="cfikr" name="cfikr">
                <?php

                $data = Manager::getData('cfikr')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['cfikr']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Ville</span>
              </div>
              <select class="form-control" id="ville" name="ville">
                <?php
                $data = Manager::getData('ville')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['ville']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Langue</span>
              </div>
              <select class="form-control" id="langue" name="langue">
                <?php
                $data = Manager::getData('langues')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['langue']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </select>
            </div>
            <div class="input-group mb-3" style="text-align: center;">
              <img src="<?= (!empty($_GET['modif'])) ? $src : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
              <!-- hidden file input to trigger with JQuery  -->
              <input type="file" name="photo" id="profile_input" value="" style="display: none;">
            </div>
          </div>
          <!-- /.box-body -->


          <button type="submit" onclick="postData('fikrForm', 'ajouter-fikr'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
          <p id="postMessage">

            </p>
          <?php
          if (!empty($_SESSION['messages'])) {
            if ($_SESSION['messages']['code'] == 1) {
              echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
            } else {
              echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
            }
          }
          ?>
        </form>
      </div>
    </div>
  
  </div>
</div>
<script>
  $(document).ready(function() {
    //set initial state.


    $('#ville').change(function() {

      if ($(this).val() != 6) {
        $('#entity').val(null);
        $('#selectEntity').hide();
      } else {
        $('#selectEntity').show();

      }
      console.log($('#entity').val());
    });
  });
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>