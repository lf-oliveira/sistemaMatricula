<script>
// Simple confirmation script for deleting.
function confirmacao(id) {
	var resposta = confirm('Tem certeza que deseja excluir este registro?');
	if (resposta) {
		window.location.href = "deletar.php?id="+id;	
	}
}

</script>

<?php
		# Magic method to autoload my class when initialized.
		function __autoload($class_name) {
			require_once '../classes/' . $class_name . '.class.php';
		}

		# Show Students
		$aluno = new Alunos();
		$row = $aluno->findAll();

		# List Students
		if (isset($opcaoVisualizar) && $opcaoVisualizar == "alunos") {
			echo "<div class='container-visualizar'>";
				echo "<h1>$title</h1>";
				echo "<table class='tableShow'>";
					echo "<th>Nome</th>";
					echo "<th>Data Nascimento</th>";
					echo "<th>Email</th>";
					echo "<th>Opções</th>";
						foreach ($row as $value) {
							echo "<tr>";
							echo '<td>'.$value->nome.'</td>';
							echo '<td>'.$value->dataNasc.'</td>';
							echo '<td>'.$value->email.'</td>';
							echo "<td><button class='buttonModify value='A'>Alterar</button>
							<button onclick='confirmacao({$value->id_aluno})' class='buttonModify value='E'>Excluir</button></td>";
							echo "</tr>";
						}

				echo "</table>";
			echo "</div>";

			if (isset($_GET['deletar'])) {
				echo "<script>alert('oi')</script>";
			}


		} else {
			echo "NÃO IMPLEMENTADO";
		}
?>