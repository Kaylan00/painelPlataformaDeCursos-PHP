<?php 
include 'db.php';

$id_aluno_curso = $_GET['id_aluno_curso'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE ID_ALUNO_CURSO = $id_aluno_curso";

$result = mysqli_query($conexao, $query);

if ($result) {
    header('location:index.php?pagina=matriculas');
} else {
    echo "Erro ao deletar a matrícula: " . mysqli_error($conexao);
}
?>