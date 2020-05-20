<?php
class Core {

	
	//Esse método verifica pega o Controller e o Action da URL para instanciar as classes e instanciar o view
	public function run() {

	
		$url = '/';
		if(isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$params = array();

		if(!empty($url) && $url != '/') {
			$url = explode('/', $url); //Transforma os dados da URL em um ARRAY
			array_shift($url); //Excluir a primeira posição do Array
			
			//Pegando o Controller
			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])) {
				//Pegando o Action
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index'; //Se não ouver action, usará o action index por padrão
			}

			if(count($url) > 0) {
				//Pegando os parâmetros
				$params = $url; 
			}

		} else {
			//Se não houver Controller e Action preenchidos na URL, então é carregado o Controller homeController e o Action index por padrão
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		//Se o Controller ou o Action forem inválidos, então é carregado o Controller notFoundController e seu Action index
		if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
			$currentController = 'notfoundController';
			$currentAction = 'index';
		}

		//Instanciando a o Controller que foi definido nas condições acima
		$c = new $currentController();

		//Esse método chama a classe e executa o seu método (array do primeiro parâmetro) e passa o parâmetro para esse método (segundo parâmetro)
		call_user_func_array(array($c, $currentAction), $params);
		
	}

}