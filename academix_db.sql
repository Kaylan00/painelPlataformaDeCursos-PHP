CREATE TABLE IF NOT EXISTS CURSOS (
    id_curso int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
);

CREATE TABLE IF NOT EXISTS ALUNOS (
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
);

CREATE TABLE IF NOT EXISTS ALUNOS_CURSOS (
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
);