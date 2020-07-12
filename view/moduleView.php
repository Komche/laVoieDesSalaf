<?php
$role = 1;
if (isset($_GET['role'])) extract($_GET);
$title = "Module";
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
    <?php if (!isset($_GET['role'])) : ?>
      <div class="col-md-6">
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
                <label for="name">Nom du module</label>
                <input type="text" required class="form-control" id="name" name="name" placeholder="Le nom du module">
              </div>
              <div class="form-group">
                <label for="name">icon</label>
                <input type="text" class="form-control" id="icon" name="icon" placeholder="icon sous-format fontawsome (pas obligatoire)">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea required class="form-control" id="description" name="description" placeholder="description du module"></textarea>
              </div>
            </div>
            <!-- /.card-body -->

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
    <?php endif; ?>
    <div class="<?= (isset($_GET['role'])) ? 'col-md-12' : 'col-md-6' ?>">
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title"><b><?= isset($_GET['role']) ? Manager::getData('roles', 'id', $role)['data']['name'] : 'Module' ?></b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>Nom du module</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                <?php
                $data = Manager::getData('module');
                $data = $data['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {

                    //var_dump(Manager::getData('module', "id", $value['sub_module'])); die;
                ?>
                    <tr>
                      <td><?php echo $value['name'];
                          echo (!empty($value['sub_module'])) ? "<b> - sous menu de (" . Manager::getData('module', "id", $value['sub_module'])['data']['name'] . ")</b>" : ""   ?></td>
                      <td><?= $value['description'] ?></td>
                      <td>
                        <?php if (!isset($_GET['role'])) : ?>
                          <a class="btn btn-primary">
                            <i class="fa fa-edit white"></i>
                          </a>
                          <a href="index.php?action=permission&module=<?= $value['id'] ?>" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                          </a>
                        <?php else : ?>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkcard">
                                <label>
                                  <input class="module_is_checked" onchange="addPermissionRole(this)" value="<?= $value['id'] ?>" type="checkbox"> ajouter au module
                                </label>
                              </div>
                            </div>
                          </div>
                        <?php endif; ?>
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
          </form>
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