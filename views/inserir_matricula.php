<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="d-flex flex-column align-items-center">
        <h1 class="mb-4">Inserir nova matrícula</h1>

        <form method="post" action="processa_matricula.php" class="mb-4">
            <div class="mb-3">
                <label for="escolha_aluno" class="badge badge-secondary">Selecione o aluno</label>
                <select class="form-select" name="escolha_aluno">
                    <option selected>Selecione um aluno</option>
                    <?php while ($linha = mysqli_fetch_array($consulta_alunos)) : ?>
                        <option value="<?php echo $linha['id_aluno']; ?>"><?php echo $linha['nome_aluno']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="escolha_curso" class="badge badge-secondary">Selecione o curso</label>
                <select class="form-select" name="escolha_curso">
                    <option selected>Selecione um curso</option>
                    <?php while ($linha = mysqli_fetch_array($consulta_cursos)) : ?>
                        <option value="<?php echo $linha['id_curso']; ?>"><?php echo $linha['nome_curso']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Matricular aluno no curso</button>
        </form>
    </div>
</div>