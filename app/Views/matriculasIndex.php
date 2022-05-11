<?php

$db = \Config\Database::connect();
$query = $db->query('SELECT * FROM tbl_matriculas as matriculas 
inner join  tbl_cursos as cursos ON matriculas.cursos_id = cursos.id 
inner join tbl_alunos as alunos on matriculas.alunos_id = alunos.id ');
$result = $query->getResultArray();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>




</head>
<script>
    function confirmar() {
        if (!confirm('Deseja excluir essa informação ?')) {
            return false;
        } else {
            return true;
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>

<body>

    <div class="container mt-5">
        <?php echo anchor(base_url('painelADM'), 'Página Principal', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>

        <?php echo anchor(base_url('matriculas/create'), 'Nova Matrícula', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>


        <table class="display" id="table_id">
            <thead>
                <tr>

                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Curso</th>
                    <th>Opções</th>
                </tr>

            </thead>
            <tbody>

                <?php foreach ($result as $key => $value) :  ?>
                    <tr>
                        <td><?php echo $value['id_matricula'] ?></td>
                        <td><?php echo $value['nome'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['titulo'] ?></td>


                        <td>
                            <?php
                            echo anchor('matriculas/edit/' . $value['id_matricula'], 'Editar');
                            ?>
                            -
                            <?php
                            echo anchor('matriculas/delete/' . $value['id_matricula'], 'Excluir ', ['onclick' => 'return confirmar()']);
                            ?>
                        </td>
                    </tr>
    
        <?php endforeach; ?>
        </tbody>
        </table>


    </div>



</body>

</html>