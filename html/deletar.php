<?php
	
	function __autoload($class_name) {
			require_once '../classes/' . $class_name . '.class.php';
	}

	# Delete Students
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$aluno = new Alunos();
		$delete = $aluno->delete($id);
		if ($delete) {
			header("location:index.php?visualizar=alunos");
		}
	}
?>