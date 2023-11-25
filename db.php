<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "academix_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$query = "SELECT * FROM `cursos`;";
$consulta_cursos = mysqli_query($conexao, $query);

if (!$consulta_cursos) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

$query = "SELECT * FROM `alunos`;";
$consulta_alunos = mysqli_query($conexao, $query);

if (!$consulta_alunos) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

$uqery = "SELECT alunos.nome_aluno, cursos.nome_curso 
        FROM alunos
        INNER JOIN alunos_cursos ON alunos.id_aluno = alunos_cursos.id_aluno
        INNER JOIN cursos ON alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);
if (!$consulta_matriculas) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

?>