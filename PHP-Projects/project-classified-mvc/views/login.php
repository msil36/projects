<div class="container">
  <h1>Login</h1>
  <?php if (isset($msg) && !empty($msg)): ?>
    <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo $msg; ?>
</div>
  <?php endif; ?> 
  <form method="POST">
		
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" class="form-control">
    </div>

    <input type="submit" value="Fazer login" class="btn btn-default">

  </form>
</div>