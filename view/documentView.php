<?php
$title = "Entité";
ob_start();
?>
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title"><?= $title ?></h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
      </div>
    </div>

  </div>
</div>
<div class="container container-margin">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="matricule">Matricule</label>
              <input value="<?= getMatricule() ?>" type="text" required class="form-control" id="matricule" name="matricule" placeholder="Veuillez entrer matricule">
            </div>
            <div class="form-group">
              <label for="entity">Entité</label>
              <select class="form-control" name="entity" id="entity">
                <?php
                $sql = "SELECT * FROM entity";
                $data = Manager::getMultiplesRecords($sql);
                foreach ($data as $key => $value) {

                ?>
                  <option value="<?= $value['id_entity'] ?>"><?= $value['label'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="entity_matricule">Matricule de l'entité</label>
              <input value="" type="text" required class="form-control" id="entity_matricule" name="entity_matricule" placeholder="Veuillez entrer le matricule de l'entité">
            </div>
            <div class="form-group">
              <label for="first_name">Nom</label>
              <input value="" type="text" required class="form-control" id="first_name" name="first_name" placeholder="Veuillez entrer le nom">
            </div>
            <div class="form-group">
              <label for="last_name">Prénom</label>
              <input value="" type="text" required class="form-control" id="last_name" name="last_name" placeholder="Veuillez entrer le prénom">
            </div>
            <div class="form-group">
              <label for="phone_number">N° de téléphone</label>
              <input value="" type="text" required class="form-control" id="phone_number" name="phone_number" placeholder="Veuillez entrer le N° de téléphone">
            </div>
            <div class="form-group">
              <label for="birthday">Date de naissance</label>
              <input value="" type="date" required class="form-control" id="birthday" name="birthday" placeholder="Veuillez entrer la date de naissance">
            </div>
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

    <div class="col-md-12">
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Matricule</th>
                <th>Entité</th>
                <th>Matricule de l'entité</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>N° de téléphone</th>
                <th>Date de Naissance</th>
                <th>Action</th>
              </tr>
              <?php
              $data = Manager::getData('document')['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <tr>
                    <td><?= $value['matricule'] ?></td>
                    <td><?= $value['entity'] ?></td>
                    <td><?= $value['entity_matricule'] ?></td>
                    <td><?= $value['first_name'] ?></td>
                    <td><?= $value['last_name'] ?></td>
                    <td><?= $value['phone_number'] ?></td>
                    <td><?= $value['birthday'] ?></td>
                    <td>
                      <a class="btn btn-primary">
                        <i class="fa fa-edit white"></i>
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
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<br> <br> <br>
<?php
$content = ob_get_clean();
require('template.php');
?>