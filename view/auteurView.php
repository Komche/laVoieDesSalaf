<?php
global $title;
$title = "Auteur";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier auteur";
  $sql = "SELECT file_url, nom, prenom, description, grade, titre, a.id, statut, ville FROM auteurs a
      LEFT JOIN files f ON a.photo = f.id
      LEFT JOIN statuts s ON a.statut = s.id
      LEFT JOIN ville v ON a.ville = v.id WHERE a.id=?";
        $datas = Manager::getSingleRecords($sql, [$_GET['modif']]);
}
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
        <form ville="form" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nom</span>
              </div>

              <input type="text" required class="form-control" id="nom" name="nom" placeholder="Veuillez entrer le nom de l'auteur" value="<?= (!empty($_GET['modif'])) ? $datas['nom'] : "" ?>">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Prénom</span>
              </div>
              <input type="text" required class="form-control" id="prenom" name="prenom" placeholder="Veuillez entrer le prénom de l'auteur" value="<?= (!empty($_GET['modif'])) ? $datas['prenom'] : "" ?>">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
              </div>
              <textarea required class="form-control" name="description" id="description" placeholder="Veuillez décrire l'auteur"><?= (!empty($_GET['modif'])) ? $datas['description'] : "" ?></textarea>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Statut</span>
              </div>
              <select class="form-control" id="statut" name="statut">
                <?php

                $data = Manager::getData('statuts')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['statut']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['grade'] ?></option>
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
            <div class="input-group mb-3" style="text-align: center;">
              <img src="<?= (!empty($_GET['modif'])) ? $datas['file_url'] : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
              <!-- hidden file input to trigger with JQuery  -->
              <input type="file" name="photo" id="profile_input" value="" style="display: none;">
            </div>
          </div>
          <!-- /.box-body -->


          <button type="submit" class="btn btn-success">Valider</button>
          <p></p>
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
    <div class="col-md-12">
      <div class="row">

        <?php
        $sql = "SELECT file_url, nom, prenom, description, grade, titre, a.id FROM auteurs a
      LEFT JOIN files f ON a.photo = f.id
      LEFT JOIN statuts s ON a.statut = s.id
      LEFT JOIN ville v ON a.ville = v.id";
        $auteur = Manager::getMultiplesRecords($sql);
        if (is_array($auteur)) :
          foreach ($auteur as $key => $value) :
        ?>
            <div class="col-lg-6 col-xl-4">
              <div class="card m-b-30">
                <div class="card-body text-center">
                  <div class="user-slider-item" style="width: 100%; display: inline-block;">
                    <img src="<?= $value['file_url'] ?>" alt="avatar" width="100" class="rounded-circle mt-3 mb-4">
                    <h5><?= $value['grade']  . " " . $value['nom'] . " " . $value['prenom'] ?></h5>
                    <p><?= $value['titre'] ?></p>
                    <p><?= $value['description'] ?></p>
                  </div>

                </div>
                <div class="card-footer text-center">
                <a href="index.php?action=auteur&modif=<?=  $value['id']?>" class="btn btn-primary-rgba">Modifier<i class="feather icon-edit ml-2"></i></a>
                </div>
              </div>
            </div>
        <?php
          endforeach;
        endif
        ?>
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
$content = ob_get_clean();
require('template.php');
?>