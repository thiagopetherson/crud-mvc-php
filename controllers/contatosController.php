<?php
class contatosController extends controller {

	public function index() {}

	//Abrir a View add
	public function add() {
		$dados = array(
			'error' => ''
		);

		if(!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}
	
		$this->loadTemplate('add', $dados);
	}

	//Salvar os dados enviados pelo formulário de cadastro
	public function add_save() {
		if(!empty($_POST['email'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$contatos = new Contatos();
			if($contatos->add($nome, $email)) {
				header("Location: ".BASE_URL);
			} else {
				header("Location: ".BASE_URL.'contatos/add?error=exist');
			}			
		} else {
			header("Location: ".BASE_URL.'contatos/add');
		}
	}

	//Esse método serve tanto para carregar os dados e preencher o form como para salvar os dados submitados do form de edição -->
	public function edit($id) {
		// 1º passo: pegar as informações do contato pelo ID
		// 2º passo: carregar o formulário, preenchido.
		// 3º passo: receber os dados do form e editar.
		$dados = array();

		if(!empty($id)) {
			$contatos = new Contatos();

			if(!empty($_POST['nome'])) {
				$nome = $_POST['nome'];

				$contatos->edit($nome, $id);
			} else {
				$dados['info'] = $contatos->get($id);

				//Esse IF verifica se o ID passado é válido (Se houve retorno é válido)
				if(isset($dados['info']['id'])) {
					$this->loadTemplate('edit', $dados);
					exit;
				}
			}
		}

		//Redirecionar para a página inicial
		header("Location: ".BASE_URL);
	}

	public function del($id) {
		//1º Deletar o contato
		//2º Voltar para a home

		if(!empty($id)) {
			$contatos = new Contatos();
			$contatos->delete($id);
		}

		header("Location: ".BASE_URL);
	}


}



















