	CREATE TABLE IF NOT EXISTS usuarios
	(
		id_usuario 	INT 			NOT NULL AUTO_INCREMENT,
		nome 		VARCHAR(135)	NOT NULL,
		login		VARCHAR(35)		NOT NULL,
		email		VARCHAR(35)		NOT NULL,
		senha		VARCHAR(15)		NOT NULL,
		PRIMARY KEY (id_usuario)
	);

	CREATE TABLE IF NOT EXISTS aluno
	(
		id_aluno	INT				NOT NULL AUTO_INCREMENT,
		nome		VARCHAR(135)	NOT NULL,
		dataNasc	DATE 			NOT NULL,
		email		VARCHAR(135)	NOT NULL,
		PRIMARY KEY (id_aluno)
	);

	CREATE TABLE IF NOT EXISTS curso
	(
		id_curso 	INT				NOT NULL AUTO_INCREMENT,
		nome 		VARCHAR(135)	NOT NULL,
		duracao		INT UNSIGNED 	NOT NULL,
		periodo		INT UNSIGNED	NOT NULL,
		PRIMARY KEY (id_curso)
	);

	CREATE TABLE IF NOT EXISTS turma
	(
		id_turma	INT 			NOT NULL AUTO_INCREMENT,
		# 100 => Bacharelado em Sistemas de Informação
		# 110 => Licenciatura em Matemática
		# 120 => Licenciatura em Pedagogia
		# 130 => Tecnólogo em Negócios Imobiliários
		# 140 => Tecnólogo em Sistemas para Internet 	 		
		num_turma 	INT(3) 			NOT NULL,
		sigla		VARCHAR(9)		NOT NULL,
		fk_curso	INT,
		PRIMARY KEY (id_turma),
		FOREIGN KEY (fk_curso) REFERENCES curso (id_curso)
	);

	CREATE TABLE IF NOT EXISTS matricula
	(
		id_matricula	INT 		NOT NULL,
		fk_turma		INT,		
		fk_aluno		INT,
		PRIMARY KEY (id_matricula),
		FOREIGN KEY (fk_turma) REFERENCES turma (id_turma),
		FOREIGN KEY (fk_aluno) REFERENCES aluno (id_aluno)
	);

	CREATE TABLE IF NOT EXISTS professor
	(
		id_professor	INT				NOT NULL AUTO_INCREMENT,
		nome			VARCHAR(135)	NOT NULL,
		dataNasc		DATE 			NOT NULL,
		email			VARCHAR(135)	NOT NULL,		
		PRIMARY KEY (id_professor)
	);

	CREATE TABLE IF NOT EXISTS disciplina 
	(
		id_disciplina 			INT 			NOT NULL AUTO_INCREMENT,
		nome 					VARCHAR(135) 	NOT NULL,
		cargaHoraria			INT(4)			NOT NULL,
		PRIMARY KEY (id_disciplina)
	);

		CREATE TABLE IF NOT EXISTS classe 
	(
		id_classe		INT 			NOT NULL AUTO_INCREMENT,
		horarioInicio	TIME			NOT NULL,
		horarioFim		TIME			NOT NULL,
		fk_disciplina	INT,
		fk_professor	INT,
		PRIMARY KEY (id_classe),
		FOREIGN KEY (fk_disciplina) REFERENCES disciplina (id_disciplina),
		FOREIGN KEY (fk_professor) REFERENCES professor(id_professor)
	);

	CREATE TABLE IF NOT EXISTS grade_curricular 
	(
		id_grade 				INT 			NOT NULL AUTO_INCREMENT,
		fk_disciplina			INT,
		fk_curso				INT,
		PRIMARY KEY (id_grade),
		FOREIGN KEY (fk_disciplina) REFERENCES disciplina (id_disciplina),
		FOREIGN KEY (fk_curso) REFERENCES curso (id_curso)
	);

	CREATE TABLE IF NOT EXISTS disciplina_classe
	(
		id_disciplina_classe 	INT 			NOT NULL AUTO_INCREMENT,
		fk_classe				INT,
		fk_matricula 			INT,
		fk_disciplina			INT,
		fk_professor			INT,
		PRIMARY KEY (id_disciplina_classe),
		FOREIGN KEY (fk_classe) REFERENCES classe (id_classe),
		FOREIGN KEY (fk_matricula) REFERENCES matricula (id_matricula),
		FOREIGN KEY (fk_disciplina) REFERENCES disciplina (id_disciplina),
		FOREIGN KEY (fk_professor) REFERENCES professor(id_professor)
	);






