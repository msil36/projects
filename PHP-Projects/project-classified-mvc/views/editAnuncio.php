<div class="container">
	<h1>Meus Anúncios - Editar</h1>

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
				<?php foreach($cats as $cat):?>
					<option value="<?php echo $cat['id'];?>" <?php echo ($info['id_categoria']==$cat['id'])?'selected="selected"':'';?>><?php echo $cat['nome'];?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="titulo">Título:</label>
			<input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $info['titulo'];?>">
		</div>

		<div class="form-group">
			<label for="valor">Valor:</label>
			<input type="text" name="valor" id="valor" class="form-control" value="<?php echo $info['valor'];?>">
		</div>

		<div class="form-group">
			<label for="descricao">Descrição:</label>
			<textarea class="form-control" name="descricao" ><?php echo $info['descricao'];?></textarea>
		</div>

		<div class="form-group">
			<label for="estado">Estado de Conservação:</label>
			<select name="estado" id="estado" class="form-control">
				<option value="0" <?php echo ($info['estado']=='0')?'selected="selected"':'';?>>Ruim</option>
				<option value="1" <?php echo ($info['estado']=='1')?'selected="selected"':'';?>>Bom</option>
				<option value="2" <?php echo ($info['estado']=='2')?'selected="selected"':'';?>>Ótimo</option>
			</select>
		</div>


		<div class="form-group">
			<label for="add_foto">Fotos do anúncio:</label>
			<input type="file" name="fotos[]" multiple id="add_foto"><br>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				Fotos do Anúncio
			</div>
			<div class="panel-body">
				<?php foreach($info['fotos'] as $foto): ?>
					<div class="foto_item">
						<img src="<?php echo BASE_URL;?>assets/images/anuncios/<?php echo $foto['url']; ?>" class="img-thumbnail" border="0"><br>

						<a href="<?php echo BASE_URL;?>anuncios/excluirFoto/<?php echo $foto['id'];?>" class="btn btn-default">Excluir imagem</a>
					</div>
				<?php endforeach; ?>	
			</div>
		</div>

		<input type="submit" value="Salvar" class="btn btn-primary"><br><br>

	</form>
</div>