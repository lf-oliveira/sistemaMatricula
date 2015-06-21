<?php
	
	include_once '../config/config.php';

	class Database {

		private $host 	= DB_HOST;
		private $user 	= DB_USER;
		private $pass 	= DB_PASS;
		private $dbname = DB_NAME;

		private $handler 	= '';
		private $error 		= '';
		private $stmt 		= '';


		public function __construct() {

			
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);

			try {
				$this->handler = new PDO($dsn, $this->user, $this->pass, $options);
			} 

			
			catch(PDOException $e) {
				$this->error = $e->getMessage();
				echo $this->error;
				die();
			}

		}

		
		public function endConnection() {
			$this->handler = null;
		}

		
		public function query($query) {
			$this->stmt = $this->handler->prepare($query);
		}

		
		public function bind($parameter, $value, $type = null) {
			if (is_int($value)) {
				$type = PDO::PARAM_INT;
			} 	else if (is_bool($value)) {
					$type = PDO::PARAM_BOOL;
				}	else if (is_null($value)) {
						$type = PDO::PARAM_NULL;
					}	else {
							$type = PDO::PARAM_STR;
					}	

			$this->stmt->bindValue($parameter, $value, $type);
		}

		
		public function execute() {
			return $this->stmt->execute();
		}

		public function fetch() {
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}
 
	}

	$conn = new Database();



?>