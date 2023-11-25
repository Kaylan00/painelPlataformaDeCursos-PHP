<style>
        tr td:hover{
            background-color: #ECF6F4;
        }
        td{
            border: solid 1px black
        }
        th, td{
            border: 2px solid #dee2e6;
        }
    </style>
<div class="container content-cursos my-3 p-0" style="height:80vh;">
<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<table class="table table-border text-center">
    <tr class="table-dark">
        <th >Nome Cursos</th>
        <th>Carga Hóraria</th>
    </tr>
    <?php
    while($linha = mysqli_fetch_array($consulta_cursos)){
        echo '<tr><td class="table-light">'. $linha['nome_curso'] . '</td>';
        echo '<td class="table-light">'. $linha['carga_horaria'] .'</td></tr>';
    }
    ?>
</table>
</div>