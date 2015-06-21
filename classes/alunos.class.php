<?php
	

	require_once "crud.class.php";

	class Alunos extends Crud {

		protected 	$table 		 = "aluno";
		private 	$nome 		 = '';
		private 	$dataNasc 	 = '';
		private 	$email 		 = '';
		

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function setDataNasc($dataNasc) {
			$this->dataNasc = $dataNasc;
		}			

		public function setEmail($email) {
			$this->email = $email;
		}
		
		public function getNome() {
			return $this->nome;
		}

		public function getDataNasc() {
			return $this->dataNasc;
		}

		public function getEmail() {
			return $this->email;
		}

	
		public function insert() {
			$stmt = Database::query("INSERT INTO $this->table (nome, dataNasc, email) VALUES (:nome, :dataNasc, :email)");
			$stmt = Database::bind(':nome', $this->nome);
			$stmt = Database::bind(':dataNasc', $this->dataNasc);			
			$stmt = Database::bind(':email', $this->email);
			$stmt = Database::execute();
			return $stmt;
		}

		public function update($id) {
			$stmt = $handler->prepare("UPDATE $this->table SET nome = :nome, dataNasc = :dataNasc, email = :email");
			$stmt = Database::bind(':nome', $this->nome);
			$stmt = Database::bind(':dataNasc', $this->dataNasc);
			$stmt = Database::bind(':email', $this->email);
			$stmt = Database::execute();
			return $stmt;
		}

		public function delete($id) {
			$stmt = Database::query("DELETE from $this->table WHERE id_aluno =  $id");
			$stmt = Database::execute();
			return $stmt;
		}
	}

?>