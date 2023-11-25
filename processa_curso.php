<?php 

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$sql = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('$nome_curso', $carga_horaria)";

mysqli_query($conexao, $sql);

header('location:index.php?pagina=cursos');
