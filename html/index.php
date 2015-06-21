<?php
	require_once '../classes/database.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo(a)</title>
	<meta charset='UTF-8'>
	<link href="../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="sidebar-menu">
		<h1>Sistema Escola</h1>
		<h2>Cadastros</h2>
		<ul>
			<a href="?cadastrar=aluno"><li>Cadastrar Aluno</li></a>
			<a href="?cadastrar=professor"><li>Cadastrar Professor</li></a>
			<a href="?cadastrar=disciplina"><li>Cadastrar Disciplina</li></a>
			<a href="?cadastrar=turma"><li>Cadastrar Turma</li></a>
			<a href="?cadastrar=classe"><li>Cadastrar Classe</li></a>
		</ul>
		<h2>Visualizar</h2>
		<ul>
			<a href="?visualizar=alunos"><li>Alunos</li></a>
			<a href="?visualizar=professores"><li>Professores</li></a>
			<a href="?visualizar=cursos"><li>Cursos</li></a>
			<a href="?visualizar=disciplinas"><li>Disciplinas</li></a>
			<a href="?visualizar=turmas"><li>Turmas</li></a>
			<a href="?visualizar=classes"><li>Classes</li></a>
		</ul>
		<button class="matricula-button">Fazer Matricula</button>
		<button class="sair-button">Sair do Sistema</button>
	</div>
	<div class="main-content">
		<?php
		
				if (isset($_GET['cadastrar'])) { 
					$opcaoCadastro = $_GET['cadastrar'];
					$title = '';
					switch ($opcaoCadastro) {
						case '':
						break;
						case 'aluno':
							$title = "Novo aluno";
							require_once("cadastrar.php");
							break;
						case 'professor':
							$title = "Novo Professor";
							require_once("cadastrar.php");
							break;
						case 'disciplina':
							$title = "Nova Disciplina";
							require_once("cadastrar.php");
							break;
						case 'turma':
							$title = "Nova Turma";
							require_once("cadastrar.php");
							break;
						case 'classe':
							$title = "Nova Classe";
							require_once("cadastrar.php");
							break;
						default:
							echo "Opção não encontrada";
							break;
					}	
				}

				if (isset($_GET['visualizar'])) {
					$opcaoVisualizar = $_GET['visualizar'];
					$title = '';
					switch ($opcaoVisualizar) {
						case '':
						break;
						case 'alunos':
							$title = "Alunos";
							require_once("visualizar.php");
							break;
						case 'professores':
							$title = "Professores";
							require_once("visualizar.php");
							break;
						case 'disciplinas':
							$title = "Disciplinas";
							require_once("visualizar.php");
							break;
						case 'cursos':
							$title = "Cursos";
							require_once("visualizar.php");
							break;
						case 'turmas':
							$title = "Turmas";
							require_once("visualizar.php");
							break;
						case 'classes':
							$title = "Classes";
							require_once("visualizar.php");
							break;
						default:
							echo "Opção não encontrada";
							break;
					}	
				}

		?>
	</div>
</div>
</body>
</html>