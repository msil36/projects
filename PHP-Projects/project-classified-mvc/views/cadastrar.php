<div class="container">
	<h1>Cadastre-se</h1>
	
	<?php if (isset($msg) && !empty($msg)): ?>
		<?php if($msg == 1): ?>
			<div class="alert alert-warning fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Preencha todos os campos
			</div>
		<?php elseif($msg == 2): ?>	
			<div class="alert alert-warning fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Este usuário já existe!
				<a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
			</div>
		<?php else: ?>
			<div class="alert alert-success fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Parabéns!</strong> Cadastrado com sucesso. 
				<a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
			</div>	
		<?php endif; ?>	
	<?php endif; ?>	

	<form method="POST">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control">
		</div>

		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control">
		</div>

		<div class="form-group">
			<label for="telefone">Telefone:</label>
			<input type="text" name="telefone" id="telefone" class="form-control">
		</div>

		<input type="submit" value="Cadastrar" class="btn btn-default">

	</form>
</div>
