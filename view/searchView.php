<?php
$title = "Recherche";

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
  <div id="#searchResult" >
    <div id="allDoc" class="row">
      <?php
      $data = file_get_contents(FIRESTORE_PATH . "documents");
      // var_dump(json_decode($data, true));
      $data = json_decode($data, true)['documents'];
      if (is_array($data) || is_object($data)) {
        foreach ($data as $key => $value) {
          // var_dump($value);
          // echo  $data[$key];
          $value = $value['fields'];
          // if ($key == 'imgpath') {
          unset($value['model']);
          unset($value['entity']);
          
          
          ?>
          <div class="col-md-4">
            <div class="card m-b-30">
              <div class="card-header with-border">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="https://IslamNiger.akoybiz.com/index.php?mat=<?= $value['matricule']['stringValue'] ?>" target="_blank" rel="noopener noreferrer">Voir plus</a>
                <ul class="list-group">
                  <?php
                  // unset($value['matricule']);
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
      ?>
    </div>
    <div style="display: none;" id="searchDoc">
    
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>