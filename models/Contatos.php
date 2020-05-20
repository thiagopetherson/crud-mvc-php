<?php
class Contatos extends model {

	//Pega todos os usuários para preencher a lista da View Home
	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM contatos";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	//Pega um usuário somente, para preencher o form de edição da View edit
	public function get($id) {
		$array = array();

		$sql = "SELECT * FROM contatos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch(); //Como é só um contato que será retornado, utilizamos o fetch ao invés do fetchAll
		}

		return $array;
	}

	//Adiciona os dados vindos do form de cadastro da View Add
	public function add($nome, $email) {
		if($this->emailExists($email) == false) {
			$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	//Edita os dados vindo do form de edição da View edit
	public function edit($nome, $id) {
		$sql = "UPDATE contatos SET nome = :nome WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	//Método que é chamado para remover um usuário
	public function delete($id) {
		$sql = "DELETE FROM contatos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}


	//Verifica se o email já existe no momento de cadastro do usuário
	private function emailExists($email) {
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

}