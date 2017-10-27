<div class="container">
	<h1>Meus Anúncios - Adicionar</h1>

	<?php if(isset($msg) && !empty($msg)): ?>
	<div class="alert alert-success fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $msg; ?>
		</div>
	<?php endif; ?>	
	
	<form method="POST" enctype="multipart/form-data">
			
		<div class="form-group">
			<label for="categoria">Categoria:</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php  foreach($cats as $cat):?>
					<option value="<?php echo $cat['id'];?>"><?php echo $cat['nome'];?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="titulo">Título:</label>
			<input type="text" name="titulo" id="titulo" class="form-control">
		</div>

		<div class="form-group">
			<label for="valor">Valor:</label>
			<input type="text" name="valor" id="valor" class="form-control">
		</div>

		<div class="form-group">
			<label for="descricao">Descrição:</label>
			<textarea class="form-control" name="descricao"></textarea>
		</div>

		<div class="form-group">
			<label for="estado">Estado de Conservação:</label>
			<select name="estado" id="estado" class="form-control">
				<option value="1">Ruim</option>
				<option value="2">Bom</option>
				<option value="3">Ótimo</option>
			</select>
		</div>

		<input type="submit" value="Adicionar" class="btn btn-primary">
	</form>
</div>