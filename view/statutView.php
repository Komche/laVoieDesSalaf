<?php
$title = "Statut";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier Statut";
  $datas = Manager::getData("statuts", "id", $_GET['modif'])['data'];
}
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
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="statutForm" role="form" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="grade">Grade</label>
              <input type="text" required class="form-control" id="grade" name="grade" value="<?= (!empty($_GET['modif'])) ? $datas['grade'] : "" ?>" placeholder="veuille saisir le grade">
            </div>
            
          </div>
          <div class="card-footer">
            <button type="submit" onclick="postData('statutForm', 'statut'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
            <p id="postMessage">

            </p>
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
                <th>Libellé</th>
                <th>Action</th>
              </tr>
              <?php
              $statut = new statuts();
              $data = Manager::getDatas($statut)->all();
              // Manager::showError($data);
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <tr>
                    <td><?= $value['grade'] ?></td>
                    <td>
                      <a href="javascript:void()" onclick="getHTML('statut&modif=<?= $value['id'] ?>')"  class="btn btn-success">
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
// $content = ob_get_clean();
// require('template.php');
?>