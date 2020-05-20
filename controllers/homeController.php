<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$contatos = new Contatos();
		$dados['lista'] = $contatos->getAll();

		//Carrega o Template  o método loadTemplate da classe controller e passa  por parâmetro a view que será carregada e os parâmetros que será passados (utilizado) para essa View
		$this->loadTemplate('home', $dados);
	}

}