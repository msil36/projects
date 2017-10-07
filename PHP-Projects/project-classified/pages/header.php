<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Classificados</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<!-- Inicio: Menu NAV -->
	<nav class="navbar navbar-inverse" style="border-radius: 0">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="./" class="navbar-brand">Classificados</a>
			</div>
			<ul class="nav navbar-nav navbar-right">

				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<?php
						require 'classes/usuarios.class.php';  
						$u = new Usuarios();
						$userName = $u->userInfo();
					?>
					<li><a href="#">Ol�, <?php echo $userName['nome'];?></a></li>
					<li><a href="meus-anuncios.php">Meus An�ncios</a></li>
					<li><a href="sair.php">Sair</a></li>
				<?php else: ?>	
					<li><a href="cadastre-se.php">Cadastre-se</a></li>
					<li><a href="login.php">Login</a></li>
				<?php endif; ?>
			</ul>	
		</div>
	</nav>
<!-- Fim: Menu NAV -->