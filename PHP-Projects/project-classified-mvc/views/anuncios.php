<div class="container">
	<h1>Meus An�ncios</h1><br>

	<a href="<?php echo BASE_URL;?>anuncios/adicionar" class="btn btn-default">Adicionar An�ncio</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>T�tulo</th>
				<th>Valor</th>
				<th>A��es</th>
			</tr>
		</thead>

		<?php foreach($anuncios as $anuncio): ?>
			<tr>
				<td>
					<?php if(!empty($anuncio['url'])): ?>
					<img src="<?php echo BASE_URL;?>assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0">
					<?php else: ?>
					<img src="<?php echo BASE_URL;?>assets/images/default.jpg" height="50" border="0">
					<?php endif; ?>
				</td>
				<td><?php echo $anuncio['titulo']; ?></td>
				<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
				<td>
					<a href="<?php echo BASE_URL;?>anuncios/editar/<?php echo $anuncio['id']; ?>" class="btn btn-default">Editar</a>
					<a href="<?php echo BASE_URL;?>anuncios/excluir/<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>