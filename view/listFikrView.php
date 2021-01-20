<?php
$title = "Consulter fikr";
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
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-striped table-bordered" id="edit-fikr">
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
                      <td><?= $value['grade'] . " " . $value['nom'] . " " . $value['prenom'] ?></td>
                      <td><?= $value['vt'] ?></td>
                      <td><?= $value['lt'] ?></td>
                      <td><img src="<?= $value['file_url'] ?>" width="50" alt="img"></td>
                      <td>

                        <a href="javascript:void()" onclick="getHTML('addData&fikr=<?= $value['id'] ?>')" class="btn btn-primary">
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

<script>
  <?php
 
    $type = "";
    $auteur = "";
    $ville = "";
    $langue = "";
    $data = Manager::getData('cfikr')['data'];
    $data_auteur = Manager::getData('auteurs')['data'];
    $data_ville = Manager::getData('ville')['data'];
    $data_langue = Manager::getData('langues')['data'];
    if (is_array($data) || is_object($data)) {

      $t = count($data) - 1;
      $i = 0;
      foreach ($data as  $value) {
        if ($t != 0) {
          if ($i == 0) {

            $type .= '{"' . $value['id'] . '":"' . $value['titre'] . '",';
          } elseif ($i < $t) {
            $type .= '{"' . $value['id'] . '":"' . $value['titre'] . '",';
          } else {
            $type .= '"' . $value['id'] . '":"' . $value['titre'] . '"}';
          }
        } else {
          $type .= '{"' . $value['id'] . '":"' . $value['titre'] . '"}';
        }
        $i++;
      }
      // die($type);
    }
    if (is_array($data_auteur) || is_object($data_auteur)) {

      $t = count($data_auteur) - 1;
      $i = 0;
      foreach ($data_auteur as  $value) {
        if ($t != 0) {
          if ($i == 0) {

            $auteur .= '{"' . $value['id'] . '":"' . $value['nom'] . ' ' . $value['prenom'] . '",';
          } elseif ($i < $t) {
            $auteur .= '"' . $value['id'] . '":"' . $value['nom'] . ' ' . $value['prenom'] . '",';
          } else {
            $auteur .= '"' . $value['id'] . '":"' . $value['nom'] . ' ' . $value['prenom'] . '"}';
          }
        } else {
          $auteur .= '{"' . $value['id'] . '":"' . $value['nom'] . ' ' . $value['prenom'] . '"}';
        }
        $i++;
      }
      // die($type);
    }
    if (is_array($data_ville) || is_object($data_ville)) {

      $t = count($data_ville) - 1;
      $i = 0;
      foreach ($data_ville as  $value) {
        if ($t != 0) {
          if ($i == 0) {

            $ville .= '{"' . $value['id'] . '":"' . $value['titre'] . '",';
          } elseif ($i < $t) {
            $ville .= '"' . $value['id'] . '":"' . $value['titre'] . '",';
          } else {
            $ville .= '"' . $value['id'] . '":"' . $value['titre'] . '"}';
          }
        } else {
          $ville .= '{"' . $value['id'] . '":"' . $value['titre'] . '"}';
        }
        $i++;
      }
      // die($type);
    }
    if (is_array($data_langue) || is_object($data_langue)) {

      $t = count($data_langue) - 1;
      $i = 0;
      foreach ($data_langue as  $value) {
        if ($t != 0) {
          if ($i == 0) {

            $langue .= '{"' . $value['id'] . '":"' . $value['titre'] . '",';
          } elseif ($i < $t) {
            $langue .= '"' . $value['id'] . '":"' . $value['titre'] . '",';
          } else {
            $langue .= '"' . $value['id'] . '":"' . $value['titre'] . '"}';
          }
        } else {
          $langue .= '{"' . $value['id'] . '":"' . $value['titre'] . '"}';
        }
        $i++;
      }
      // die($type);
    }
  ?>
    console.log(<?php echo $type ?>);

    $('#edit-fikr').Tabledit({
      url: 'index.php?action=consulter-fikr',
      deleteButton: false,
      hideIdentifier: true,
      columns: {
        identifier: [0, 'id'],
        editable: [
          [1, 'titre'],
          [2, 'livre'],
          [3, 'date_ajout'],
          [4, 'cfikr', '<?= $type ?>'],
          [5, 'auteur', '<?= $auteur ?>'],
          [6, 'ville', '<?= $ville ?>'],
          [7, 'langue', '<?= $langue ?>']
        ]
      },

      onDraw: function() {
        console.log('onDraw()');
      },
      onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
      },
      onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
      },
      onAlways: function() {
        console.log('onAlways()');
      },
      onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
      }
    });

  
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>