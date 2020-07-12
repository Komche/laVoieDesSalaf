<?php 
    $title = "Permission";
    $module = 1;
    if(isset($_GET['module'])) extract($_GET);
    ob_start();
?>
    <div class="row">

        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            <i class="fa fa-server"></i>
              <h3 class="box-title"><?= Manager::getData('module', 'id', $module)['data']['name']?></h3>
              <a onclick="addTableRow()" style="float: right" class="btn btn-primary">
                      <i class="fa fa-plus"></i> 
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" id="add_permission">
              <table id="table_permission" class="table table-bordered">
                <thead><tr>
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
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              </ul>
            </div>
          </div>
        </div>
    </div>
<?php 
    $content = ob_get_clean();
    require('template.php');
?>