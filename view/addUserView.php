<?php
global $title;
$title = "Ajouter un utilisateur";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier utilisateur";
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
    <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
        <?php
        $module = Manager::getData("module", "action_url", "showUser")['data']['id'];
        if (haveAction($_SESSION['user-iniger']['roleId'], $module)) :
        ?>
          <a href="javascript:void()" onclick="getHTML('showUser')" class="btn btn-success-rgba"><i class="fa fa-eye"></i> Liste des Utilisateur</a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card m-b-30">
      <div class="card-header">
        <h3 class="card-title"><?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="userForm" role="form" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nom</span>
            </div>

            <input type="text" required class="form-control" id="first_name" name="first_name" placeholder="Veuillez entrer le nom de l'utilisateur" value="<?= (!empty($_GET['modif'])) ? $datas['first_name'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Prénom</span>
            </div>
            <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Veuillez entrer le prénom de l'utilisateur" value="<?= (!empty($_GET['modif'])) ? $datas['last_name'] : "" ?>">
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Matricule</span>
            </div>
            <input type="tel" required class="form-control" id="matricule" name="matricule" placeholder="Veuillez entrer le matricule" value="<?= (!empty($_GET['modif'])) ? $datas['matricule'] : "" ?>">
          </div> -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">N° de téléphone</span>
            </div>
            <input type="tel" required class="form-control" id="phone_number" name="phone_number" placeholder="Veuillez entrer le N° de téléphone de l'utilisateur" value="<?= (!empty($_GET['modif'])) ? $datas['phone_number'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Type d'agent</span>
            </div>
            <select class="form-control" id="type_agent" name="type_agent">
              <?php

              $data = Manager::getData('type_agent')['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['type_agent']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['label'] ?></option>
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
              <span class="input-group-text">Rôle</span>
            </div>
            <select class="form-control" id="role" name="role">
              <?php
              $data = Manager::getData('roles')['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['role']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" value="isEntity" id="isEntity">
            <label class="form-check-label" for="isEntity">
              Entité
            </label>
          </div> -->
       
          <div class="input-group mb-3" style="text-align: center;">
            <img src="<?= (!empty($_GET['modif'])) ? $src : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="photo profile">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="profile_picture" id="profile_input" value="" style="display: none;">
          </div>
        </div>
        <!-- /.box-body -->


        <button type="submit" onclick="postData('userForm', 'addUser'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
        <p id="postMessage">

            </p>
        <?php
        if (isset($_SESSION['messages'])) {
          echo Manager::messages($_SESSION['messages'], 'alert-danger');
        }
        ?>
      </form>
    </div>
  </div>
</div>

<?php
// $content = ob_get_clean();
// require('template.php');
?>