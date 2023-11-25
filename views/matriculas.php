<style>
    #matriculas th,
    #matriculas td {
        border: 3px solid #dee2e6;
    }
</style>

<div class="container my-3" style="height: 80vh;">
    <a class="btn btn-success btn-custom" href="?pagina=inserir_matricula">Inserir nova matrícula</a>

    <table class="table text-center" id="matriculas">
        <thead>
            <tr class="table-dark">
                <th>Nome aluno</th>
                <th>Nome curso</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($linha = mysqli_fetch_array($consulta_matriculas)) {
                echo '<tr>';
                echo '<td class="table-light">' . $linha['nome_aluno'] . '</td>';
                echo '<td class="table-light">';
                
                // Verificar se a chave 'nome_curso' existe
                if (isset($linha['nome_curso'])) {
                    echo $linha['nome_curso'];
                } else {
                    echo 'Curso não definido';
                }
                
                echo '</td>';
            ?>
                <td>
                <a class="btn btn-danger btn-custom" href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
                    Deletar
                </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
