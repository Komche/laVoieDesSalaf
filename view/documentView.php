<?php
$title = "Document";
$uniqueID = "";
$mat = generateRandomString();
if (!empty($_SESSION['user']['entity'])) {
  $uniqueID = $_SESSION['user']['entity']['uniqueId'];
} elseif (!empty($_GET['uniqueID'])) {
  $uniqueID = $_GET['uniqueID'];
}
$sql = "";
$id_entity = 0;
if (!empty($_GET['uniqueId'])) {
  $sql = "SELECT id_entity id FROM entity e LEFT JOIN model m ON e.uniqueId = m.entity WHERE m.uniqueId=?";
  $id_entity = Manager::getSingleRecords($sql, [$_GET['uniqueId']])['id'];
} else {
  $sql = "SELECT id_entity id FROM entity WHERE uniqueId=?";
  $id_entity = Manager::getSingleRecords($sql, [$uniqueID])['id'];
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
<?php if ($_SESSION['user']['roleId'] == 1  && empty($uniqueID) && empty($_GET['uniqueId'])) : ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header with-border">
            <h3 class="card-title">Enités</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th style="width: 10px">Nom de l'entité</th>

                </tr>
                <?php
                $data = Manager::getData("entity")['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <tr>
                      <td><a href="index.php?action=document&uniqueID=<?= $value['uniqueId'] ?>"><?= $value['label'] ?></a></td>
                    </tr>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="container container-margin">
    <div class="row">
      <?php
      $data = Manager::getData("model", "entity", $uniqueID, true)['data'];
      if ((is_array($data) || is_object($data)) && empty($_GET['uniqueId'])) :


      ?>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">Model</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">Nom du model</th>

                  </tr>
                  <?php
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {


                  ?>
                      <tr>
                        <td><a href="index.php?action=document&uniqueId=<?= $value['uniqueId'] ?>"><?= $value['model_name'] ?></a></td>
                      </tr>
                  <?php
                    }
                  } else {
                    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              </ul>
            </div>
          </div>
        </div>
      <?php else : ?>
        <div class="col-md-12">
          <div class="card m-b-30">
            <div class="card-header with-border">
              <h3 class="card-title"><?= $title ?></h3>
            </div>
            <!-- form start -->
            <form role="form" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="matricule">Matricule</label>
                  <input disabled value="<?= $mat ?>" type="text" required class="form-control" placeholder="Veuillez entrer matricule">
                  <input value="<?= $mat ?>" type="hidden" required class="form-control" id="matricule" name="matricule" placeholder="Veuillez entrer matricule">
                </div>
                <div class="form-group">
                  <label for="entity_matricule">Référence (identifiant) du document</label>
                  <input value="" type="text" required class="form-control" id="entity_matricule" name="entity_matricule" placeholder="Veuillez entrer la réfrence">
                  <input value="<?= $id_entity ?>" type="hidden" required class="form-control" id="entity" name="entity" placeholder="Veuillez entrer la réfrence">
                  <input value="<?= $_GET['uniqueId'] ?>" type="hidden" required class="form-control" id="model" name="model" placeholder="Veuillez entrer la réfrence">
                </div>
                <?php
                $data = file_get_contents(FIRESTORE_PATH . "model/" . $_GET['uniqueId']);
                $data = json_decode($data)->fields;
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $key => $value) {
                    if ($key != 'model_name' && $key != "uniqueId" && $key != "entity") {

                ?>
                      <div class="form-group">
                        <label for="<?= $value->stringValue ?>"><?= ucfirst($value->stringValue) ?></label>
                        <input value="" type="<?= strpos($value->stringValue, 'date') ? "date": 'text' ?>" required class="form-control" id="<?= $value->stringValue ?>" name="<?= $value->stringValue ?>" placeholder="Veuillez entrer <?= $value->stringValue ?>">
                      </div>

                <?php }
                  }
                }
                ?>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
                <p></p>
                <?php
                if (isset($_SESSION['messages'])) {
                  echo Manager::messages($_SESSION['messages'], 'alert-danger');
                }
                ?>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
  <div class="container ">
    <div class="row">

      <?php
        $data = file_get_contents(FIRESTORE_PATH . "model/" . $_GET['uniqueId'] . "/document");
        // var_dump(json_decode($data, true));
        $data = json_decode($data, true)['documents'];
        if (is_array($data) || is_object($data)) {
          foreach ($data as $key => $value) {
            // var_dump($value);
            // echo  $data[$key];
            $value = $value['fields'];
            // if ($key == 'imgpath') {
            unset($value['model']);
            unset($value['matricule']);
            unset($value['entity']);


      ?>
          <div class="col-md-4">
            <div class="card m-b-30">
              <div class="card-header with-border">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                <img style="width: 100%;" src="http://checker.akoybiz.com/<?= $value['imgpath']['stringValue'] ?>" alt="">
                <a href="http://checker.akoybiz.com/<?= $value['imgpath']['stringValue'] ?>" target="_blank" rel="noopener noreferrer">Télécharger</a>
                <ul class="list-group">
                  <?php
                  unset($value['imgpath']);
                  unset($value['documentQrpath']);
                  $keys = array_keys($value);
                  foreach ($keys as $k => $v) {


                  ?>
                    <li class="list-group-item"><?= ($v == 'entity_matricule') ? 'ref: ' . $value[$v]['stringValue'] : str_replace("_"," ",$v) . ": " . $value[$v]['stringValue'] ?></li>
                  <?php } ?>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                </ul>
              </div>
            </div>
          </div>

    <?php

          }
        }
      endif;
    ?>
    </div>
  </div>
<?php endif ?>
<br> <br> <br>
<?php
$content = ob_get_clean();
require('template.php');
?>