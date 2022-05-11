<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="contanier mt-5">
    <?php echo form_open('alunos/store')?>


    <?php echo anchor(base_url('/alunos'), 'Voltar', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>


   <div class="form-group ml-5">
      <label>Nome: </label>
      <input type="text" value="<?php echo isset($alunos['nome']) ? $alunos['nome'] : '' ?>" name="nome" id="nome" class="form-control" style="width: 50%" >   
   </div>
   <div class="form-group ml-5">
      <label>Data de Nascimento: </label>
      <input type="date"  value="<?php echo isset($alunos['dt_nasc']) ? $alunos['dt_nasc'] : '' ?>" name="dt_nasc" id="dt_nasc" class="form-control" style="width: 50%" >   
   </div>
   <div class="form-group ml-5">
      <label>E-mail </label>
      <input type="text"  value="<?php echo isset($alunos['email']) ? $alunos['email'] : '' ?>" name="email" id="email" class="form-control" style="width: 50%" >   
   </div>



 <input type="submit" value="Salvar" class="btn btn-primary ml-5 ">
 <input type="hidden" name="id" id="id" value="<?php echo isset($alunos['id']) ? $alunos['id'] : '' ?>" >
             
 <?php echo form_close();?>

    </div>
</body>
</html>