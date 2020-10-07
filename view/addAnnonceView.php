<?php
$title = "Annonce";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier annonce";
  $datas = Manager::getData("annonces", "id", $_GET['modif'])['data'];
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
<div class="container container-margin" style="margin-bottom: 110px;">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="titre">Libelle</label>
              <input type="text" required class="form-control" id="titre" name="titre" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>" placeholder="veuillez saisir le titre">
            </div>
            <div class="form-group">
              <label for="auteur">Auteur</label>
              <input type="text" required class="form-control" id="auteur" name="auteur" value="<?= (!empty($_GET['modif'])) ? $datas['auteur'] : "" ?>" placeholder="veuillez saisir le nom de l'auteur">
              <input type="hidden" required class="form-control" id="users" name="users" value="<?= (!empty($_GET['modif'])) ? $datas['users'] : $_SESSION['user-iniger']['id'] ?>" placeholder="veuillez saisir le nom de l'auteur">
            </div>
            <div class="form-group">
              <label for="lieu">Lieu</label>
              <input type="text" required class="form-control" id="lieu" name="lieu" value="<?= (!empty($_GET['modif'])) ? $datas['lieu'] : "" ?>" placeholder="veuillez saisir le lieu">
              <input type="hidden" required class="form-control" id="description" name="description" value="<?= (!empty($_GET['modif'])) ? $datas['lieu'] : "" ?>" placeholder="veuillez saisir le lieu">
            </div>
            <div class="form-group">
              <label for="date_annonce">Date</label>
              <input type="date" required class="form-control" id="date_annonce" name="date_annonce" value="<?= (!empty($_GET['modif'])) ? $datas['date_annonce'] : "" ?>" placeholder="veuillez saisir la date">
            </div>
            <div class="form-group">
              <label for="type_annonce">Type</label>
              <select required class="form-control" name="type_annonce" id="type_annonce">
                <option value="Annonce">Annonce</option>
                <option value="Actualité">Actualité</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cannonce">Catégorie</label>
              <select required class="form-control" name="cannonce" id="cannonce">
                <?php
                $cannonce = Manager::getData('cannonces')['data'];
                if (is_array($cannonce)) :
                  foreach ($cannonce as $key => $value) :

                ?>
                    <option value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
                <?php
                  endforeach;
                endif
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <div id="summernote">Assalamu aleykum</div>
            </div>

          </div>
          <div class="form-group">
            <img src="<?= (!empty($_GET['modif'])) ? $src : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="photo" id="profile_input" value="" style="display: none;">
          </div>
          <div class="card-footer">
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
          </div>
        </form>
      </div>
    </div>


  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>