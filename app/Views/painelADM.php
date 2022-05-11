<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel ADM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
    <div class="alert alert-info">
            
            <p class="mt-3"><?php echo anchor(base_url('/cursos'), 'Página Cursos ') ?></p>
            <p class="mt-3"><?php echo anchor(base_url('/alunos'), 'Página Alunos ') ?></p>
            <p class="mt-3"><?php echo anchor(base_url('/matriculas'), 'Página Matrículas ') ?></p>

        </div>
       


    </div>
</body>

</html>