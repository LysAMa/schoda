  <form action="" method="POST"  data-parsley-validate autocomplete="off">
    <div class="modal fade" id="registerModal" role="dialog">
      <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header panel panel-primary">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
           <?php include("Public/partials/errors.php"); ?>
            <div class="row">
             <div class="col-sm-6">
              <label>Nom de L'organisation</label>
              <input type="text" name="orgName" id="orgName" required="required" class="form-control"  placeholder="@Schoda"  value="<?= getSaveFields('orgName')?>"/>
            </div>
            <div class="col-sm-6">
              <label>Nom d'utilisateur</label>
              <input type="text" name="userName" id="userName" required="" class="form-control"  placeholder="@Schoda2017"  value="<?= getSaveFields('userName')?>"/>
            </div>
          </div>

          <div class="row">
           <div class="col-sm-6">
            <label>Email</label>
            <input type="text" name="email" id="email" required="required" class="form-control"  placeholder="@Schoda2017@exemple.com"  value="<?= getSaveFields('email')?>"/>
          </div>
          <div class="col-sm-6">
            <label>Telephone</label>
            <input type="text" name="telephone" id="telephone" required="required" class="form-control"  placeholder="@(509)####-####"  value="<?= getSaveFields('telephone')?>"/>
          </div>
        </div>

        <div class="row">
         <div class="col-sm-6">
          <label>Secteur d'activite</label>
          <input type="text" name="secteurActivite" id="secteurActivite" required="required" class="form-control"  placeholder="@environement"  value="<?= getSaveFields('secteurActivite')?>"/>
        </div>
        <div class="col-sm-6">
          <label>Langue</label>
          <input type="text" name="langue" id="langue" required="required" class="form-control"  placeholder="@francais"  value="<?= getSaveFields('langue')?>"/>
        </div>
      </div>

      <div class="row">
       <div class="col-sm-6">
        <label>Adresse</label>
        <input type="text" name="adresse" id="adresse" required="required" class="form-control"  placeholder="@19,delmas"  value="<?= getSaveFields('adresse')?>"/>
      </div>
      <div class="col-sm-6">
        <label>Photo</label>
        <input type="submit" name="photo" class="form-control" value="Ajouter" />
      </div>
    </div>

    <div class="row">
     <div class="col-sm-6">
      <label>Password</label>
      <input type="password" name="password" id="password" required="required" class="form-control"  placeholder="@*************"/>
    </div>
    <div class="col-sm-6">
      <label>Password confirmation</label>
      <input type="password" name="confirmPassword" required="required" class="form-control"  placeholder="@************"/>
    </div>
  </div>    
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-info btn-md"  name="register">Register</button>
</div>
</div>
</div>

</div>
</form>