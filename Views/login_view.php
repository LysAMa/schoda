<form action="" method="POST" data-parsley-validate autocomplete="off">
<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Connectez</h4>
      </div>
      <div class="modal-body">
       <?php include("Public/partials/errors.php"); ?>
        <input type="text" class="form-control" name="identifiant" placeholder="Username or Email"value="<?= getSaveFields('identifiant')?>"/><br/>
        <input type="password" class="form-control" name="password" placeholder="@password"/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info btn-sm" name="login">Login</button>
        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Register</button>
      </div>
    </div>

  </div>
</div>
</form>