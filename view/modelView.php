<?php
$title = "Model";
$module = 1;
$uniqueID = "";
if (isset($_GET['module'])) extract($_GET);
if (!empty($_SESSION['user']['entity'])) {
  $uniqueID = $_SESSION['user']['entity']['uniqueId'];
} elseif (!empty($_GET['uniqueID'])) {
  $uniqueID = $_GET['uniqueID'];
}
ob_start();
?>
<style>
  pre {
    background: #f4f4f4;
    border: 1px solid #ddd;
    border-left: 3px solid #f36d33;
    color: #666;
    page-break-inside: avoid;
    font-family: monospace;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 1.6em;
    max-width: 100%;
    overflow: auto;
    padding: 1em 0.2em;
    display: block;
    display:table;
    white-space: pre-wrap; /* css-3 */
    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
    white-space: -pre-wrap; /* Opera 4-6 */
    white-space: -o-pre-wrap; /* Opera 7 */
    word-wrap: break-word; /* Internet Explorer 5.5+ */
}
</style>
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
<br>
<?php if ($_SESSION['user']['roleId'] == 1  && empty($uniqueID) && empty($_GET['uniqueId'])) : ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header with-border">
            <h3 class="card-title">Enités</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th style="width: 10px">Nom de l'entité</th>

                </tr>
                <?php
                $data = Manager::getData("entity")['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <tr>
                      <td><a href="index.php?action=model&uniqueID=<?= $value['uniqueId'] ?>"><?= $value['label'] ?></a></td>
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
<?php else : ?>
  <div class="container">
    <div class="row">
      <?php
      // var_dump($_SESSION['user']['entity']);
      $data = Manager::getData("model", "entity", $uniqueID,  true)['data'];
      if ((is_array($data) || is_object($data)) && empty($_GET['uniqueId'])) :

      ?>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">Model</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">Nom du model</th>

                  </tr>
                  <?php
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {


                  ?>
                      <tr>
                        <td><a href="index.php?action=model&uniqueId=<?= $value['uniqueId'] ?>"><?= $value['model_name'] ?></a></td>
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
        <div style="margin-bottom: 100px;" class="col-md-12 container-margin">
          <div class="card">
            <div class="card-header with-border">
              <i class="fa fa-server"></i>
              <h3 class="card-title" id="modelName"></h3>
              <a onclick="addTableRowModel()" style="float: right" class="btn btn-primary">
                <i class="fa fa-plus white"></i>
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="" id="add_model">
                <table id="table_model" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Clé du model</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="body_model">
                    <tr id="addModel">
                      <form>

                        <td>
                          <div class="form-group">
                            <input required class="form-control" id="model_name" name="model_name" placeholder="le nom du model que vous voulez créer">
                          </div>
                          <div style="display:none" class="form-group">
                            <input required class="form-control" id="entity" name="entity" value="<?= $uniqueID ?>" placeholder="description du module">
                          </div>

                        </td>
                        <td>
                          <button type="button" onclick="addModel()" class="btn btn-primary">
                            <i class="fa  fa-check-square white"></i>
                            Valider
                          </button>
                        </td>
                    </tr>
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
      <?php else : ?>
        <div class="col-md-12 container-margin" style="margin-bottom: 100px;">
          <div class="card">
            <div class="card-header with-border">
              <i class="fa fa-server"></i>
              <h3 class="card-title" id="modelName"></h3>
              <a onclick="addTableRowModel()" style="float: right" class="btn btn-primary">
                <i class="fa fa-plus white"></i>
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="" id="add_model">
                <table id="table_model" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Propriété du model</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="body_model">
                    <tr id="addModel">
                      <form>

                        <td>
                          <div class="form-group">
                            <input required class="form-control" id="model_name" name="model_name" placeholder="le nom du model que vous voulez créer">
                          </div>
                          <div style="display:none" class="form-group">
                            <input required class="form-control" id="entity" name="entity" value="<?= $uniqueID ?>" placeholder="description du module">
                          </div>

                        </td>
                        <td>
                          <button type="button" onclick="addModel()" class="btn btn-primary">
                            <i class="fa  fa-check-square white"></i>
                            Valider
                          </button>
                        </td>
                    </tr>
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
        <div class="col-md-12 container-margin" style="margin-bottom: 100px;">
          <div class="card">
            <div class="card-header with-border">
              <i class="fa fa-code"></i>
              <h3 class="card-title" id="">API du webservice</h3>
              
            </div>
            <div class="card-body">
              <pre>
                <p><b><i>Endpoint: <a href="https://checker.akoybiz.com/index.php?api=addDocument">https://checker.akoybiz.com/index.php?api=addDocument</a></i></b></p>
                <!-- <br> -->
                <p><b><i>Method: POST</i></b></p>
                <!-- <br> -->
                <p><b id="param" style="width:100%; word-wrap: break-word !important;">Paramètre: </b></p>
              </pre>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<?php
$content = ob_get_clean();
require('template.php');
?>