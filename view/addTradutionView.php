<?php
$title = "Traduction";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier Traduction";
 
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
              <label for="key">Clés</label>
              <input type="text" required class="form-control" id="key" name="key" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>" placeholder="veuillez saisir le clé">
            </div>
            <div class="form-group">
              <label for="value">value</label>
              <input type="text" required class="form-control" id="value" name="value" value="<?= (!empty($_GET['modif'])) ? $datas['time_event'] : "" ?>" placeholder="Le text à afficher">
            </div>
            
            <div class="form-group">
              <label for="langue">Langue</label>
              <select required class="form-control" name="langue" id="langue">
                <?php
                $langue = Manager::getData('langues')['data'];
                if (is_array($langue)) :
                  foreach ($langue as $key => $value) :

                ?>
                    <option <?=  empty($_GET['modif'])? '' : ($datas['cTraduction'] == $value['id'] ? 'selected' : '')  ?> value="<?=  $value['code'] ?>"><?= $value['titre'] ?></option>
                <?php
                  endforeach;
                endif
                ?>
              </select>
            </div>
            

          </div>
          
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Valider</button>
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
<?php
$content = ob_get_clean();
require('template.php');
?>