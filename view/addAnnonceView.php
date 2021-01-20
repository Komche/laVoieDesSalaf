<?php
$title = "Annonce";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier annonce";
  $sql = "SELECT file_url, auteur, a.titre titre, description, date_annonce, lieu,
  type_annonce, c.titre ct, a.id, first_name, last_name, cannonce, users
  FROM annonces a, cannonces c, files f, users u
   WHERE a.cannonce = c.id AND a.photo = f.id AND a.users=u.id AND a.id=?";
$datas = Manager::getSingleRecords($sql, [$_GET['modif']]);
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
        <form id="annonceForm" role="form" method="post" enctype="multipart/form-data">
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
              <label for="lieu">Lieu de l'évènement</label>
              <input type="text" required class="form-control" id="lieu" name="lieu" value="<?= (!empty($_GET['modif'])) ? $datas['lieu'] : "" ?>" placeholder="veuillez saisir le lieu">
              <input type="hidden" required class="form-control" id="description" name="description" value="<?= (!empty($_GET['modif'])) ? $datas['lieu'] : "" ?>" placeholder="veuillez saisir le lieu de l'évènement">
            </div>
            <div class="form-group">
              <label for="date_event">Date de l'évènement</label>
              <input type="date" required class="form-control" id="date_event" name="date_event" value="<?= (!empty($_GET['modif'])) ? $datas['date_event'] : "" ?>" placeholder="veuillez saisir la date de l'évènement">
            </div>
            <div class="form-group">
              <label for="time_event">Heure de l'évènement</label>
              <input type="time" required class="form-control" id="time_event" name="time_event" value="<?= (!empty($_GET['modif'])) ? $datas['time_event'] : "" ?>" placeholder="L'heure de l'évènement">
            </div>
            <div class="form-group">
              <label for="type_annonce">Type</label>
              <select required class="form-control" name="type_annonce" id="type_annonce">
                <option <?=  empty($_GET['modif'])? '' : ($datas['type_annonce'] == "Annonce" ? 'selected' : '')  ?> value="Annonce">Annonce</option>
                <option <?=  empty($_GET['modif'])? '' : ($datas['type_annonce'] == "Actualité" ? 'selected' : '')  ?> value="Actualité">Actualité</option>
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
                    <option <?=  empty($_GET['modif'])? '' : ($datas['cannonce'] == $value['id'] ? 'selected' : '')  ?> value="<?=  $value['id'] ?>"><?= $value['titre'] ?></option>
                <?php
                  endforeach;
                endif
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <div id="summernote"><?= empty($_GET['modif'])? 'Assalamu aleykum' : $datas['description'] ?></div>
            </div>

          </div>
          <div class="form-group">
            <img src="<?= (!empty($_GET['modif'])) ? $datas['file_url'] : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="photo" id="profile_input" value="" style="display: none;">
          </div>
          <div class="card-footer">
            <button type="submit" onclick="postData('annonceForm', 'ajouter-annonce'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
            <p id="postMessage">

            </p>
            <?php
            if (!empty($_SESSION['messages'])) {
              // Manager::showError($_SESSION['messages']['code']);
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
<script src="public/vendor/js/custom/custom-form-editor.js"></script>
<script>
  console.log($('.note-editable'), "ok");

$('#description').val($('.note-editable').html());
$('.note-editable').bind('DOMSubtreeModified', function() {
    console.log($(this).html(), 'ok');
    $('#description').val($(this).html());

});
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>