<?php
		# Magic method to autoload my class when initialized.
		function __autoload($class_name) {
			require_once '../classes/' . $class_name . '.class.php';
		}

		# New Entry Student
		if (isset($_POST['cadastrarAluno'])) {  # Just to avoid xamp notice...
			
			$cadastrarAluno = $_POST['cadastrarAluno'];
			$aluno = new Alunos();

			$nomeCompleto 		= $_POST['nomeCompleto'];
			$dataNasc 			= $_POST['dataNasc'];
			$email 				= $_POST['email'];
			
			$aluno->setNome($nomeCompleto);
			$aluno->setDataNasc($dataNasc);
			$aluno->setEmail($email);
			

			try {
				$insert = $aluno->insert();
				if ($insert) {
					echo "<span style='color:green'>Aluno cadastrado com sucesso!</span>";
				}
			}
			catch (PDOException $e) {
				echo $e->getMessage();
			}
			
		}

		# Form New Student
		if (isset($opcaoCadastro) && $opcaoCadastro == "aluno") {
			echo "<div class='container-cadastro'>";
				echo "<form action='cadastrar.php' method='post'>";
					echo '<fieldset>';
						echo "<legend>$title</legend>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Nome Completo' name='nomeCompleto' id='nomeCompleto'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Data de Nascimento' name='dataNasc' id='dataNasc'></input>";
							echo "</div>";
							echo "<input type='text' placeholder='Email' name='email' id='email'></input>";
							echo "</div>";							
					echo '</fieldset>';
							echo "<input type='submit' class='cadastrarNovo' name='cadastrarAluno' value='Cadastrar'></button>";
							echo "<input type='reset' class='limparNovo' name='limparNovo' value='Limpar'></button>";
			echo '</div>';
		}

		# New Entry Professor

		# Form New Profesor
		if (isset($opcaoCadastro) && $opcaoCadastro == "professor") {
			echo "<div class='container-cadastro'>";
				echo "<form action='cadastrar.php' method='post'>";
					echo '<fieldset>';
						echo "<legend>$title <span style='color:red;'>NÃO IMPLEMENTADO</span></legend>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Nome Completo' name='nomeCompleto' id='nomeCompleto'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Data de Nascimento' name='dataNasc' id='dataNasc'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Email' name='email' id='email'></input>";
							echo "</div>";
					echo '</fieldset>';
							echo "<input type='submit' class='cadastrarNovo' name='cadastrarProfessor' value='Cadastrar'></button>";
							echo "<input type='reset' class='limparNovo' name='limparNovo' value='Limpar'></button>";
			echo '</div>';
		}


		# New Entry Discipline


		# Form New Discipline
		if (isset($opcaoCadastro) && $opcaoCadastro == "disciplina") {
			echo "<div class='container-cadastro'>";
				echo "<form action='cadastrar.php' method='post'>";
					echo '<fieldset>';
						echo "<legend>$title <span style='color:red;'>NÃO IMPLEMENTADO</span></legend>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Nome da Disciplina' name='nomeDisciplina' id='nomeDisciplina'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Carga Horária' name='cargaHoraria' id='cargaHoraria'></input>";
							echo "</div>";
					echo '</fieldset>';
							echo "<input type='submit' class='cadastrarNovo' name='cadastrarDisciplina' value='Cadastrar'></button>";
							echo "<input type='reset' class='limparNovo' name='limparNovo' value='Limpar'></button>";
			echo '</div>';
		}

		# New Entry Class


		# Form New Class
		if (isset($opcaoCadastro) && $opcaoCadastro == "turma") {
			echo "<div class='container-cadastro'>";
				echo "<form action='cadastrar.php' method='post'>";
					echo '<fieldset>';
						echo "<legend>$title <span style='color:red;'>NÃO IMPLEMENTADO</span></legend>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Sigla da Turma' name='siglaTurma' id='siglaTurma'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Número da Turma' name='numTurma' id='numTurma'></input>";
								echo "<div class='num-helper'>
									<ul>
										<li>100 => Bacharelado em Sistemas de Informação</li>
										<li>110 => Licenciatura em Matemática</li>
										<li>120 => Licenciatura em Pedagogia</li>
										<li>130 => Tecnólogo em Negócios Imobiliários</li>
										<li>140 => Tecnólogo em Sistemas para Internet</li>
								</div>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<label>Curso da Turma</label>";
								echo "<select class='select-input'>";
									echo "<option value='BSI'>Bacharelado em Sistemas de Informação </option>";
									echo "<option value='MAT'>Licenciatura em Matemática</option>";
									echo "<option value='PEG'>Licenciatura em Pedagogia</option>";
									echo "<option value='TNI'>Tecnólogo em Negócios Imobiliários</option>";
									echo "<option value='TSI'>Tecnólogo em Sistemas para Internet</option>";
								echo '</select>';
							echo "</div>";
					echo '</fieldset>';
							echo "<input type='submit' class='cadastrarNovo' name='cadastrarDisciplina' value='Cadastrar'></button>";
							echo "<input type='reset' class='limparNovo' name='limparNovo' value='Limpar'></button>";
			echo '</div>';
		}

		# New Entry Classroom


		# Form New Classroom
		if (isset($opcaoCadastro) && $opcaoCadastro == "classe") {
			echo "<div class='container-cadastro'>";
				echo "<form action='cadastrar.php' method='post'>";
					echo '<fieldset>';
						echo "<legend>$title <span style='color:red;'>NÃO IMPLEMENTADO</span></legend>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Horário de Inicío' name='horaInicio' id='horaInicio'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<input type='text' placeholder='Horário de Término' name='horaTermino' id='horaTermino'></input>";
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<label>Disciplina</label>";
								echo "<select class='select-input'>";
									echo "<option value='pweb'> Programação Web</option>";
									echo "<option value='fredes'> Fundamentos de Redes </option>";
									echo "<option value='wdesign'> Web Design</option>";
									echo "<option value='pitI'>Projeto Integrador I</option>";
								echo '</select>';
							echo "</div>";
							echo "<div class='block-class'>";
								echo "<label>Professor</label>";
								echo "<select class='select-input'>";
									echo "<option value='BSI'>Bacharelado em Sistemas de Informação </option>";
									echo "<option value='MAT'>Licenciatura em Matemática</option>";
									echo "<option value='PEG'>Licenciatura em Pedagogia</option>";
									echo "<option value='TNI'>Tecnólogo em Negócios Imobiliários</option>";
									echo "<option value='TSI'>Tecnólogo em Sistemas para Internet</option>";
								echo '</select>';
							echo "</div>";
					echo '</fieldset>';
							echo "<input type='submit' class='cadastrarNovo' name='cadastrarDisciplina' value='Cadastrar'></button>";
							echo "<input type='reset' class='limparNovo' name='limparNovo' value='Limpar'></button>";
			echo '</div>';
		}
?>