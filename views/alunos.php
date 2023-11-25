<style>
    thead{
        background-color: red;
    }
    th, td{
        border: 2px solid #dee2e6;
    }
    th, td:hover{
        background-color: #ECF6F4;
}
</style>
<div class="container p-0 my-3" style="height:80vh;">

<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-border text-center table-lg" id="alunos">
    <thead>
        <tr class="table-dark">
            <th>Nome aluno</th>
            <th>Data nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo '<tr>';
            echo '<td class="table-light">' . $linha['nome_aluno'] . '</td>';
            echo '<td class="table-light">' . $linha['data_nascimento'] . '</td>';
        ?>
            <td><a class="btn btn-primary" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
            <td><a class="btn btn-danger" href="deleta_aluno.php?id_curso=<?php echo $linha['id_aluno']; ?>">Deletar</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

</div>
