<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <?php if(!isset($_GET['editar'])){ ?>

        <div class="w-50">
            <h1 class="text-center mb-4">Inserir novo aluno</h1>
            <form method="post" action="processa_aluno.php">
                <div class="mb-3">
                    <label class="form-label">Nome aluno:</label>
                    <input class="form-control" minlength="3" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Data de nascimento:</label>
                    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento (dd/mm/aaaa)" pattern="\d{2}/\d{2}/\d{4}" title="Formato: dd/mm/aaaa" required>
                    <div class="form-text">Formato: dd/mm/aaaa</div>
                </div>
                <input type="submit" class="btn btn-success d-block mx-auto" value="Inserir aluno">
            </form>
        </div>

    <?php } else { ?>
        <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
            <?php if($linha['id_aluno'] == $_GET['editar']){ ?>

                <div class="w-50">
                    <h1 class="text-center mb-4">Editar aluno</h1>
                    <form method="post" action="edita_aluno.php">
                        <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nome aluno:</label>
                            <input class="form-control" minlength="3" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data de nascimento:</label>
                            <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento (dd/mm/aaaa)" pattern="\d{2}/\d{2}/\d{4}" title="Formato: dd/mm/aaaa" value="<?php echo $linha['data_nascimento']; ?>" required>
                            <div class="form-text">Formato: dd/mm/aaaa</div>
                        </div>
                        <input class="btn btn-success d-block mx-auto" type="submit" value="Editar aluno">
                    </form>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>