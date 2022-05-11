<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

<body>

    <div class="container mt-5">
        <?php echo anchor(base_url('painelADM'), 'Página Principal', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>

        <?php echo anchor(base_url('cursos/create'), 'Novo Curso', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>

        <table class="table">
            <thead>
                <tr>

                    <th>Curso</th>
                    <th>Descrição</th>
                    <th>Opções</th>



                </tr>
            <tbody>
                <?php foreach ($cursos as $key => $value) :  ?>

                    <td><?php echo $value['titulo'] ?></td>
                    <td><?php echo $value['descricao'] ?></td>

                    <td>
                        <?php
                        echo anchor('cursos/edit/' . $value['id'], 'Editar');
                        ?>
                        -
                        <?php
                        echo anchor('cursos/delete/' . $value['id'], 'Excluir ', ['onclick' => 'return confirmar()']);
                        ?>
                    </td>

            </tbody>
        <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>

    </div>



</body>

</html>