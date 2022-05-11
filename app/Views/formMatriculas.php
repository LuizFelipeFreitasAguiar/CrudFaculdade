<?php


$db = \Config\Database::connect();
$queryAlunos = $db->query('SELECT * FROM tbl_alunos');
$resultAluno = $queryAlunos->getResultArray();


$queryCursos = $db->query('SELECT * FROM tbl_cursos');
$resultCursos = $queryCursos->getResultArray();


// foreach ($resultAluno as $value);

// foreach($result as $key => $value){
//     echo $value['nome'];
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Matrículas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <script>
        $(document).ready(function() {
            $('.alunos').select2();
        });
    </script>

    <div class="contanier mt-5">
        <?php echo form_open('matriculas/store') ?>
        <?php echo anchor(base_url('/matriculas'), 'Voltar', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>

        <div class="form-group ml-5">
            <label>Aluno: </label>

                <select class="alunos" name="alunos_id" >
                    <option></option>
                    <?php foreach ($resultAluno as $value) : ?>

                    <option value="<?php echo $value['id'] ?>"><?php echo $value['nome']; ?></option>
                <?php endforeach; ?>
 
                </select>
        </div>
        <div class="form-group ml-5">
            <label>Cursos: </label>
                <select class="alunos" name="cursos_id" multiple="multiple">
                    <?php foreach ($resultCursos as $value) : ?>
                    <option value="<?php echo$value['id'] ?>"><?php echo $value['titulo']; ?></option>
                    <?php endforeach; ?>

                </select>
        </div>

        <input type="submit" value="Criar Matrícula" class="btn btn-primary ml-5 ">
        <input type="hidden" name="id" id="id" value="<?php echo isset($matriculas['id_matricula']) ? $matriculas['id_matricula'] : '' ?>">

        <?php echo form_close(); ?>

    </div>

</body>

</html>