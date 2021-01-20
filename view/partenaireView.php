<?php
$title = "Partenaire";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier partenaire";
  $datas = Manager::getData("partenaire", "id", $_GET['modif'])['data'];
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
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="partenaireForm" role="form" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="libelle">Libelle</label>
              <input type="text" required class="form-control" id="libelle" name="libelle" value="<?= (!empty($_GET['modif'])) ? $datas['libelle'] : "" ?>" placeholder="veuille saisir le libelle">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea required class="form-control" name="description" id="description"><?= (!empty($_GET['modif'])) ? $datas['description'] : "" ?></textarea>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" required class="form-control" id="email" name="email" value="<?= (!empty($_GET['modif'])) ? $datas['email'] : "" ?>" placeholder="veuille saisir le mail">
            </div>
            <div class="form-group">
              <label for="phone_number">N° de téléphone</label>
              <input type="text" required class="form-control" id="phone_number" name="phone_number" value="<?= (!empty($_GET['modif'])) ? $datas['phone_number'] : "" ?>" placeholder="veuille saisir le N° de téléphone">
            </div>
            <div class="form-group">
              <label for="facebook">Facebook</label>
              <input type="text" class="form-control" id="facebook" name="facebook" value="<?= (!empty($_GET['modif'])) ? $datas['facebook'] : "" ?>" placeholder="veuille saisir le lien facebook">
            </div>
            <div class="form-group">
              <label for="linkedin">Linkedin</label>
              <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?= (!empty($_GET['modif'])) ? $datas['linkedin'] : "" ?>" placeholder="veuille saisir le lien linkedin">
            </div>
            <div class="input-group mb-3" style="text-align: center;">
              <img src="<?= (!empty($_GET['modif'])) ? Manager::getData('files', 'id', $datas['photo'])['data']['file_url'] : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
              <!-- hidden file input to trigger with JQuery  -->
              <input type="file" name="photo" id="profile_input" value="" style="display: none;">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" onclick="postData('partenaireForm', 'partenaire'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
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

    <div class="col-md-12">
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
                <th>Description</th>
                <th>Email</th>
                <th>N° de téléphone</th>
                <th>Facebook</th>
                <th>Linkedin</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              <?php
              $partenaire = new partenaire();
              $data = Manager::getDatas($partenaire)->all();
               //Manager::showError($data);
              if (!empty($data) && (is_array($data) || is_object($data))) {
                foreach ($data as $value) {


              ?>
                  <tr>
                    <td><?= $value['libelle'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['phone_number'] ?></td>
                    <td><?= $value['facebook'] ?></td>
                    <td><?= $value['linkedin'] ?></td>
                    <td><img src="<?= Manager::getData('files', 'id', $value['photo'])['data']['file_url'] ?>" alt="" sizes="50" srcset=""></td>
                    <td>
                      <a href="javascript:void()" onclick="getHTML('partenaire&modif=<?= $value['id'] ?>')" class="btn btn-success">
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