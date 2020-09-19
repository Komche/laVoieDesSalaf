<?php
$title = "Pays";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier du pays";
  $datas = Manager::getData("country", "id", $_GET['modif'])['data'];
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
<div class="container container-margin">
  <div class="row">
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nom du pays</label>
              <input type="text" required class="form-control" id="name" name="name" value="<?= (!empty($_GET['modif'])) ? $datas['name'] : "" ?>" placeholder="veuille saisir le pays">
            </div>
            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Valider</button>
            <p></p>
            <?php
            if (!empty($_SESSION['messages'])) {
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

    <div class="col-md-6">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Nom du pays</th>
                <th>Action</th>
              </tr>
              <?php
              $pays = new Country();
              $data = Manager::getDatas($pays)->all();
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <tr>
                    <td><?= $value['name'] ?></td>
                    <td>
                      <a href="index.php?action=pays&modif=<?= $value['id'] ?>" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
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
<?php
$content = ob_get_clean();
require('template.php');
?>