<?php

class anunciosController extends controller {

	public function index() {
		$dados = array();

		if(empty($_SESSION['cLogin'])) {
			header("Location: ".BASE_URL);
			exit;
		}

		$a = new Anuncios();
		$anuncios = $a->getMeusAnuncios();
		$dados['anuncios'] = $anuncios;

		$this->loadTemplate('anuncios', $dados);
	}

	public function adicionar() {
		$dados = array();

		if(empty($_SESSION['cLogin'])) {
			header("Location: ".BASE_URL."login");
			exit;
		}

		$a = new Anuncios();
		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$categoria = addslashes($_POST['categoria']);
			$valor = addslashes($_POST['valor']);
			$descricao = addslashes($_POST['descricao']);
			$estado = addslashes($_POST['estado']);

			$a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);

			$dados['msg'] = 'Produto adicionado com sucesso!';
		}

		$c = new Categorias();
		$cats = $c->getList();
		$dados['cats'] = $cats;

		$this->loadTemplate('addAnuncio', $dados);
	}

	public function editar($id) {
		$dados = array();

		if(empty($_SESSION['cLogin'])) {
			header("Location: ".BASE_URL."login");
			exit;
		}

		$a = new Anuncios();
		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$categoria = addslashes($_POST['categoria']);
			$valor = addslashes($_POST['valor']);
			$descricao = addslashes($_POST['descricao']);
			$estado = addslashes($_POST['estado']);
			
			if(isset($_FILES['fotos'])) {
				$fotos = $_FILES['fotos'];
			} else {
				$fotos = array();
			}
			

			$a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, addslashes($id));

			$dados['msg'] = 'Produto editado com sucesso!';
		}

		if(isset($id) && !empty($id)) {
		$info = $a->getAnuncio(addslashes($id));
		$dados['info'] = $info;

		} else {
		header("Location: ".BASE_URL."anuncios");
		exit;
		}

		$c = new Categorias();
		$cats = $c->getList();
		$dados['cats'] = $cats;

		$this->loadTemplate('editAnuncio', $dados);
	}

	public function excluirFoto($id) {
		if(empty($_SESSION['cLogin'])) {
			header("Location: ".BASE_URL."login");
			exit;
		}

		$a = new Anuncios();
		if(isset($id) && !empty($id)) {
			$id = addslashes($id);
			$id_anuncio = $a->excluirFoto($id);
		}

		if(isset($id_anuncio)) {
			header("Location: ".BASE_URL."anuncios/editar/".$id_anuncio);
		} else {
			header("Location: ".BASE_URL."anuncios");
		}	
	}


	public function excluir($id) {

		if(empty($_SESSION['cLogin'])) {
			header("Location: ".BASE_URL."login");
			exit;
		}

		$a = new Anuncios();
		if(isset($id) && !empty($id)) {
			$id = addslashes($id);
			$a->excluirAnuncio($id);
		}

		header("Location: ".BASE_URL."anuncios");
	}
}