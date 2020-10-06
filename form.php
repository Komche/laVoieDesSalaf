
<div class="form-group">
            <label for="matricule">matricule</label>
            <input value="" type="text" required class="form-control" id="matricule" name="matricule" placeholder="Veuillez entrer matricule">
          </div><div class="form-group col-lg-4 col-sm-12">
                    <label for="entity">entity</label>
                    <select class="form-control"  name="entity" id="entity">
                      <?php
                      $sql = "SELECT * FROM entity";
                      $data = Manager::getMultiplesRecords($sql);
                      foreach ($data as $key => $value) {
                      
                      ?>
                      <option value="<?= $value['identity'] ?>"><?= $value['libelleentity'] ?></option>
                    <?php } ?>
                    </select>
                  </div><div class="form-group">
            <label for="entity_matricule">entity_matricule</label>
            <input value="" type="text" required class="form-control" id="entity_matricule" name="entity_matricule" placeholder="Veuillez entrer entity_matricule">
          </div><div class="form-group">
            <label for="first_name">first_name</label>
            <input value="" type="text" required class="form-control" id="first_name" name="first_name" placeholder="Veuillez entrer first_name">
          </div><div class="form-group">
            <label for="last_name">last_name</label>
            <input value="" type="text" required class="form-control" id="last_name" name="last_name" placeholder="Veuillez entrer last_name">
          </div><div class="form-group">
            <label for="phone_number">phone_number</label>
            <input value="" type="text" required class="form-control" id="phone_number" name="phone_number" placeholder="Veuillez entrer phone_number">
          </div><div class="form-group">
            <label for="birthday">birthday</label>
            <input value="" type="text" required class="form-control" id="birthday" name="birthday" placeholder="Veuillez entrer birthday">
          </div>
