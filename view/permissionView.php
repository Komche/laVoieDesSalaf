<?php
$title = "Permission";
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

    <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <i class="fa fa-server"></i>
          <h3 class="card-title"><?= Manager::getData('module', 'id', $module)['data']['name'] ?></h3>
          <a onclick="addTableRow()" style="float: right" class="btn btn-primary">
            <i class="fa fa-plus white"></i>
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="" id="add_permission">
            <table id="table_permission" class="table table-bordered">
              <thead>
                <tr>
                  <th>Permission</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="body_permission">
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