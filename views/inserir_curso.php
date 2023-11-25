<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <?php if(!isset($_GET['editar'])){ ?>

    <div class="w-50">
        <h1 class="text-center mb-4">Inserir novo curso</h1>
        <form method="post" action="processa_curso.php">
            <div class="mb-3">
                <label class="form-label">Nome curso:</label>
                <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" minlength="3" required>
                <div class="form-text">O nome do curso deve ter no mínimo 3 caracteres.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Carga horária:</label>
                <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária">
            </div>
            <input type="submit" class="btn btn-success d-block mx-auto" value="Inserir curso">
        </form>
    </div>

    <?php } else { ?>
        <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
            <?php if($linha['id_curso'] == $_GET['editar']){ ?>

                <div class="w-50">
                    <h1 class="text-center mb-4">Editar curso</h1>
                    <form method="post" action="edita_curso.php">
                        <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nome curso:</label>
                            <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" minlength="3" required value="<?php echo $linha['nome_curso']; ?>">
                            <div class="form-text">O nome do curso deve ter no mínimo 3 caracteres.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Carga horária:</label>
                            <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária"  value="<?php echo $linha['carga_horaria']; ?>">
                        </div>
                        <input class="btn btn-success d-block mx-auto" type="submit" value="Editar curso">
                    </form>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>