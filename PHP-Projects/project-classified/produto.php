
<?php require 'pages/header.php'; ?>

<?php  
require 'classes/anuncios.class.php';
require_once 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

if(isset($_GET['id']) && !empty($_GET['id'])) {
	$id = addslashes($_GET['id']);
} else {
	?>
	<script type="text/javascript">window.location.href="index.php"</script>
	<?php
	exit;
}

$info = $a->getAnuncio($id);

?>

<!-- Inicio:  Container-->
	<div class="container-fluid">

		<div class="row">
			<div class="col-sm-5">
				
				<div class="carousel slide" data-ride="carousel" id="meuCarousel">
					<div class="carousel-inner" role="listbox">
					<?php if(!empty($info['fotos'])): ?>
						<?php foreach($info['fotos'] as $chave => $foto):?>
							<div class="item <?php echo ($chave=='0')?'active':''; ?>">
								<img src="assets/images/anuncios/<?php echo $foto['url']; ?>">
							</div>
						<?php endforeach;?>
						<a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

						<a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<?php else: ?>
						<img src="assets/images/default.jpg" border="0">
					<?php endif; ?>	
					</div>		
				</div>

			</div>

			<div class="col-sm-7">
				<h1><?php echo $info['titulo']; ?></h1>
				<h4><?php echo $info['categoria']; ?></h4>
				<p><?php echo $info['descricao']; ?></p><br><br>
				<h3>R$ <?php echo number_format($info['valor'], 2); ?></h3>
				<h4>Telefone de contato: <?php echo $info['telefone']; ?></h4>
			</div>
		</div>

	</div>
	<!-- Fim:  Container-->

<?php require 'pages/footer.php'; ?>

