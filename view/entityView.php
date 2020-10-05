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
              <label for="label">Nom </label>
              <input value="" type="text" required class="form-control" id="label" name="label" placeholder="Veuillez entrer le nom de l'entité">
            </div>
            <div class="form-group">
              <label for="domaine">Domaine</label>
              <select class="form-control" id="domaine" name="domaine">
                  <option value="Etablissement scolaire">Etablissement scolaire</option>
                  <option value="Association">Association</option>
                </select>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input value="" type="email" required class="form-control" id="email" name="email" placeholder="Veuillez entrer l'email">
            </div>
            <div class="form-group">
              <label for="phone_number">N° de téléphone</label>
              <input value="" type="text" required class="form-control" id="phone_number" name="phone_number" placeholder="Veuillez entrer le N° de téléphone">
            </div>
            <div class="form-group">
              <label for="bp">Boite postal</label>
              <input value="" type="text" class="form-control" id="bp" name="bp" placeholder="Veuillez entrer la  boite postale">
            </div>
            <div class="form-group">
              <label for="localisation">Localisation</label>
              <input value="" type="text" class="form-control" id="localisation" name="localisation" placeholder="Veuillez entrer le lien Google maps">
            </div>

          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Valider</button>
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
                <th>Nom</th>
                <th>Domaine</th>
                <th>N° de téléphone</th>
                <th>Email</th>
                <th>Boite postale</th>
                <th>Action</th>
              </tr>
              <?php
              $data = Manager::getData('entity')['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <tr>
                    <td><?= $value['label'] ?></td>
                    <td><?= $value['domaine'] ?></td>
                    <td><?= $value['phone_number'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['bp'] ?></td>
                    <td>
                      <a class="btn btn-success">
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