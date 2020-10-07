<?php
$title = "Consulter fikr";
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

    <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-striped table-bordered" id="edit-fikr" >
              <thead>
              <tr>
                  <th>N°</th>
                  <th>Titre</th>
                  <th>Livre</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Auteur</th>
                  <th>Ville</th>
                  <th>Langue</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                $sql = "SELECT file_url, nom, prenom, grade, fk.titre ft, v.titre vt, livre, date_ajout,
                l.titre lt, cf.titre cft, fk.id
                FROM statuts, fikrs fk
                INNER JOIN files f ON fk.photo = f.id
                INNER JOIN auteurs a ON fk.auteur = a.id
                INNER JOIN langues l ON fk.langue = l.id
                INNER JOIN cfikr cf ON fk.cfikr = cf.id
                INNER JOIN ville v ON fk.ville = v.id WHERE a.statut = statuts.id";
                  $data = Manager::getMultiplesRecords($sql);
                // Manager::showError($data);
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
  
  
                ?>
                    <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['ft'] ?></td>
                      <td><?= $value['livre'] ?></td>
                      <td><?= strftime('%a %e %b %G', strtotime($value['date_ajout'])); ?></td>
                      <td><?= $value['cft'] ?></td>
                      <td><?= $value['grade'] ." ". $value['nom'] ." ". $value['prenom'] ?></td>
                      <td><?= $value['vt'] ?></td>
                      <td><?= $value['lt'] ?></td>
                      <td><img src="<?= $value['file_url'] ?>" width="50" alt="img"></td>
                      <td>
                        
                        <a href="index.php?action=addData&fikr=<?= $value['id'] ?>" class="btn btn-primary">
                          <i class="fa fa-plus"></i>
                        </a>
                      </td>
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>