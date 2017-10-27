<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
	<!-- Inicio: Menu NAV -->
	<nav class="navbar navbar-inverse" style="border-radius: 0">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php echo BASE_URL; ?>" class="navbar-brand">Classificados</a>
			</div>
			<ul class="nav navbar-nav navbar-right">

				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<?php  
						$u = new Usuarios();
						$userName = $u->userInfo();
					?>
					<li><a href="#">Olá, <?php echo $userName['nome'];?></a></li>
					<li><a href="<?php echo BASE_URL; ?>anuncios">Meus Anúncios</a></li>
					<li><a href="<?php echo BASE_URL; ?>login/sair">Sair</a></li>
				<?php else: ?>	
					<li><a href="<?php echo BASE_URL; ?>cadastrar">Cadastre-se</a></li>
					<li><a href="<?php echo BASE_URL; ?>login">Login</a></li>
				<?php endif; ?>
			</ul>	
		</div>
	</nav>
<!-- Fim: Menu NAV -->
	
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>