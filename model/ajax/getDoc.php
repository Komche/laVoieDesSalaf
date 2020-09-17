<div class="container">
    <div class="row">
        <?php
        if (!empty($_GET['sDoc'])) {


            $data = file_get_contents(FIRESTORE_PATH . "documents/".$_GET['sDoc']);
            // var_dump(json_decode($data, true));
            $data = json_decode($data, true)['fields'];
            if (is_array($data) || is_object($data)) {
                    unset($data['model']);
                    unset($data['entity']);


        ?>
                    <div class="col-md-4">
                        <div class="card m-b-30">
                            <div class="card-header with-border">
                                <h3 class="card-title"><?= $title ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="https://checker.akoybiz.com/index.php?mat=<?= $data['matricule']['stringValue'] ?>" target="_blank" rel="noopener noreferrer">Voir plus</a>
                                <ul class="list-group">
                                    <?php
                                    unset($data['matricule']);
                                    unset($data['imgpath']);
                                    unset($data['documentQrpath']);
                                    $keys = array_keys($data);
                                    foreach ($keys as $k => $v) {


                                    ?>
                                        <li class="list-group-item"><?= ($v == 'entity_matricule') ? 'ref: ' . $data[$v]['stringValue'] : $v . ": " . $data[$v]['stringValue'] ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                </ul>
                            </div>
                        </div>
                    </div>

            <?php

            }
            ?>
    </div>
<?php }else {
    echo("<p> Document non trouvé </p>");
}
 ?>
</div>