<?php
class passagemController extends controller {

	public function index() {
		$dados = array();

		$passagem = new passagens();

		$dados['passagens'] = $passagem->list();

		$this->loadView('listapassagens', $dados);
	}

	public function adicionar() {
		$dados =  array();

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);
			$origem = addslashes($_POST['origem']);
			$destino = addslashes($_POST['destino']);
			$numero = addslashes($_POST['voo']);
			$ida = addslashes($_POST['data_ida']);
			$volta = addslashes($_POST['data_volta']);

			$passagem = new passagens();

			$passagem->add($nome, $cpf, $telefone, $email, $origem, $destino, $numero, $ida, $volta);

			header('Location: '.URL.'/passagem');
		}

		$this->loadView('adicionar', $dados);
	}

	public function visualizar($id) {
		$dados = array();

		if(isset($id) && !empty($id)) {

			$passagem = new passagens();

			$dados['passagens'] = $passagem->view($id);
		}

		$this->loadView('visualizar', $dados);
	}

	public function editar($id) {
		$dados = array();

		$passagem = new passagens();

		$dados['list_passagens'] = $passagem->listar($id);

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);
			$origem = addslashes($_POST['origem']);
			$destino = addslashes($_POST['destino']);
			$numero = addslashes($_POST['voo']);
			$ida = addslashes($_POST['data_ida']);
			$volta = addslashes($_POST['data_volta']);

			$passagem->edit($id, $nome, $cpf, $telefone, $email, $origem, $destino, $numero, $ida, $volta);

			header('Location: '.URL.'/passagem');
		}

		$this->loadView('editar', $dados);
	}

	public function deletar($id) {
		$passagem = new passagens();
		$passagem->del($id);

		header('Location: '.URL.'/passagem');
	}

}

?>