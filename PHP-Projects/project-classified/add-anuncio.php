<?php  require 'pages/header.php';?>
<div class="container">
	<h1>Meus Anúncios - Adicionar</h1>
	<?php 
		//Bloqueia acesso a uuuario não logado
		if(empty($_SESSION['cLogin'])) {
			?>
				<script type="text/javascript">window.location.href="login.php"</script>
			<?php
			exit;
		}

		require 'classes/anuncios.class.php';
		$a = new Anuncios();

		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$categoria = addslashes($_POST['categoria']);
			$valor = addslashes($_POST['valor']);
			$descricao = addslashes($_POST['descricao']);
			$estado = addslashes($_POST['estado']);

			$a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);

			?>
				<div class="alert alert-success fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Produto adicionado com sucesso!
				</div>
			<?php
		}

	 ?>
	
	<form method="POST" enctype="multipart/form-data">
			
		<div class="form-group">
			<label for="categoria">Categoria:</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php 
					require 'classes/categorias.class.php'; 
					$c = new Categorias();
					$cats = $c->getList();
					foreach($cats as $cat):
				?>
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
<?php  require 'pages/footer.php';?>