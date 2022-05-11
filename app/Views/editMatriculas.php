<?php



$db = \Config\Database::connect();
$queryCursos = $db->query('SELECT * FROM tbl_cursos');
$resultCursos = $queryCursos->getResultArray();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matriculas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</head>

<body>


    <div class="contanier mt-5">
        <?php echo form_open('matriculas/store') ?>
        <?php echo anchor(base_url('/matriculas'), 'Voltar', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>

        <div class="form-group ml-5">
            <label>Alunos: </label>
            <input disabled type="text" value="<?php echo isset($matriculas['alunos_id']) ? $matriculas['alunos_id'] : '' ?>" name="alunos_id" class="form-control" style="width: 50%">
        </div>
        <div class="form-group ml-5">
            <label>ID Cursos: </label>
            <input type="text" value="<?php echo isset($matriculas['cursos_id']) ? $matriculas['cursos_id'] : '' ?>" name="cursos_id" class="form-control" style="width: 50%">
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary ml-5 ">
        <input type="hidden" name="id_matricula" value="<?php echo isset($matriculas['id_matricula']) ? $matriculas['id_matricula'] : '' ?>">

        <?php echo form_close(); ?>

    </div>



    <div >

        <h3>Tabela de Infomrações Cursos</h3><br>
        <table class="table" id="table_id">
            <thead>
                <tr>

                    <th>ID Curso</th>
                    <th>Título</th>
                    <th>Descrição</th>




                </tr>
            <tbody>
                <?php foreach ($resultCursos as $key => $value) :  ?>

                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['titulo'] ?></td>
                    <td><?php echo $value['descricao'] ?></td>

            </tbody>
        <?php endforeach; ?>
        </table>

    </div>


</body>

</html>