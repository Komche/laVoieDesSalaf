<?php
$title = "Model";
$module = 1;
if (isset($_GET['module'])) extract($_GET);
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
<br>
<div class="container">
  <div class="row">
  <?php
    $data = Manager::getData("model", "entity", "chec5f2f296c876071.51955557");
    if ((is_array($data) || is_object($data)) && empty($_GET['uniqueId'])):
      
    
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
    <?php else : ?>
    <div class="col-md-12">
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
                        <input required class="form-control" id="entity" name="entity" value="chec5f2f296c876071.51955557" placeholder="description du module">
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
    <?php endif; ?>
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>