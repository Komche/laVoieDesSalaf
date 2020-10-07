<?php
$title = "Consulter annoncce";
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


    <?php
    $sql = "SELECT file_url, auteur, a.titre att, description, date_annonce, lieu,
              type_annonce, c.titre ct, a.id, first_name, last_name
              FROM annonces a, cannonces c, files f, users u
               WHERE a.cannonce = c.id AND a.photo = f.id AND a.users=u.id";
    $data = Manager::getMultiplesRecords($sql);
    // Manager::showError($data);
    if (is_array($data) || is_object($data)) {
      foreach ($data as $value) {

        $date = new DateTime($value['date_annonce']);
        setlocale(LC_TIME, "fr_FR");
    ?>
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card m-b-30">
            <img class="card-img-top" src="<?= $value['file_url'] ?>" alt="annoce">
            <div class="card-body">
              <p class="text-center mb-3"><span class="badge badge-success text-uppercase"><?= $value['type_annonce'] ?></span></p>
              <h5 class="card-title font-18"><?= $value['att'] ?></h5>
              <p class="card-text mb-0"><?= $value['description'] ?></p>
            </div>
            <div class="card-footer">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="blog-link">
                    <a href="index.php?action=ajouter-annonce&modif=<?=  $value['id']?>" class="btn btn-primary-rgba">Modifier<i class="feather icon-edit ml-2"></i></a>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="blog-meta">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><?= strftime('%a le %e %b %G', strtotime($value['date_annonce'])); ?></li>
                      <li class="list-inline-item">|</li>
                      <li class="list-inline-item">par <a href="#"><?= $value['first_name'] . ' ' . $value['last_name'] ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    <?php
      }
    } else {
      Manager::messages('Aucune donnée trouvé', 'alert-warning');
    }
    ?>

  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>