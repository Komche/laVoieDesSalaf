<?php
$title = "Consulter les données";

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
<div class="container container-margin">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <?php
            if (empty($_GET['dfikr'])) :
              $fikr = Manager::getData('fikrs')['data'];
              if (!empty($_GET['data'])) {
                $sql = "SELECT * FROM fikrs WHERE titre LIKE ? OR livre LIKE ?";
                $fikr = Manager::getMultiplesRecords($sql, [$_GET['data'], $_GET['data']]);
              }
              // Manager::showError($fikr);
              if (is_array($fikr)) :
                foreach ($fikr as $key => $value) :
            ?>
                  <div class="col-md-2">
                    <a href="index.php?action=donnee&dfikr=<?= $value['id'] ?>">
                      <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="fa fa-folder-o fa-2x"></i></span>
                      <p><?= $value['titre'] ?></p>
                    </a>
                  </div>
                  <?php
                endforeach;
              else :
                if (!empty($_GET['data'])) {
                  $sql = "SELECT f.titre ft, d.titre dt, file_url, file_size, file_type FROM datas d, fikrs f, files fi
                  WHERE d.chemin=fi.id AND d.fikr = f.id AND d.titre LIKE ?";
                  $data = Manager::getMultiplesRecords($sql, [$_GET['data']]);
                  if (is_array($data)) :
                    foreach ($data as $key => $value) :
                  ?>
                      <div class="col-md-2">
                        <a href="<?= $value['file_url'] ?>">
                          <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="fa <?= getFontAwsomeByFileType($value['file_type']) ?> fa-2x"></i></span>
                          <p><?= $value['dt'] ?></p>
                        </a>
                      </div>
                    <?php
                    endforeach;
                  else :



                    ?>
                    <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-warning"></i> iniger!</h4>
                      Donnée non trouver
                    </div>
                  <?php
                  endif;
                }
              endif;
            else :
              $sql = "SELECT f.titre ft, d.titre dt, file_url, file_size, file_type FROM datas d, fikrs f, files fi
              WHERE d.chemin=fi.id AND d.fikr = f.id AND d.fikr=?";
              $data = Manager::getMultiplesRecords($sql, [$_GET['dfikr']]);
              if (is_array($data)) :
                foreach ($data as $key => $value) :
                  ?>
                  <div class="col-md-2">
                    <a href="<?= $value['file_url'] ?>">
                      <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="fa <?= getFontAwsomeByFileType($value['file_type']) ?> fa-2x"></i></span>
                      <p><?= $value['dt'] ?></p>
                    </a>
                  </div>
            <?php
                endforeach;
              endif;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Start col -->

  </div>
</div>
<?php
// $content = ob_get_clean();
// require('template.php');
?>