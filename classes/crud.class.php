<?php	
	
	require_once 'database.class.php';

	abstract class Crud extends Database {

		protected $table = '';

		abstract public function insert(); 
		abstract public function update($id); 

		public function findOne($id) {
			$stmt = Database::query("SELECT * from $this->table WHERE id = $id");
			$stmt = Database::fetch();
			return $stmt; 
		}	

		public function findAll() {
			$stmt = Database::query("SELECT * FROM $this->table");
			$stmt = Database::fetch();
			return $stmt;
		}

		public function delete($id) {
			$stmt = Database::query("DELETE from $this->table WHERE id =  $id");
			$stmt = Database::execute();
			return $stmt;
		}
	}

?>