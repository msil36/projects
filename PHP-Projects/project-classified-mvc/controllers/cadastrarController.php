<?php 

class cadastrarController extends controller {

	public function index() {
		$dados = array();

		$u = new Usuarios();
		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = $_POST['senha'];
			$telefone = addslashes($_POST['telefone']);

			if(!empty($nome) && !empty($email) && !empty($senha)) {
				if($u->cadastrar($nome, $email, $senha, $telefone)) {
					//sucesso
					$dados['msg'] = 3;
				} else {
					//cadastrado
					$dados['msg'] = 2;
				}
			} else {
				//preencha os campos
				$dados['msg'] = 1;
			}
		}

		$this->loadTemplate('cadastrar', $dados);
	}


}